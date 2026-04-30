<?php
/**
 * Testimonials section.
 *
 * Queries testimonial content through WordPress's
 * native content API so entries remain fully
 * manageable from admin without touching templates.
 *
 * @package AvantisLanding
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$testimonial_query = new WP_Query(
	array(
		'post_type'      => 'testimonial',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	)
);
?>

<section
	id="testimonials"
	class="testimonials"
	aria-labelledby="testimonials-title"
>
	<div class="container">
		<div class="section-heading">
			<span class="section-heading__eyebrow">
				<?php esc_html_e( 'Testimonials', 'avantis-landing' ); ?>
			</span>

			<h2
				id="testimonials-title"
				class="section-heading__title"
			>
				<?php esc_html_e( 'Trusted by educators and learners alike.', 'avantis-landing' ); ?>
			</h2>
		</div>

		<?php if ( $testimonial_query->have_posts() ) : ?>
			<div class="testimonials__grid">

				<?php
				while ( $testimonial_query->have_posts() ) :
					$testimonial_query->the_post();
					?>

					<article class="testimonial-card">
						<div
							class="testimonial-card__quote"
							aria-hidden="true"
						>
							“
						</div>

						<div class="testimonial-card__content">
							<?php the_content(); ?>
						</div>

						<h3 class="testimonial-card__author">
							<?php the_title(); ?>
						</h3>
					</article>

				<?php endwhile; ?>

			</div>

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>
	</div>
</section>