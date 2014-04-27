<?php
/*
Template Name: About
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="flexslider-wrapper loading">

				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>

					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/img/slider-image-01.jpg" />
							</li>
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/img/slider-image-02.jpg" />
							</li>
						</ul>
					</div>
				</div>

				<div class="grid-home">
					<div class="grid-home-item grid-feature-item-gutter">
						<div class="block-black-hack">
							<img src="<?php bloginfo('template_directory'); ?>/img/image-product.jpg" />
						</div>
						<h2><?php _e( 'Products', 'naturesintent' ); ?></h2>
					</div><!-- 
				--><div class="grid-home-item grid-feature-item-gutter">
						<div class="block-black-hack">
							<img src="<?php bloginfo('template_directory'); ?>/img/image-blog.jpg" />
						</div>
						<h2><?php _e( 'Blog', 'naturesintent' ); ?></h2>
					</div><!-- 
				--><div class="grid-home-item">
						<div class="block-black-hack">
							<img src="<?php bloginfo('template_directory'); ?>/img/image-recipe.jpg" />
						</div>
						<h2><?php _e( 'Recipes', 'naturesintent' ); ?></h2>
					</div>
				</div>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div><!-- .entry-header --><!--

				--><div class="entry-image">
						<?php the_post_thumbnail('full'); ?>
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
