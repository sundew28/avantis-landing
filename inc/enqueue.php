<?php
/**
 * Asset enqueueing.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme assets.
 *
 * @return void
 */
function avantis_enqueue_assets(): void {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'avantis-main',
		get_template_directory_uri() . '/dist/css/main.css',
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'avantis-main',
		get_template_directory_uri() . '/dist/js/main.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'avantis_enqueue_assets' );