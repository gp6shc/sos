<?php
/*
 * Template Name: Home Page
 * Description: A template with additional widget areas for the home page
 *
 * @package GovPress
 */

get_header(); ?>


<div id="top" class="entry-content clearfix">
	<h1>SOS! Save our Scholarships</h1>
	<hr />
	
	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
	<h3>Florida Save our Scholarships Coalition</h3>
	
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/fuentes.jpg" />
		<h5>Julio Fuentes</h5>
		<p>Founder &amp; President of the Florida Hispanic Chamber of Commerce, representing 38 chapters &amp; 80,000 minority businesses, &amp; CEO of Hispanic Council for Reform and Educational Options (CREO).</p>
	</div>
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/glover.jpg" />
		<h5>Bishop C. E. Glover</h5>
		<p>Representing the Black Ministers Parental Choice Alliance, which includes more than 60 ministers across Florida.</p>
	</div>
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/litwack.jpg" />
		<h5>Maury Litwack</h5>
		<p>Director of State Political Affairs, the Union of Orthodox Jewish Congregations of America — one of the largest orthodox Jewish umbrella organizations in the country representing Jewish day schools, synagogues, and families throughout Florida.</p>
	</div>
	<div id="members" class="grid_3 omega">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/campbell.jpg" />
		<h5>Kenneth Campbell</h5>
		<p>President of the Black Alliance for Educational Options, representing 4,600 members and 288 black elected officials.</p>
	</div>
	<div class="clearfix"></div>
	
	
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/matz.jpg" />
		<h5>Rabbi Moshe Matz</h5>
		<p>Executive Director of Agudath Israel of Florida, representing roughly 100 rabbis and synagogues</p>
	</div>
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/lorena.jpg" />
		<h5>Lorena Castillo</h5>
		<p>Chairwoman of the Coalition of Hispanic Instructors in Support of Parental Awareness, representing 84 public school teachers primarily in Miami-Dade and Broward counties</p>
	</div>
	<div id="members" class="grid_3">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/matthews.jpg" />
		<h5>Rev. H. K. Matthews</h5>
		<p>Leader in Florida’s historic civil rights struggle who marched with Dr. Martin Luther King Jr. in Selma</p>
	</div>
	<div id="members" class="grid_3 omega">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/members/faith.jpg" />
		<h5>Faith Manuel</h5>
		<p>Ormond Beach scholarship parent</p>
	</div>
	<div class="clearfix"></div>
	
	<div id="members" class="grid_12 omega">
		<p><strong>The Coalition includes, but is not limited to:</strong></p>
		<ul>
			<li>A coalition of 60 African American minister from Florida</li>
			<li>A coalition of 84 Hispanic public schoolteachers</li>
			<li>Augudath Israel and The Orthodox Jewish Union</li>
			<li>The Florida Hispanic Chamber of Commerce</li>
			<li>The Black Alliance For Educational Options</li>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
