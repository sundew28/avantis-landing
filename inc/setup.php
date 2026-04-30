<?php
/**
 * Theme setup.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure theme defaults.
 *
 * @return void
 */
function avantis_theme_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'avantis-landing' ),
		)
	);
}
add_action( 'after_setup_theme', 'avantis_theme_setup' );