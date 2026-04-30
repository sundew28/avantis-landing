<?php
/**
 * Features section.
 *
 * Feature content is represented as a lightweight
 * structured array so rendering remains consistent
 * while avoiding repetitive markup blocks.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$features = array(
	array(
		'title'       => 'Personalised Learning Paths',
		'description' => 'Adaptive course journeys tailored to learner pace, strengths, and development goals.',
	),
	array(
		'title'       => 'Interactive Assessments',
		'description' => 'Engaging quizzes, checkpoints, and skill validation designed to reinforce retention.',
	),
	array(
		'title'       => 'Educator Insights Dashboard',
		'description' => 'Track engagement, identify knowledge gaps, and monitor learner progression in real time.',
	),
	array(
		'title'       => 'Flexible Anywhere Access',
		'description' => 'Responsive learning experiences built for desktop, tablet, and mobile-first access.',
	),
);
?>

<section
	id="features"
	class="features"
	aria-labelledby="features-title"
>
	<div class="container">
		<div class="section-heading">
			<span class="section-heading__eyebrow">
				<?php esc_html_e( 'Platform Capabilities', 'avantis-landing' ); ?>
			</span>

			<h2 id="features-title" class="section-heading__title">
				<?php esc_html_e( 'Designed to improve modern digital learning outcomes.', 'avantis-landing' ); ?>
			</h2>
		</div>

		<div class="features__grid">
			<?php foreach ( $features as $feature ) : ?>
				<article class="feature-card">
					<div
						class="feature-card__icon"
						aria-hidden="true"
					></div>

					<h3 class="feature-card__title">
						<?php echo esc_html( $feature['title'] ); ?>
					</h3>

					<p class="feature-card__description">
						<?php echo esc_html( $feature['description'] ); ?>
					</p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>