<?php
/**
 * Contact form handler.
 *
 * Handles plugin-free form submission using
 * WordPress native admin-post actions.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Process contact form submission.
 *
 * @return void
 */
function avantis_handle_contact_form() {

	/*
	|--------------------------------------------------------------------------
	| Verify nonce
	|--------------------------------------------------------------------------
	|
	| Ensures the request originated from our form
	| and not from a forged external request.
	|
	*/
	if (
		! isset( $_POST['avantis_nonce'] ) ||
		! wp_verify_nonce(
			sanitize_text_field( wp_unslash( $_POST['avantis_nonce'] ) ),
			'avantis_contact_nonce'
		)
	) {
		wp_die( esc_html__( 'Security check failed.', 'avantis-landing' ) );
	}

	/*
	|--------------------------------------------------------------------------
	| Sanitize incoming fields
	|--------------------------------------------------------------------------
	*/
	$name = isset( $_POST['contact_name'] )
		? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) )
		: '';

	$email = isset( $_POST['contact_email'] )
		? sanitize_email( wp_unslash( $_POST['contact_email'] ) )
		: '';

	$message = isset( $_POST['contact_message'] )
		? sanitize_textarea_field(
			wp_unslash( $_POST['contact_message'] )
		)
		: '';

	/*
	|--------------------------------------------------------------------------
	| Validate fields
	|--------------------------------------------------------------------------
	*/
	if (
		empty( $name ) ||
		empty( $email ) ||
		empty( $message ) ||
		! is_email( $email )
	) {
		wp_safe_redirect(
			add_query_arg(
				'contact_status',
				'error',
				wp_get_referer()
			)
		);

		exit;
	}

	/*
	|--------------------------------------------------------------------------
	| Normally we'd send email here using wp_mail().
	| For assessment/demo purposes we simulate success.
	|--------------------------------------------------------------------------
	*/
	wp_safe_redirect(
		add_query_arg(
			'contact_status',
			'success',
			wp_get_referer()
		)
	);

	exit;
}

add_action(
	'admin_post_nopriv_avantis_contact_form',
	'avantis_handle_contact_form'
);

add_action(
	'admin_post_avantis_contact_form',
	'avantis_handle_contact_form'
);