<?php
/**
 * Template part: Home Offers
 * Plugin: ACF
 *
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php $offers = get_field( 'home_offers_offers' ); ?>

<?php if ( $offers ) : ?>

	<div id="home-any" class="home-any-wrapper home-any container pt-5 pb-3 position-relative" data-cards-slider="">

		<?php if ( get_field( 'home_offers_title' ) ) : ?>

			<h2 class="home-offers-title text-primary text-center text-lg-left font-weight-light text-uppercase mb-2 mb-lg-5">

				<?php echo esc_html( get_field( 'home_offers_title' ) ); ?>

			</h2>

		<?php endif; ?>

		<?php if ( get_field( 'home_offers_subtitle' ) ) : ?>

			<h3 class="text-center">

				<span><?php echo esc_html( get_field( 'home_offers_subtitle' ) ); ?></span>

			</h3>

		<?php endif; ?>

		<button class="btn btn-link font-italic card-prev d-none d-lg-inline-block" title="<?php esc_html_e( 'Previous', 'nelios' ); ?>">

			<?php esc_html_e( 'Previous', 'nelios' ); ?>

		</button>

		<div class="cards-wrapper home-any-cards-wrapper">

			<?php foreach ( $offers as $post ) : ?>

				<?php setup_postdata( $post ); ?>

				<?php get_template_part( 'loop-templates/hotel-cube-03/content-card', 'any' ); ?>

			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>

		</div>

		<button class="btn btn-link font-italic card-next d-none d-lg-inline-block" title="<?php esc_html_e( 'Next', 'nelios' ); ?>">

			<?php esc_html_e( 'Next', 'nelios' ); ?>

		</button>

	</div>

<?php endif; ?>
