<?php 

function black_theme_scripts(){
    wp_enqueue_style("style", get_stylesheet_uri());
    // wp_enqueue_script("style", get_template_directory_uri()."script_path");

}

function getNavigationMenu(){
    register_nav_menus(
        array(
            'main-menu' => __('Menu2')
        )
    );
}

add_action('init', 'getNavigationMenu');
add_action("wp_enqueue_scripts","black_theme_scripts");
?>