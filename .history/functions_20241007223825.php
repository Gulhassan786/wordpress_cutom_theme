<?php 



function loadScript(){
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
}

add_action('all_scripts', 'loadScript');

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


function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action('widget_init', 'themename_widgets_init');


?>