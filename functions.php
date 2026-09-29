<?php
/**
 * Curve functions and definitions.
 *
 * @package Curve
 */

if ( ! function_exists( 'curve_enqueue_styles' ) ) :
	/**
	 * Enqueue the theme stylesheet.
	 */
	function curve_enqueue_styles() {
		wp_enqueue_style(
			'curve-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'curve_enqueue_styles' );
