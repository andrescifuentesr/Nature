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
						<h1 class="entry-title entry-title-page-recipe"><?php the_title(); ?></h1>
						<?php while ($queryRecipe->have_posts()) : $queryRecipe->the_post(); ?><!--
						--><div class="block-recipe">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php bloginfo('template_directory'); ?>/img/chocolate.jpg" />
									<div class="entry-title-recipe">
										<div class="entry-type-recipe">
											<p>
												<?php //we call the taxonomy name
													$term_list = wp_get_post_terms($post->ID, 'product-recipe', array("fields" => "names"));
													$tax_title = $term_list[0];
													echo $tax_title;
												?>
											</p>
										</div>
										<p class="entry-subtitle-recipe"><?php the_title(); ?></p>
									</div>
								</a>
							</div><!--
					--><?php endwhile; ?>
					</div><!-- .entry-header --><!--

				--><div class="blog-archives">
						<?php 
							//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
							$args = array(
							'taxonomy'     => 'product-recipe',
							'orderby'      => 'name',
							'hierarchical' => 1, //1 for yes, 0 for no
							'title_li'     => '',
							'hide_empty'   => '0'
							);
						?>
						<h2 class="widget-title"><?php _e( 'Archives', 'naturesintent' ); ?></h2>
						<ul>
							<?php wp_list_categories( $args ); ?>
						</ul>
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
