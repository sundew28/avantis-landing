<?php
/**
 * Contact section.
 *
 * Plugin-free contact form powered by native
 * WordPress form handling.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="contact" class="contact" aria-labelledby="contact-title">
	<div class="container">
		<div class="section-heading">
			<span class="section-heading__eyebrow">
				<?php esc_html_e( 'Get in Touch', 'avantis-landing' ); ?>
			</span>

			<h2 id="contact-title" class="section-heading__title">
				<?php esc_html_e( 'Let’s start the conversation.', 'avantis-landing' ); ?>
			</h2>
		</div>
		<?php
			$status = isset( $_GET['contact_status'] ) ? sanitize_text_field( wp_unslash( $_GET['contact_status'] ) ) : '';
		?>

		<?php if ( 'success' === $status ) : ?>
			<div class="contact-message contact-message--success">
				<?php esc_html_e(
					'Thank you. Your message has been submitted successfully.',
					'avantis-landing'
				); ?>
			</div>
		<?php endif; ?>

		<?php if ( 'error' === $status ) : ?>
			<div class="contact-message contact-message--error">
				<?php esc_html_e(
					'Please complete all required fields correctly.',
					'avantis-landing'
				); ?>
			</div>
		<?php endif; ?>
		<form
			class="contact-form"
			method="post"
			action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
		>
			<input
				type="hidden"
				name="action"
				value="avantis_contact_form"
			>

			<?php wp_nonce_field( 'avantis_contact_nonce', 'avantis_nonce' ); ?>

			<div class="contact-form__field">
				<label for="contact-name">Full Name</label>
				<input
					id="contact-name"
					type="text"
					name="contact_name"
					required
				>
			</div>

			<div class="contact-form__field">
				<label for="contact-email">Email Address</label>
				<input
					id="contact-email"
					type="email"
					name="contact_email"
					required
				>
			</div>

			<div class="contact-form__field">
				<label for="contact-message">Message</label>
				<textarea
					id="contact-message"
					name="contact_message"
					rows="6"
					required
				></textarea>
			</div>

			<button class="button button--primary" type="submit">
				Send Message
			</button>
		</form>
	</div>
</section>