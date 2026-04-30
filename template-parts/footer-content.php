<?php
/**
 * Footer content.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="site-footer">
	<div class="container">
		<div class="site-footer__grid">

			<div class="site-footer__brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					EduFlow
				</a>

				<p>
					Delivering smarter digital learning
					experiences for modern education.
				</p>
			</div>

			<nav
				class="site-footer__nav"
				aria-label="<?php esc_attr_e( 'Footer navigation', 'avantis-landing' ); ?>"
			>
				<a href="#features">Features</a>
				<a href="#about">About</a>
				<a href="#testimonials">Testimonials</a>
				<a href="#contact">Contact</a>
			</nav>

		</div>

		<div class="site-footer__bottom">
			<p>
				© <?php echo esc_html( gmdate( 'Y' ) ); ?>
				EduFlow. All rights reserved.
			</p>
		</div>
	</div>
</footer>