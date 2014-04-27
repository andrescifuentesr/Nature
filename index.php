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
 * @package NaturesIntent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
			</div><!-- flexslider -->

			<div class="wrapper-blog">
				<div class="wrapper-articles">
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
					<?php endif; ?>
				</div><!--

			--><div class="blog-archives">
					<h2 class="widget-title"><?php _e( 'Archives', 'naturesintent' ); ?></h2>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div><!-- .entry-content -->
			</div>

		</main><!-- #main -->

	</div><!-- #primary -->
<?php get_footer(); ?>
