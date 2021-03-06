<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package GovPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'govpress' ),
				'after'  => '</div>',
			) );
		?>
	
   <?php if ( is_page( '26' ) ) { // thank you page ?>
	
		<div class="share-ctr">
			<a class="facebook" href="http://www.facebook.com/share.php?u=<?php echo home_url(); ?>" target="_blank"><div class="fb-share"><i class="fa fa-facebook"> SHARE</i></div></a>
			<a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo home_url(); ?>&text=<?php the_title(); ?>&original_referer=<?php echo home_url(); ?>" target="_blank"><div class="tw-share"><i class="fa fa-twitter"> TWEET</i></div></a>
			<a class="gplus" href="https://plus.google.com/share?url=<?php echo home_url(); ?>/"><div class="g-share"><i class="fa fa-google-plus"> SHARE</i></div>
		</div>
		
		<?php } else { ?>
		<?php } ?>
		

	</div><!-- .entry-content -->

</article><!-- #post-## -->