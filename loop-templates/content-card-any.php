<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<div class="card bg-transparent">

  <?php the_post_thumbnail( 'home_offer_list', array( 'class' => 'card-img wpsmartcrop-image' ) ); ?>

	<div class="card-img-overlay">

		<div class="card-body text-center text-lg-left d-flex flex-column justify-content-center h-100">

			<div class="card-title">

				<h3 class="text-dark text-uppercase my-3 my-lg-0">

					<?php the_title(); ?>

				</h3>

				<?php if ( get_field( 'main_subtitle' ) ) : ?>

					<h5 class="card-text">

						<?php echo esc_html( get_field( 'main_subtitle' ) ); ?>

					</h5>

				<?php endif; ?>

			</div>

			<div class="card-text">

				<?php the_content(); ?>

			</div>

			<div class="text-center">

				<a class="card-link text-center btn btn-link border border-primary rounded d-inline-flex align-items-center justify-content-end p-3" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

					<span class="learn-more-text">

						<?php esc_html_e( 'LEARN MORE', 'nelios' ); ?>

					</span>

					<span class="learn-more-icon">

						<?php get_template_part( 'svg/arrow/arrow-right-01.svg' ); ?>

					</span>

				</a>

			</div>

		</div>

	</div>

</div>
