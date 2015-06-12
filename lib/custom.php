<?php
	define('ICL_DONT_LOAD_NAVIGATION_CSS', TRUE);
	define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', TRUE);
	define('ICL_DONT_LOAD_LANGUAGES_JS', TRUE);


	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	