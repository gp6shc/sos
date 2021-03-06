<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package govpress
 */

get_header(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1><hr>
	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<div class="breadcrumb">', '</div>' );
				} ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php if ( govpress_is_page_parent( get_the_ID() ) ) {
	get_sidebar( 'page-parent' );
} else {
	get_sidebar();
}
?>
<?php get_footer(); ?>