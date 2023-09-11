<?php

//Cria a classe que vai exibir o conteúdo do menu Simulador de Economia
if (!class_exists('SEQ_Settings')) {
    class SEQ_Settings
    {
        public static $options;

        public function __construct()
        {
            self::$options = get_option('seq_options');
            add_action('admin_init', array($this, 'admin_init'));
        }

        //Função que registra as páginas e seções do menu Simulador de Economia
        public function admin_init()
        {
            register_setting('seq_group', 'seq_options', array($this, 'seq_validate'));

            //Seção Configuração
            add_settings_section(
                'seq_config_section',
                'Configuração',
                null,
                'seq_page1',
            );

            //Seção Mensagens
            add_settings_section(
                'seq_result_section',
                'Mensagens',
                null,
                'seq_page2',
            );

            //Campo Shortcode (Configuração)
            add_settings_field(
                'seq_shortcode',
                'Shortcode',
                array($this, 'seq_shortcode_callback'),
                'seq_page1',
                'seq_config_section'
            );

            //Campo Desconto (Configuração)
            add_settings_field(
                'seq_discount',
                'Porcentagem de desconto',
                array($this, 'seq_discount_callback'),
                'seq_page1',
                'seq_config_section',
                array(
                'label_for' => 'seq_discount'
        )
            );

            //Campo Uninstall (Configuração)
            add_settings_field(
                'seq_uninstall',
                'Dados do plugin',
                array($this, 'seq_uninstall_callback'),
                'seq_page1',
                'seq_config_section',
                array(
                'label_for' => 'seq_uninstall'
        )
            );

            //Campo Resposta Positiva (Mensagens)
            add_settings_field(
                'seq_resposta_positiva',
                'Resposta Positiva',
                array($this, 'seq_resposta_positiva_callback'),
                'seq_page2',
                'seq_result_section',
                array(
                'label_for' => 'seq_resposta_positiva'
        )
            );

            //Campo Resposta Negativa (Mensagens)
            add_settings_field(
                'seq_resposta_negativa',
                'Resposta Negativa',
                array($this, 'seq_resposta_negativa_callback'),
                'seq_page2',
                'seq_result_section',
                array(
                'label_for' => 'seq_resposta_negativa'
        )
            );
        }

        //Conteúdo da função callback Shortcode da página Configuração
        public function seq_shortcode_callback()
        { ?>
<span id="seq_shortcode">Use o shortcode [simulador_de_economia] para exibir o Simulador de Economia Quanta em qualquer
    local.</span>
<?php
        }

        //Conteúdo da função callback Uninstall da página Configuração
        public function seq_uninstall_callback()
        { ?>
<input size="80" class="regular-text" type="text" name="seq_options[seq_uninstall]" id="seq_uninstall"
    value="<?php echo isset(self::$options['seq_uninstall']) ? esc_attr(self::$options['seq_uninstall']) : ''; ?>" />
<br><span>Para excluir os dados do banco de dados ao desinstalar o plugin, escreva e salve nessa caixa "Sim, desejo
    excluir os dados ao desinstalar.</span>
<?php
        }

        //Conteúdo da função callback Desconto da página Configuração
        public function seq_discount_callback()
        { ?>
<div style="display:flex;align-items:center;">
    <input type="range" id="seq_discount" name="seq_options[seq_discount]" min="0" max="100" step="1"
        value="<?php echo isset(self::$options['seq_discount']) ? esc_attr(self::$options['seq_discount']) : '25'; ?>">
    <span id="seq_discount_value" style="width:25px;text-align:right;"></span><span style="margin-left:2px;">%</span>
</div>
<script>
    let seq_discount = document.getElementById("seq_discount");
    let seq_discount_value = document.getElementById("seq_discount_value");
    seq_discount_value.innerHTML = seq_discount.value;

    seq_discount.oninput = function() {
        seq_discount_value.innerHTML = this.value;
    };
</script>
<?php
        }

        //Conteúdo da função callback Resposta Positiva da página Mensagens
        public function seq_resposta_positiva_callback()
        { ?>
<textarea name="seq_options[seq_resposta_positiva]" id="seq_resposta_positiva" cols="80"
    rows="4"><?php echo isset(self::$options['seq_resposta_positiva']) ? esc_textarea(self::$options['seq_resposta_positiva']) : ''; ?></textarea>
<?php
        }

        //Conteúdo da função callback Resposta Negativa da página Mensagens
        public function seq_resposta_negativa_callback()
        { ?>
<textarea name="seq_options[seq_resposta_negativa]" id="seq_resposta_negativa" cols="80"
    rows="4"><?php echo isset(self::$options['seq_resposta_negativa']) ? esc_textarea(self::$options['seq_resposta_negativa']) : ''; ?></textarea>

<?php
        }

        //Form Validation
        public function seq_validate($input)
        {
            $new_input = get_option('seq_options', array());

            foreach ($input as $key => $value) {
                switch ($key) {
                    case 'seq_resposta_positiva':
                        $new_input[$key] = wp_kses_post($value);
                        if (empty($value)) {
                            add_settings_error('seq_options', 'seq-message', 'Mensagem de resposta positiva padrão será mostrada ao usuário, porque o campo foi salvo vazio.', 'warning');
                        }
                        break;
                    case 'seq_resposta_negativa':
                        $new_input[$key] = wp_kses_post($value);
                        if (empty($value)) {
                            add_settings_error('seq_options', 'seq-message', 'Mensagem de resposta negativa padrão será mostrada ao usuário, porque o campo foi salvo vazio.', 'warning');
                        }
                        break;
                    default:
                        $new_input[$key] = sanitize_text_field($value);
                        break;
                }
            }

            return $new_input;
        }
    }
}
?>