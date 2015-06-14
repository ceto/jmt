<?php
	define('ICL_DONT_LOAD_NAVIGATION_CSS', TRUE);
	define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', TRUE);
	define('ICL_DONT_LOAD_LANGUAGES_JS', TRUE);


	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	function jmt_highlight( $atts, $content = null ) {
		return '<div class="highlight">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('highlight', 'jmt_highlight');
	function jmt_negative_highlight( $atts, $content = null ) {
			return '<div class="highlight highlight--negative">' . do_shortcode($content) . '</div>';
		}
	add_shortcode('highlight-negative', 'jmt_negative_highlight');	