<?php
/**
 * @package NaturesIntent
 */
?>
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
		<h2 class="entry-title-paragraph">
			<?php //we call the taxonomy name
				$term_list = wp_get_post_terms($post->ID, 'product-recipe', array("fields" => "names"));
				$tax_title = $term_list[0];
				echo $tax_title;
			?>
		</h2>
		<h1 class="entry-title-main"><?php the_title(); ?></h1>

		<div class="block-ingredients">
			<h3><?php _e( 'Ingredients', 'naturesintent' ); ?></h3>
			<?php the_content(); ?>
		</div><!-- .block-ingredients-->

		<div class="block-preparation">
			<h3><?php _e( 'Preparation', 'naturesintent' ); ?></h3>
			<p><?php the_field('recipe_preparation'); ?></p>
		</div><!-- .block-preparation-->

		<!-- Block recipes also like-->
		<div class="bloc-idem-article">
				<?php
					//on find the current taxonomy
					$terms = get_the_term_list( $post->ID, 'product-recipe', '', ', ', '' );
					$args = array(
						'post_type'   		=> 'recipe',			//custom post type
						'order'				=> 'DESC',				// List in ascending order
						'orderby'      		=> 'id',				// List them in their menu order
						'posts_per_page'	=>   -1, 				// Show all
						//'post__not_in'		=> array( $post->ID ), 	// exclude itself
						//query by taxonomy
						'tax_query' => array(
							array(
								'taxonomy' => 'product-recipe',
								'field' => 'slug',
								'terms' => $terms
							)
						)
					);
					$QueryRecipe = new WP_Query($args);
				?>	
				<h1 class="entry-title entry-title-page-recipe">
					<?php  printf( 'Other %s recipes', $tax_title ); ?>
				</h1>

				<?php while ($QueryRecipe->have_posts()) : $QueryRecipe->the_post(); ?><!--
				--><div class="block-recipe">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/chocolate.jpg" />
							<div class="entry-title-recipe">
								<div class="entry-type-recipe">
									<p>
										<?php echo $tax_title; //we call the taxonomy name?>
									</p>
								</div>
								<p class="entry-subtitle-recipe"><?php the_title(); ?></p>
							</div>
						</a>
					</div><!--
			--><?php endwhile; // end of the loop. ?>
		</div><!-- .you might also like -->


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
