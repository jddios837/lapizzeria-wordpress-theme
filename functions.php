<?php

// asignar los estilos a wordpress
function lapizzeria_styles() {
	//registrar normalize
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
	//registrar style
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	// y luego agregar
	wp_enqueue_style('normalize');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');