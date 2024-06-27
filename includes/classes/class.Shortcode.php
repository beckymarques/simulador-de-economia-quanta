<?php

if (!class_exists('SEQ_Shortcode')) {
    class SEQ_Shortcode
    {
        public function __construct()
        {
            add_shortcode(
                'simulador_de_economia',
                array($this, 'add_seq_shortcode')
            );
        }

        public function add_seq_shortcode()
        {
            ob_start();
            require(SEQ_PLUGIN_PATH . 'includes/views/form-template.php');
            wp_enqueue_style('se-bootstrap');
            wp_enqueue_style('se-choices');
            wp_enqueue_style('se-plugin-style');
            //wp_enqueue_script('se-jquery');
            wp_enqueue_script('se-script-maskmoney');
            wp_enqueue_script('se-script-mask');
            wp_enqueue_script('se-script-choices');
            wp_enqueue_script('se-plugin-script');
            return ob_get_clean();
        }
    }
}
