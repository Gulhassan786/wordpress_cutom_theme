<?php
/**
 * My Customizer.
 */
function my_customize_register( $wp_customize ) {

    // 
	$wp_customize->add_panel( 'my_settings', array(
		'title' => 'My Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );

	$wp_customize->add_section( 'my_colors', array(
		'title' => 'Colors',
		'panel' => 'my_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_setting( 'my_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'my_nav_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'my_colors',
	) );
	
}
add_action( 'customize_register', 'my_customize_register' );

