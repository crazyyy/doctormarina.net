<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Adaption
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_template_part('headerok'); ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php adaption_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main .site-main -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>