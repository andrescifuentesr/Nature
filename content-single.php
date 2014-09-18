<?php
/**
 * @package NaturesIntent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content entry-content-article">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta-article">
			<?php naturesintent_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="bloc-social clearfix">
			<div class="social-plugin">
				 <?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
			</div><!--

		--><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'naturesintent' ), __( '1 Comment', 'naturesintent' ), __( '% Comments', 'naturesintent' ) ); ?></span>
			<?php endif; ?>
		</div><!-- bloc-social  -->

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
		?><!-- .comments -->

		<div class="bloc-idem-article">
			<h2 class="bloc-idem-article-title"><?php _e( 'You might also like', 'naturesintent' ); ?></h2>
			<ul>
				<?php
					$category = get_the_category();
					$category_id   = $category[0]->cat_ID; //current category

					$args = array(
						'cat'				=> $category_id, 		//cat		
						'order'				=> 'DESC',				// List in ascending order
						'orderby'      		=> 'id',				// List them in their menu order
						'posts_per_page'	=>   -1, 				// Show all
						'post__not_in'		=> array( $post->ID ) 	// exclude itself
					);

					$QueryCategory = new WP_Query($args);
				?>
				<?php while ($QueryCategory->have_posts()) : $QueryCategory->the_post(); ?>
						 <li>
						 	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</li>
				<?php endwhile; // end of the loop. ?>
			</ul>
		</div><!-- .you might also like -->

	</div><!-- .entry-content --><!--

--><div class="blog-archives blog-archives-article">
		<h2 class="widget-title"><?php _e( 'Archives', 'naturesintent' ); ?></h2>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>
	</div><!-- .entry-content -->

</article><!-- #post-## -->