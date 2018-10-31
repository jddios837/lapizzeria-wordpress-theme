<?php

function lapizzeria_setup() {
	// carga el manejo de imagenes destacasa despues 
	// de instalar el tema
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'lapizzeria_setup');

// asignar los estilos a wordpress
function lapizzeria_styles() {
	//registrar normalize
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
	// registrar fontawesome
	wp_register_style('fontawesomeregular', get_template_directory_uri() . '/css/all.min.css', array('normalize'), '5.4.1');
	
	//registrar style
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	// y luego agregar
	wp_enqueue_style('normalize');
	wp_enqueue_style('fontawesomeregular');
	wp_enqueue_style('style');

	// carga de scripts de js
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

	wp_enqueue_script('scripts');

	// cargar jquery (jquery ya esta disponible en wp)
	wp_enqueue_script('jquery');
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