<?php
function seq_enqueue_scripts()
{
    wp_enqueue_style('se-bootstrap', SEQ_PLUGIN_URL . 'vendor/bootstrap.min.css');
    wp_enqueue_style('se-choices', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css');
    wp_enqueue_style('se-plugin-style', SEQ_PLUGIN_URL . 'assets/css/style.min.css');

    wp_enqueue_script('se-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(''), null, true);
    wp_enqueue_script('se-script-maskmoney', SEQ_PLUGIN_URL . 'vendor/jquery.maskMoney.min.js', array('jquery'), null, true);
    wp_enqueue_script('se-script-mask', SEQ_PLUGIN_URL . 'vendor/jquery.mask.min.js', array('jquery'), null, true);
    wp_enqueue_script('se-script-choices', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js', array('jquery'), null, true);
    wp_enqueue_script('se-plugin-script', SEQ_PLUGIN_URL . 'assets/js/script.js', array('jquery'), null, true);

    // wp_enqueue_style('raleway-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'seq_enqueue_scripts');


add_action('wp_head', 'wpdd_google_fonts');
/**
 * Load Google Fonts from CDN.
 */
function wpdd_google_fonts()
{
    // Enter the URL of your Google Fonts generated from https://fonts.google.com/ here.
    $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap';
?>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link rel="preload" as="style" href="<?php echo $google_fonts_url; ?>" />

    <link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" media="print" onload="this.media='all'" />

    <noscript>
        <link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" />
    </noscript>
<?php }


$distribuidoras = array(
    array('nome' => 'CEA'),
    array('nome' => 'Celpa'),
    array('nome' => 'Celpe'),
    array('nome' => 'Ceron'),
    array('nome' => 'Cemar'),
    array('nome' => 'Coelba'),
    array('nome' => 'Cosem'),
    array('nome' => 'EDP'),
    array('nome' => 'Enel'),
    array('nome' => 'Energisa'),
    array('nome' => 'Eletrobras'),
    array('nome' => 'Light'),
    array('nome' => 'Santa Marta'),
    array('nome' => 'Sulgipe'),
    array('nome' => 'CPFL Piratininga'),
    array('nome' => 'CPFL Paulista'),
    array('nome' => 'CPFL-Santa Cruz Nova*'),
    array('nome' => 'CPFL-Jaguari (CJE)'),
    array('nome' => 'CPFL-Mococa (CLFM)'),
    array('nome' => 'CPFL-Leste Paulista (CPEE)'),
    array('nome' => 'CPFL-Sul Paulista (CSPE)'),
    array('nome' => 'CPFL-Santa Cruz (CLFSC)'),
    array('nome' => 'RGE Nova'),
    array('nome' => 'RGE'),
    array('nome' => 'RGE SUL (antiga AES SUL)'),
    array('nome' => 'AMPLA (antiga CERJ)'),
    array('nome' => 'COELCE '),
    array('nome' => 'CELG - governo de GO e grupo Eletrobras'),
    array('nome' => 'ELETROPAULO'),
    array('nome' => 'CENF'),
    array('nome' => 'SAELPA'),
    array('nome' => 'CELB'),
    array('nome' => 'CATLEO e CFLCL'),
    array('nome' => 'ENERSUL - grupo Rede'),
    array('nome' => 'CEMAT - grupo Rede'),
    array('nome' => 'CELTINS - grupo Rede'),
    array('nome' => 'ENERGIPE'),
    array('nome' => 'CERON - grupo Eletrobras'),
    array('nome' => 'ELETROACRE - grupo Eletrobras'),
    array('nome' => 'ESS* - Energisa Sul Sudeste'),
    array('nome' => 'CAIUÁ - grupo Rede'),
    array('nome' => 'CNEE - Nacional - grupo Rede'),
    array('nome' => 'EEB - Bragantina - grupo Rede'),
    array('nome' => 'EDEVP - Vale do Paranapanema - grupo Rede'),
    array('nome' => 'CFLO - Força e Luz do Oeste - grupo Rede'),
    array('nome' => 'CELPE'),
    array('nome' => 'COELBA'),
    array('nome' => 'COSERN'),
    array('nome' => 'ELEKTRO'),
    array('nome' => 'ESCELSA'),
    array('nome' => 'BANDEIRANTE'),
    array('nome' => 'CEMIG*'),
    array('nome' => 'LIGHT*'),
    array('nome' => 'CEB*'),
    array('nome' => 'CEEE*'),
    array('nome' => 'CELESC*'),
    array('nome' => 'COPEL*'),
    array('nome' => 'DMEPC*'),
    array('nome' => 'HIDROPAN*'),
    array('nome' => 'CEA*'),
    array('nome' => 'Manaus Energia e Companhia Energética do Amazonas'),
    array('nome' => 'Outra'),
    array('nome' => 'Não'),
);
