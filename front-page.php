<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="page-wrapper" class="">

	<div class="<?php echo $container; ?> px-0" id="content" tabindex="-1">

		<div class="row no-gutters">

			<div id="home-welcome" class="home-welcome col-12 col-lg-8 col-md-6 pl-md-0 text-center d-flex flex-column align-items-center justify-content-center text-center">

				<main class="site-main" id="main">

				<?php while ( have_posts() ) : ?>

					<?php the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			</div>

			<?php get_template_part( 'global-templates/book-direct' ); ?>

		</div>

		<?php get_template_part( 'global-templates/home-pages' ); ?>

		<?php get_template_part( 'global-templates/home-rooms' ); ?>

		<?php get_template_part( 'global-templates/parallax-link' ); ?>

		<?php get_template_part( 'global-templates/home-offers' ); ?>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
