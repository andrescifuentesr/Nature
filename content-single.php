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
	</div><!-- .entry-content --><!--

--><div class="blog-archives blog-archives-article">
		<h2 class="widget-title"><?php _e( 'Archives', 'naturesintent' ); ?></h2>
		<ul>
			<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		</ul>
	</div><!-- .entry-content -->

</article><!-- #post-## -->