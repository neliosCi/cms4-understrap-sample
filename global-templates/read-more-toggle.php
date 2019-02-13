<?php
/**
 * Template part: Read more toggle
 * Plugin: ACF
 *
 * @version 1.0
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php if ( get_field( 'read_more_toggle_enable', 'option' ) || get_field( 'read_more_toggle_enable' ) ) : ?>

	<?php if ( get_field( 'read_more_toggle_max_height' ) ) : ?>

		<?php $max_height = get_field( 'read_more_toggle_max_height' ); ?>

	<?php elseif ( get_field( 'read_more_toggle_max_height', 'option' ) ) : ?>

		<?php $max_height = get_field( 'read_more_toggle_max_height', 'option' ); ?>

	<?php else : ?>

		<?php $max_height = '120'; ?>

	<?php endif; ?>

	<div class="read-more-toggle d-none">

		<a href="#" class="read-more-toggle-link" data-max-height="<?php echo esc_attr( $max_height ); ?>" data-open-text="<?php esc_html_e( 'Read more', 'nelios' ); ?>" data-close-text="<?php esc_html_e( 'READ LESS', 'nelios' ); ?>">

			<?php esc_html_e( 'READ MORE', 'nelios' ); ?>

		</a>

	</div>

<?php endif; ?>
