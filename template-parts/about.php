<?php
/**
 * About section.
 *
 * Uses native WordPress page content so editorial
 * teams can manage messaging directly from admin
 * while presentation remains controlled by the theme.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section
	id="about"
	class="about"
	aria-labelledby="about-title"
>
	<div class="container">
		<div class="about__grid">

			<div class="about__content">
				<span class="section-heading__eyebrow">
					<?php esc_html_e( 'About EduFlow', 'avantis-landing' ); ?>
				</span>

				<h2 id="about-title" class="section-heading__title">
					<?php esc_html_e( 'Learning built around measurable outcomes.', 'avantis-landing' ); ?>
				</h2>

				<div class="about__body">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>

			<div class="about__visual" aria-hidden="true">
				<div class="about-panel">
					<div class="about-panel__top">
						<span>Student Success</span>
						<strong>92%</strong>
					</div>

					<div class="about-panel__modules">
						<div class="about-panel__module">
							<span>Digital Literacy</span>
							<strong>Complete</strong>
						</div>

						<div class="about-panel__module">
							<span>Interactive Science</span>
							<strong>In Progress</strong>
						</div>

						<div class="about-panel__module">
							<span>Applied Mathematics</span>
							<strong>Upcoming</strong>
						</div>
					</div>

					<div class="about-panel__badge">
						+18% learner engagement improvement
					</div>
				</div>
			</div>

		</div>
	</div>
</section>