<?php 

function loadScript(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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


function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );

add_action('init', 'getNavigationMenu');
// add_action("wp_enqueue_scripts","black_theme_scripts");


$args = array(
	'flex-width'    => true,
	'width'         => 1920,
	'flex-height'   => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

require get_template_directory().'./c';

?>