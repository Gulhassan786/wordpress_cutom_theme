<?php 

function black_theme_scripts(){
    wp_enqueue_style("style", get_stylesheet_uri()."assets/css/style.css");
    // wp_enqueue_script("style", get_template_directory_uri());

}

add_action("wp_enqueue_scripts","black_theme_scripts");
?>