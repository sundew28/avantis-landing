<?php
/**
 * Hero section.
 *
 * Establishes the primary conversion area and sets the
 * visual tone for the landing page. Messaging is kept
 * concise, outcome-focused, and supported by a product-style
 * visual rather than decorative imagery.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="hero" aria-labelledby="hero-title">
	<div class="container">
		<div class="hero__grid">

			<div class="hero__content">
				<span class="hero__eyebrow">
					<?php esc_html_e( 'Modern Digital Learning', 'avantis-landing' ); ?>
				</span>

				<h1 id="hero-title" class="hero__title">
					<?php esc_html_e( 'Empowering learners through smarter online education.', 'avantis-landing' ); ?>
				</h1>

				<p class="hero__description">
					<?php esc_html_e( 'EduFlow helps educators deliver personalised learning journeys with interactive courses, measurable outcomes, and flexible digital access.', 'avantis-landing' ); ?>
				</p>

				<div class="hero__actions">
					<a class="button button--primary" href="#contact">
						<?php esc_html_e( 'Start Learning', 'avantis-landing' ); ?>
					</a>

					<a class="button button--secondary" href="#features">
						<?php esc_html_e( 'Explore Platform', 'avantis-landing' ); ?>
					</a>
				</div>

				<div class="hero__stats">
					<div class="hero__stat">
						<strong>25k+</strong>
						<span>Active learners</span>
					</div>

					<div class="hero__stat">
						<strong>600+</strong>
						<span>Interactive courses</span>
					</div>

					<div class="hero__stat">
						<strong>94%</strong>
						<span>Completion rate</span>
					</div>
				</div>
			</div>

			<div class="hero__visual" aria-hidden="true">
				<div class="dashboard-card">
					<div class="dashboard-card__header">
						<span>Learning Dashboard</span>
						<span>Live</span>
					</div>

					<div class="dashboard-card__metric">
						<small>Weekly engagement</small>
						<strong>87%</strong>
					</div>

					<div class="dashboard-card__progress">
						<span></span>
					</div>

					<div class="dashboard-card__grid">
						<div class="dashboard-card__mini-card">
							<small>Courses</small>
							<strong>124</strong>
						</div>

						<div class="dashboard-card__mini-card">
							<small>Progress</small>
							<strong>92%</strong>
						</div>

						<div class="dashboard-card__mini-card">
							<small>Sessions</small>
							<strong>38</strong>
						</div>

						<div class="dashboard-card__mini-card">
							<small>Certificates</small>
							<strong>16</strong>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>