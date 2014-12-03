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