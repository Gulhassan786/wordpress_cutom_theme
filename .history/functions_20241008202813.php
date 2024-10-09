<?php 

function loadScript(){
    add_theme_support('custom-logo');
}

add_action('all_scripts', 'loadScript');

// function black_theme_scripts(){
//     wp_enqueue_style("style", get_stylesheet_uri());
//     // wp_enqueue_script("style", get_template_directory_uri()."script_path");

// }

function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function getNavigationMenu(){
    register_nav_menus(
        array(
            'main-menu' => __('Menu2')
        )
    );
}



add_action('init', 'getNavigationMenu');
// add_action("wp_enqueue_scripts","black_theme_scripts");



?>