<?php

// asignar los estilos a wordpress
function lapizzeria_styles() {
	//registrar normalize
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
	// registrar fontawesome
	wp_register_style('fontawesomeregular', get_template_directory_uri() . '/css/all.min.css', array('normalize'), '5.4.1');
	// wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', array('normalize', 'fontawesomeregular'), '5.4.1');
	
	// wp_register_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array('normalize'), '5.2.1');
	
	//registrar style
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	// y luego agregar
	wp_enqueue_style('normalize');
	// wp_enqueue_style('font-awesome-free');
	wp_enqueue_style('fontawesomeregular');
	// wp_enqueue_style('fontawesome');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');


// Creacion de menus, esto creara estos dos tipos de menu
// en la administracion de menus de wordpress
function lapizzeria_menus() {
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'lapizzeria'),
		'social-menu' => __('Social Menu', 'lapizzeria')
	));
}

add_action('init', 'lapizzeria_menus');

// agregar clases predefinidas a los iconos de redes sociales
// bug agrega las mismas clases a todos los menus
function add_menuclass($ulclass) {
	return preg_replace('/<a/', '<a class="fontawesome social-icon"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');