<?php
/*
 * Template Name: Full Page
 * Description: A template for displaying pages without a sidebar
 *
 * @package GovPress
 */

get_header(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1><hr>
	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
