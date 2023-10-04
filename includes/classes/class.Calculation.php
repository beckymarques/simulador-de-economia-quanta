<?php

if (! class_exists('SEQ_Calculation')) {
  class SEQ_Calculation
  {
    private $values = [];
    private $desconto = 0;
  
    /**
     * Recurso para envio de formulários HubSpot
     * @var string
     */
		private $formSubmissionResource = "https://api.hsforms.com/submissions/v3/integration/submit";
  
    /**
     * ID do portal HubSpot
     *
     * @var string
     */
		private $portalId = "9018223";
  
    /**
     * Guid do formulário HubSpot
     *
     * @var string
     */
		private $formGuid = "c9fef914-687d-469c-92b7-9a1cb44b44f7";
		
    public function __construct()
    {
      add_action('rest_api_init', array($this, 'custom_api_routes'));
			
			// Configurações
	  
			// Distribuidora de exeção
	    define("DISTRIBUIDORAS_DE_EXCECAO", [
		    'enel',
		    'light'
	    ]);
			
	    // Porcentagem de juros ML
	    define("DESCONTO_ML", get_option('seq_options')['seq_discount_ml']);
			
			// Porcentagem de juros GD
	    define("DESCONTO_GD", get_option('seq_options')['seq_discount_gd']);
			
	    // Valor gasto mensal para ser resposta positiva
	    define("GASTO_MENSAL_RESPOSTA_POSITIVA", 5000);
    }
  
    /**
     * Adição das rotas de API
     *
     * @return void
     */
    public function custom_api_routes()
    {
      $prefix = 'simulador_quanta/v1';
    
      register_rest_route($prefix, '/submit_form', array(
        'methods' => 'POST',
        'callback' => array($this, 'submitForm')
      ));
    
      register_rest_route($prefix, '/calculation', array(
        'methods' => 'POST',
        'callback' => array($this, 'calculation')
      ));
    }
    
    public function submitForm($request)
    {
      try {
	      // Campos obrigatórios recebidos do Front
        $requireds = array(
          'firstname',
          'company',
          'jobtitle',
          'email',
          'mobilephone',
          'valor_aproximado_dos_gastos_mensais_com_energia__r__',
          'faixa_gastos_mais_unidades',
          'empresa_ja_possui_demanda_contratada',
          'valor_da_demanda_em_kw',
          'distribuidora',
          'conta_de_energia',
          'como_conheceu_a_quanta_geracao',
          'politica_privacidade'
        );
        
        foreach ($requireds as $required) {
          if (!key_exists($required, $request->get_json_params()))
            throw new Exception("Campos inválidos: " . $required);
        }
        
        $fields = array();
        
        foreach ($request->get_json_params() as $key => $value) {
          $this->$key = $value;
          
					if ($key != "politica_privacidade") {
						// Padrão de envio de campos aceito pelo HubSpot
						$fields[] = array(
							"objectTypeId" => "0-1",
							"name" => $key,
							"value" => $value
						);
					}
        }
        
				// Criando data JSON
        $data = array(
          "fields" => $fields
        );
				
				// Preenche o campo política de privacidade
				if ($this->politica_privacidade) {
					$data["legalConsentOptions"] = array(
						"consent" => array(
							"consentToProcess" => true,
							"text" => "",
							"communications" => array(
								array(
									"value" => true,
									"subscriptionTypeId" => 999,
									"text" => "Consentimento para comunicação de texto para tipo de assinatura ID 999"
								),
								array(
									"value" => true,
									"subscriptionTypeId" => 777,
									"text" => "Consentimento para comunicar texto para {$this->firstname}"
								)
							)
						)
					);
				}
				
				// Forma Endpoint
				$url = "{$this->formSubmissionResource}/{$this->portalId}/{$this->formGuid}";
    
				// Requisição para o HubSpot
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $headers = array(
          'Content-Type: application/json'
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch); // Resposta da requisição POST
        
        if(curl_errno($ch)){
          throw new Exception('Erro na requisição cURL ');
        }
        
        curl_close($ch);
				// END Requisição
        
        if (json_decode($response)->status != "error"){
          return $this->response(200, json_decode($response)->inlineMessage, $data);
        }
        
				// Retorno de erro caso a requisição não ocorrer bem
        return $this->error("Erro ao enviar o formulário!");
      } catch (Exception $e) {
				// Retorna um erro para o Front
        return $this->error($e->getMessage(), 401);
      }
      
      wp_die();
    }
	  
	  /**
	   * Recebe os campos do Front, e calcula os resultados e feedback se é resposta positiva/negativa
	   *
	   * @param $request
	   * @return mixed
	   */
    public function calculation($request)
    {
      try {
        // Campos obrigatórios recebidos do Front
        $requireds = array(
          'valor_aproximado_dos_gastos_mensais_com_energia__r__',
          'faixa_gastos_mais_unidades',
          'empresa_ja_possui_demanda_contratada',
          'distribuidora'
        );
      
				// Verificação se os campos obrigatórios existem no $request
        foreach ($requireds as $required) {
          if (!key_exists($required, $request->get_json_params()))
            throw new Exception("Campos inválidos");
        }
      
				// Adição dos valores ao métodos mágicos
        foreach ($request->get_json_params() as $key => $value) {
          $this->$key = $value;
        }

        if ($this->empresa_ja_possui_demanda_contratada === 'Sim') {
            $this->desconto = (float) DESCONTO_ML; // Adição do desconto para ML
            return $this->positiveResponse(); // Resposta positiva
        } else {
            $this->desconto = (float) DESCONTO_GD;  // Adição do desconto para GD
            if ($this->isExceptedDistributor() && $this->getTotalMes() >= GASTO_MENSAL_RESPOSTA_POSITIVA) {
                return $this->positiveResponse(); // Resposta positiva
            }
        }
					
        return $this->negativeResponse(); // Resposta negativa
      } catch (Exception $e) {
				return $this->error($e->getMessage(), 401);
      }
        
      wp_die();
    }
	  
	  /**
	   * Retorna a resposta positiva para o Front
	   *
	   * @return mixed
	   */
    private function positiveResponse()
    {
      $desconto = $this->desconto;
    
      // Resposta positiva
      return $this->response(200, '', array(
        'feedback' => 'positive',
        'valorDesconto' => $this->getValorDesconto($desconto),
        'totalMesComDesconto' => $this->getTotalMesComDesconto($desconto),
        'economiaAnual' => $this->getEconomiaAnual($desconto)
      ));
    }
	  
	  /**
	   * Retorna a resposta negativa para o Front
	   *
	   * @return mixed
	   */
    private function negativeResponse()
    {
      // Resposta negativa
      return $this->response(200, '', array(
        'feedback' => 'negative'
      ));
    }
	  
	  /**
	   * Retorna a resposta de erro para o Front
	   *
	   * @param $message
	   * @param $code
	   * @return mixed
	   */
	  private function error($message = '', $code = 500)
	  {
		  return $this->response($code, $message);
	  }
	  
	  /**
	   * Retorna a resposta para o Front
	   *
	   * @param $code
	   * @param $message
	   * @param $data
	   * @return mixed
	   */
    private function response($code = 200, $message = '', $data = [])
    {
			// Códigos de sucesso
			$successCodes = [200, 201, 202, 203, 204, 205, 206, 207, 208, 226];
			
			// Adiciona true caso o response for success
			if (in_array($code, $successCodes))
				$success = true;
			else
				$success = false;
      
      // Estrutura do JSON retornado para Front End
      $response = new WP_REST_Response(
        array(
          'success' => $success,
          'message' => $message,
          'data' => $data
        ),
        $code
      );
      
      // Retorna o JSON para o Front End
      return rest_ensure_response($response);
    }
	  
	  /**
	   * Se existir gastos mensais unidades + sede, é retornado
	   * Caso contrário, é retornado apenas gastos mensais da empresa
	   *
	   * @return float|int
	   */
    private function getTotalMes()
    {
      $gastosMensais = $this->moneyTextToFloat($this->valor_aproximado_dos_gastos_mensais_com_energia__r__);
      $gastosMensaisUnidade = $this->moneyTextToFloat($this->faixa_gastos_mais_unidades);

      if ($gastosMensaisUnidade > 0)
        return $gastosMensaisUnidade;

      return $gastosMensais;
    }
	  
	  /**
	   * Recebe a % de desconto, calcula e retorna o valor em reais do desconto
	   *
	   * @param $desconto
	   * @return float|int
	   */
    private function getValorDesconto($desconto)
    {
      return $this->getTotalMes() * $desconto / 100;
    }
	  
	  /**
	   * Recebe a % de desconto, e calcula o novo gasto mensal
	   *
	   * @param $desconto
	   * @return float|int
	   */
    private function getTotalMesComDesconto($desconto)
    {
      return $this->getTotalMes() - $this->getValorDesconto($desconto);
    }
	  
	  /**
	   * Recebe a % de desconto, e calcula o valor anual aproximado de desconto
	   *
	   * @param $desconto
	   * @return float|int
	   */
    private function getEconomiaAnual($desconto)
    {
      return $this->getValorDesconto($desconto) * 12;
    }
	  
	  /**
	   * Verifica se a distribuidora é uma distribuidora com exceção
	   *
	   * @return bool
	   */
    private function isExceptedDistributor()
    {
      return in_array(strtolower($this->distribuidora), DISTRIBUIDORAS_DE_EXCECAO);
    }
	  
	  /**
	   * Converte o texto "R$ 0.000,00" em float
	   *
	   * @param $txt
	   * @return float|int
	   */
    public function moneyTextToFloat($txt)
    {
      if (is_string($txt) && $txt) {
        $number = str_ireplace('R$ ', '', $txt);

        $number = str_replace('.', '', $number);
        $number = str_replace(',', '.', $number);

        return (float) number_format($number, 2, '.', '');
      }

      return 0;
    }

    public function __get($name){
      return $this->values[$name];
    }

    public function __set($name, $value){
      $this->values[$name] = $value;
    }
  }
}