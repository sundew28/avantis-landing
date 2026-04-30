<?php
/**
 * Theme custom post type registrations.
 *
 * Structured content types are registered here so
 * repeatable content can be managed natively through
 * WordPress admin without introducing plugin dependency.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register testimonial content type.
 *
 * Testimonials are modelled separately from standard
 * posts/pages because they represent reusable marketing
 * content with a dedicated editorial workflow.
 *
 * @return void
 */
function avantis_register_post_types() {
	$labels = array(
		'name'               => __( 'Testimonials', 'avantis-landing' ),
		'singular_name'      => __( 'Testimonial', 'avantis-landing' ),
		'add_new'            => __( 'Add New', 'avantis-landing' ),
		'add_new_item'       => __( 'Add New Testimonial', 'avantis-landing' ),
		'edit_item'          => __( 'Edit Testimonial', 'avantis-landing' ),
		'new_item'           => __( 'New Testimonial', 'avantis-landing' ),
		'view_item'          => __( 'View Testimonial', 'avantis-landing' ),
		'search_items'       => __( 'Search Testimonials', 'avantis-landing' ),
		'not_found'          => __( 'No testimonials found', 'avantis-landing' ),
		'not_found_in_trash' => __( 'No testimonials found in trash', 'avantis-landing' ),
	);

	$args = array(
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-format-quote',
		'supports'      => array(
			'title',
			'editor',
			'thumbnail',
		),
		'has_archive'   => false,
		'publicly_queryable' => true,
	);

	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'avantis_register_post_types' );