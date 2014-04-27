<?php
/*
Template Name: Contact
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
					<h1 class="entry-title"><?php _e( 'We love feedback !', 'naturesintent' ); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-header --><!--

				--><div class="entry-content-right">
						<p><?php the_field('contact-information'); ?></p>
					</div>

					<?php echo do_shortcode( '[contact-form-7 id="24" title="Contact form"]' ); ?>
				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
