<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adaption
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<aside class="headerok entry-meta">
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Доктор Марина Невдовец</a></h1>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			<h2 class="site-description">профессиональный косметолог</h2>
			<?php
			if ( has_nav_menu( 'headerok' ) ) : ?>
				<div id="headerok-nav" class="headerok-nav">
					<?php wp_nav_menu( array(

					) ); ?>
				</div><!-- headerok-nav -->
			<?php endif; ?>
			<a href="tel:+380687438946" class="head-phone">(068) 743 89 46</a>
		</aside><!-- headerok entry-meta -->
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

				<?php endwhile; ?>

			<?php adaption_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main .site-main -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>
