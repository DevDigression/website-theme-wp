<?php 
	function devdigression_files() {

/* microtime() is a php function to generate random number to avoid caching 
	for live, select a version instead (eg, '1.0')
*/
		wp_enqueue_style('devdigression_main_styles', get_stylesheet_uri());
		/* To disable caching for CSS:
		wp_enqueue_style('devdigression_main_styles', get_stylesheet_uri(), NULL, microtime());
		*/
		wp_enqueue_script('devdigression_main_js', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'));
	}

// Load CSS/JS files on startup by calling the above function
	add_action('wp_enqueue_scripts', 'devdigression_files');
	add_theme_support( 'post-thumbnails' );
	?>