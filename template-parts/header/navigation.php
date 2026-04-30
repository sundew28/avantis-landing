<?php
/**
 * Primary site navigation.
 *
 * Navigation is intentionally kept lightweight and
 * CMS-driven so menu structure can be managed via
 * WordPress admin without code changes.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<header class="site-header js-site-header">
	<div class="container">
		<div class="site-header__inner">

			<a
				class="site-header__brand"
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
				aria-label="<?php esc_attr_e( 'EduFlow home', 'avantis-landing' ); ?>"
			>
				EduFlow
			</a>

			<button
				class="site-header__toggle js-nav-toggle"
				type="button"
				aria-expanded="false"
				aria-controls="primary-navigation"
				aria-label="<?php esc_attr_e( 'Toggle navigation', 'avantis-landing' ); ?>"
			>
				<span></span>
				<span></span>
				<span></span>
			</button>

			<nav
				id="primary-navigation"
				class="site-header__nav js-site-nav"
				aria-label="<?php esc_attr_e( 'Primary navigation', 'avantis-landing' ); ?>"
			>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'site-header__menu',
						'fallback_cb'    => false,
					)
				);
				?>

				<a class="button button--primary site-header__cta" href="#contact">
					<?php esc_html_e( 'Start Learning', 'avantis-landing' ); ?>
				</a>
			</nav>

		</div>
	</div>
</header>