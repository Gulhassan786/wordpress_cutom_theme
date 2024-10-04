<?php 

function black_theme_scripts(){
    wp_enqueue_style("style", get_stylesheet_uri());
    // wp_enqueue_script("style", get_template_directory_uri()."assets/css/style.css");

}

<?php
// Register the navigation menu
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ) // Menu name in the admin
        )
    );
}
add_action( 'init', 'register_my_menus' );
?>


add_action("wp_enqueue_scripts","black_theme_scripts");
?>