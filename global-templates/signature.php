<?php
/**
 * Template part: Signature
 * Plugin: ACF
 * Field Group: Global - Home Content
 *
 * @version 1.0
 * @package nelios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php $signature = get_field( 'signature' ); ?>

<?php if ( $signature ) : ?>

	<?php echo wp_get_attachment_image( $signature['ID'], 'full' ); ?>

<?php endif; ?>
