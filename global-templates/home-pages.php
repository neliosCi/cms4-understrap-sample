<?php
/**
 * Template part: Home Pages
 * Plugin: ACF
 *
 * Theme: nelios
 *
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php if ( get_field( 'home_featured_pages_enable' ) ) : ?>

	<?php $items = get_field( 'home_featured_pages_items' ); ?>

	<?php if ( $items ) : ?>

		<div id="home-pages" class="home-pages-wrapper home-pages wrapper pt-0">

			<?php if ( get_field( 'home_featured_pages_title' ) ) : ?>

				<h2 class="">

					<?php echo esc_html( get_field( 'home_featured_pages_title' ) ); ?>

				</h2>

			<?php endif; ?>

			<?php if ( get_field( 'home_featured_pages_subtitle' ) ) : ?>

				<h3 class="text-center">

					<?php echo esc_html( get_field( 'home_featured_pages_subtitle' ) ); ?>

				</h3>

			<?php endif; ?>

			<?php if ( get_field( 'home_featured_pages_description' ) ) : ?>

				<p class="text-center">

					<?php echo esc_html( get_field( 'home_featured_pages_description' ) ); ?>

				</p>

			<?php endif; ?>

			<div class="card-deck">

				<?php foreach ( $items as $item ) : ?>

					<div class="card text-center border-0"  data-bg-image="<?php echo esc_url( $item['image']['sizes']['home_page_list'] ); ?>" data-hover-bg-image="<?php echo esc_url( $item['hover_image']['sizes']['home_page_list'] ); ?>">

						<img class="card-img" alt="" src="<?php echo esc_url( $item['image']['sizes']['home_page_list'] ); ?>">

						<div class="card-img-overlay">

							<div class="card-body">

								<a href="<?php echo esc_url( $item['link'] ); ?>" title="<?php echo esc_html( $item['title'] ); ?>">

									<h3 class="card-title text-white translate-center">

										<?php echo esc_html( $item['title'] ); ?>

									</h3>

								</a>


								<a class="card-link text-white text-center btn btn-link border border-white rounded translate-center-bottom d-inline-flex align-items-center justify-content-end p-3" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

									<span class="d-none d-lg-block learn-more-text">

										<?php esc_html_e( 'LEARN MORE', 'nelios' ); ?>

									</span>

									<span class="learn-more-icon">

										<?php get_template_part( 'svg/arrow-right-01.svg' ); ?>

									</span>

								</a>


							</div>

						</div>

					</div>

				<?php endforeach; ?>

			</div>

		</div>

	<?php endif; ?>

<?php endif; ?>
