<?php
/**
 * Template part: Parallax Link
 * Plugin: ACF
 *
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php $parallax_link_background_image = get_field( 'parallax_link_background_image' ); ?>

<?php if ( get_field( 'parallax_link_enable' ) && $parallax_link_background_image ) : ?>

	<div id="home-location" class="home-location-wrapper wrapper">

		<div class="parallax-background d-flex align-items-center justify-content-center flex-column minh-md-360 mh-lg-560" data-parallax-background-image-url="<?php echo esc_url( $parallax_link_background_image ); ?>">

			<?php if ( get_field( 'parallax_link_title' ) ) : ?>

				<h2 class="home-location-title text-primary font-weight-light text-uppercase">

					<?php echo esc_html( get_field( 'parallax_link_title' ) ); ?>

				</h2>

			<?php endif; ?>

			<?php if ( get_field( 'parallax_link_description' ) ) : ?>

				<h3 class="text-white text-center mb-md-5">

					<?php echo wp_kses( get_field( 'parallax_link_description' ), nelios_allowed_basic_html_attr_array() ); ?>

				</h3>

			<?php endif; ?>

			<?php $parallax_link_link = get_field( 'parallax_link_link' ); ?>

			<?php if ( $parallax_link_link ) : ?>

				<a class="btn btn-outline-light" href="<?php echo esc_url( $parallax_link_link['url'] ); ?>" target="<?php echo esc_attr( $parallax_link_link['target'] ); ?>">

					<?php echo esc_html( $parallax_link_link['title'] ); ?>

				</a>

			<?php endif; ?>

		</div>

	</div>

<?php endif; ?>
