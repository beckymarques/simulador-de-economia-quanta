<?php

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
