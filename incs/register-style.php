<?php

/*
* Declaration of style
*/

function coliveIn_register_assets() {
    /* Font Awesome */
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    wp_enqueue_style('coliveIn', get_template_directory_uri() . '/public/css/style.css', array(), '1.0');
    wp_enqueue_script('coliveIn', get_template_directory_uri() . '/public/js/index.js', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'coliveIn_register_assets');

?>