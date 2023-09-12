<?php
/*
Plugin Name: Simulador de Economia Quanta
Description: Plugin para exibir o Simulador de Economia da Quanta Energia.
Version: 1.0
Author: Becky Marques
Author URI: https://github.com/beckymarques
Requires at least: 6.1.3
License: GPL v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if (!defined('ABSPATH')) {
    die('Sou apenas um plugin, você não pode acessar meus arquivos diretamente.');
}

if (!class_exists('SE_Quanta')) {
    class SE_Quanta
    {
        public function __construct()
        {
            $this->define_constants();

            add_action('admin_menu', array($this, 'add_menu'));

            // Inclua os arquivos necessários
            require_once(SEQ_PLUGIN_PATH . 'includes/functions/functions.php');
            require_once(SEQ_PLUGIN_PATH . 'includes/classes/class.Settings.php');
            $SEQ_Settings = new SEQ_Settings();
            require_once(SEQ_PLUGIN_PATH . 'includes/classes/class.Shortcode.php');
            $SEQ_Shortcode = new SEQ_Shortcode();
            require_once(SEQ_PLUGIN_PATH . 'includes/classes/class.Calculation.php');
            $SEQ_Calculation = new SEQ_Calculation();

            //Add os scripts
            add_action('wp_enqueue_scripts', array($this, 'seq_enqueue_scripts'), 999);
        }

        public function define_constants()
        {
            define('SEQ_PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('SEQ_PLUGIN_URL', plugin_dir_url(__FILE__));
            define('SEQ_PLUGIN_VERSION', '1.0.0');
        }

        // Função que será executada na ativação do plugin
        public static function seq_activation()
        {
            //Resetar o rewrite_rules no banco de dados
            update_option('rewrite_rules', '');
        }

        // Função que será executada na desativação do plugin
        public static function seq_deactivation()
        {
            flush_rewrite_rules();
        }

        // Função que será executada na desinstalação do plugin
        public static function seq_uninstall()
        {
            $uninstall = get_option('seq_options')['seq_uninstall'];
            if ($uninstall === 'Sim, desejo excluir os dados ao desinstalar.') {
                delete_option('seq_options');
            }
        }

        //Cria o menu do plugin no painel do WordPress
        public function add_menu()
        {
            add_menu_page(
                'Simulador de Economia Quanta',
                'Simulador de Economia',
                'manage_options',
                'seq_admin',
                array($this, 'seq_settings_page'),
                'dashicons-performance',
                20
            );
        }

        /**
         * Add view da página do plugin no painel do WordPress
         */
        public function seq_settings_page()
        {
            if (!current_user_can('manage_options')) {
                return;
            }
            require(SEQ_PLUGIN_PATH . 'includes/views/settings-page.php');
        }

        /**
         * Enqueue scripts
         */
        public function seq_enqueue_scripts()
        {
            wp_register_style('se-bootstrap', SEQ_PLUGIN_URL . 'vendor/bootstrap.min.css');
            wp_register_style('se-choices', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css');
            wp_register_style('se-plugin-style', SEQ_PLUGIN_URL . 'assets/css/style.min.css');

            wp_register_script('se-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(''), SEQ_PLUGIN_VERSION, true);
            wp_register_script('se-script-maskmoney', SEQ_PLUGIN_URL . 'vendor/jquery.maskMoney.min.js', array('jquery'), SEQ_PLUGIN_VERSION, true);
            wp_register_script('se-script-mask', SEQ_PLUGIN_URL . 'vendor/jquery.mask.min.js', array('jquery'), SEQ_PLUGIN_VERSION, true);
            wp_register_script('se-script-choices', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js', array('jquery'), SEQ_PLUGIN_VERSION, true);
            wp_register_script('se-plugin-script', SEQ_PLUGIN_URL . 'assets/js/script.js', array('jquery'), SEQ_PLUGIN_VERSION, true);
        }
    }
}

if (class_exists('SE_Quanta')) {
    // Função de ativação do plugin (opcional)
    register_activation_hook(__FILE__, array('SE_Quanta', 'seq_activation'));

    // Função de desativação do plugin (opcional)
    register_deactivation_hook(__FILE__, array('SE_Quanta', 'seq_deactivation'));

    // Função de desinstalação do plugin (opcional)
    register_uninstall_hook(__FILE__, array('SE_Quanta', 'seq_uninstall'));
    $se_quanta = new SE_Quanta();
}
