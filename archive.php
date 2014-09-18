<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package NaturesIntent
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title-archive">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'naturesintent' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'naturesintent' ) ) . '</span>' );

						else :
							_e( 'Our Archive Recipes', 'naturesintent' );

						endif;
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="wrapper-blog">
				<div class="wrapper-articles">
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

					<?php naturesintent_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
