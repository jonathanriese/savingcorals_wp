<?php
// function wp_scripts()
// {
//     wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'jquery-ui-core' ), '1', true );
//     wp_enqueue_script( 'script' );
// }
// add_action( 'wp_enqueue_scripts', 'wp_scripts' )

function my_theme_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

add_theme_support( 'post-thumbnails' );