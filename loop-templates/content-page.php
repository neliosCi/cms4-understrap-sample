<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<article <?php post_class( 'maxw-lg-680 mx-auto text-center py-2 py-lg-5' ); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php if ( is_page_template( 'page-templates/contact.php' ) ) : ?>

			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<?php if ( ! is_front_page() ) : ?>

		<?php get_template_part( 'global-templates/read-more-toggle' ); ?>

	<?php else : ?>

		<?php get_template_part( 'global-templates/signature' ); ?>

	<?php endif; ?>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
