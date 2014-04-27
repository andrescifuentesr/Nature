<?php
/**
 * The Template for displaying all single posts.
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

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>