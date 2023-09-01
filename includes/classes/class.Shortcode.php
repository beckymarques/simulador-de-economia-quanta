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

      require_once(SEQ_PLUGIN_PATH . 'includes/views/form-template.php');
      
      return ob_get_clean();
      //  get_template_part(SEQ_PLUGIN_PATH . 'includes/views/form-template');
    }
  }
}
