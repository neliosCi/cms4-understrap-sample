<?php
/**
 * Template part: Home Rooms
 * Plugin: ACF
 *
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php if ( get_field( 'home_rooms_enable' ) ) : ?>

	<?php $rooms_items = get_field( 'home_rooms_items' ); ?>

	<?php if ( $rooms_items ) : ?>

		<div id="home-rooms" class="home-rooms-wrapper home-rooms wrapper container position-relative" data-cards-slider="">

			<?php if ( get_field( 'home_rooms_title' ) ) : ?>

				<h2 class="home-rooms-title text-center text-uppercase text-md-left mb-5">

					<?php echo esc_html( get_field( 'home_rooms_title' ) ); ?>

				</h2>

			<?php endif; ?>

			<?php if ( get_field( 'home_rooms_subtitle' ) ) : ?>

				<p class="home-rooms-subtitle text-center text-md-left">

					<em>

						<?php echo esc_html( get_field( 'home_rooms_subtitle' ) ); ?>

					</em>

				</p>

			<?php endif; ?>

			<?php if ( get_field( 'home_rooms_description' ) ) : ?>

				<p class="home-rooms-description text-center text-md-left">

					<?php echo esc_html( get_field( 'home_rooms_description' ) ); ?>

				</p>

			<?php endif; ?>

			<button class="btn btn-link font-italic card-prev d-none d-lg-inline-block" title="<?php esc_html_e( 'Previous', 'nelios' ); ?>">

				<?php esc_html_e( 'Previous', 'nelios' ); ?>

			</button>

			<div class="cards-wrapper home-room-cards-wrapper">

				<?php foreach ( $rooms_items as $post ) : ?>

					<?php setup_postdata( $post ); ?>

					<?php get_template_part( 'loop-templates/content-home-card', get_post_type() ); ?>

				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>

			</div>

			<button class="btn btn-link font-italic card-next d-none d-lg-inline-block" title="<?php esc_html_e( 'Next', 'nelios' ); ?>">

				<?php esc_html_e( 'Next', 'nelios' ); ?>

			</button>

			<?php $rooms_link = get_field( 'home_rooms_link' ); ?>

			<?php if ( $rooms_link ) : ?>

				<div class="home-rooms-link-wrapper text-center p-0 p-lg-4">

					<a class="btn btn-outline-primary" href="<?php echo esc_url( $rooms_link['url'] ); ?>" title="<?php esc_html_e( 'ROOMS & SUITES', 'nelios' ); ?>">

						<?php esc_html_e( 'ROOMS & SUITES', 'nelios' ); ?>

					</a>

				</div>

			<?php endif; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>
