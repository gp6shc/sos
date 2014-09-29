<?php
/*
 * Template Name: Home Page
 * Description: A template with additional widget areas for the home page
 *
 * @package GovPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1><hr>
					</header><!-- .entry-header -->

					<?php if ( trim( get_the_content() ) !== '' ): ?>
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'govpress' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					<?php endif ?>



				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<div id="bottom" class="entry-content clearfix">
	<h1>SOS! Save our Scholarships... Save our Students</h1>
	<hr />
	<p>Coalition member list, logos &amp; photos will go here</p>
</div>

<?php get_footer(); ?>
