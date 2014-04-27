<?php
/*
Template Name: Recipe
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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
							$args = array(
								'post_type' 		=> 'recipe', 	//Costum type recipe
								'order'				=> 'DESC',		// List in descending order
								'orderby'      		=> 'id',		// List them by ID
								'posts_per_page'	=>  -1, 		// Show all
							);
							$queryRecipe = new WP_Query($args);
						?>
						<h1 class="entry-title entry-title-recipe"><?php the_title(); ?></h1>
						<?php while ($queryRecipe->have_posts()) : $queryRecipe->the_post(); ?><!--
						--><div class="block-recipe">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php bloginfo('template_directory'); ?>/img/chocolate.jpg" />
									<div class="entry-title-recipe">
										<div class="entry-type-recipe">
											<?php the_content(); ?>
										</div>
										<p><?php the_title(); ?></p>
									</div>
								</a>
							</div><!--
					--><?php endwhile; ?>
					</div><!-- .entry-header --><!--

				--><div class="entry-image">
						<?php $args = array(
							'type'            => 'monthly',
							'limit'           => '',
							'format'          => 'html', 
							'before'          => '',
							'after'           => '',
							'show_post_count' => false,
							'echo'            => 1,
							'order'           => 'DESC'
						); ?>
						 <?php wp_get_archives( $args ); ?> 
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
