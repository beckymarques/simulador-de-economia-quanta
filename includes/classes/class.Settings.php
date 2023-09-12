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

            //Campo Desconto Geração Distribuída (Configuração)
            add_settings_field(
                'seq_discount_gd',
                'Desconto Geração Distribuída',
                array($this, 'seq_discount_gd_callback'),
                'seq_page1',
                'seq_config_section',
                array(
                'label_for' => 'seq_discount_gd'
        )
            );

            //Campo Desconto Mercado Livre (Configuração)
            add_settings_field(
                'seq_discount_ml',
                'Desconto Mercado Livre',
                array($this, 'seq_discount_ml_callback'),
                'seq_page1',
                'seq_config_section',
                array(
                'label_for' => 'seq_discount_ml'
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
<br><span>Para excluir os dados do banco de dados ao desinstalar o plugin, escreva no campo acima EXATAMENTE o texto a
    seguir (sem as aspas): "Sim, desejo
    excluir os dados ao desinstalar."</span>
<?php }

        //Conteúdo da função callback Desconto Geração Distribuída da página Configuração
        public function seq_discount_gd_callback()
        { ?>
<div style="display:flex;align-items:center;">
    <input type="range" id="seq_discount_gd" name="seq_options[seq_discount_gd]" min="0" max="100" step="1"
        value="<?php echo isset(self::$options['seq_discount_gd']) ? esc_attr(self::$options['seq_discount_gd']) : '25'; ?>">
    <span id="seq_discount_gd_value" style="width:25px;text-align:right;"></span><span style="margin-left:2px;">%</span>
</div>
<script>
    let seq_discount_gd = document.getElementById("seq_discount_gd");
    let seq_discount_gd_value = document.getElementById("seq_discount_gd_value");
    seq_discount_gd_value.innerHTML = seq_discount_gd.value;

    seq_discount_gd.oninput = function() {
        seq_discount_gd_value.innerHTML = this.value;
    };
</script>
<?php
        }

        //Conteúdo da função callback Desconto Mercado Livre da página Configuração
        public function seq_discount_ml_callback()
        { ?>
<div style="display:flex;align-items:center;">
    <input type="range" id="seq_discount_ml" name="seq_options[seq_discount_ml]" min="0" max="100" step="1"
        value="<?php echo isset(self::$options['seq_discount_ml']) ? esc_attr(self::$options['seq_discount_ml']) : '25'; ?>">
    <span id="seq_discount_ml_value" style="width:25px;text-align:right;"></span><span style="margin-left:2px;">%</span>
</div>
<script>
    let seq_discount_ml = document.getElementById("seq_discount_ml");
    let seq_discount_ml_value = document.getElementById("seq_discount_ml_value");
    seq_discount_ml_value.innerHTML = seq_discount_ml.value;

    seq_discount_ml.oninput = function() {
        seq_discount_ml_value.innerHTML = this.value;
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