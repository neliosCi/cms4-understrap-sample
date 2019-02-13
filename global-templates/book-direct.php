<?php
/**
 * Template part: Book Direct
 * Plugin: ACF
 *
 * @version 1.0
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php $book_direct_reasons = get_field( 'book_direct_reasons' ); ?>

<?php if ( $book_direct_reasons ) : ?>

	<div id="home-book-direct" class="home-book-direct mh-xl-640 col-12 col-lg-4 col-md-6 p-4" <?php echo ( get_field( 'book_direct_background_image' ) ) ? 'data-bg-image-url="' . esc_url( get_field( 'book_direct_background_image' ) ) . '"' : ''; ?>>

		<div class="home-book-direct-inner d-flex flex-column justify-content-center h-100 border border-primary border-right-0 p-4 p-lg-5">

			<?php if ( get_field( 'book_direct_title' ) ) : ?>

				<h6 class="book-direct-title text-primary">

					<?php echo esc_html( get_field( 'book_direct_title' ) ); ?>

				</h6>

			<?php endif; ?>

			<ul class="list-unstyled my-4 my-lg-5">

				<?php foreach ( $book_direct_reasons as $book_direct_reason ) : ?>

					<li class="list-item mb-3">

						<?php echo esc_html( $book_direct_reason['reason'] ); ?>

					</li>

				<?php endforeach; ?>

			</ul>

      <div>

        <a class="btn btn-primary" href="<?php echo get_field( 'book_direct_button' ) ? esc_url( get_field( 'book_direct_button' )['url'] ) : '#'; ?>" target="_blank" title="<?php esc_attr_e( 'CHECK AVAILABILITY', 'nelios' ); ?>">

          <?php esc_html_e( 'CHECK AVAILABILITY', 'nelios' ); ?>

        </a>

      </div>

		</div>

	</div>

<?php endif; ?>
