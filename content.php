<?php
/**
 * @package NaturesIntent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<!-- Posted by  -->
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php naturesintent_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="bloc-social clearfix">
		<div class="social-plugin">
			 <?php if( function_exists( do_sociable() ) ){ do_sociable(); } ?>
		</div><!--

	--><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'naturesintent' ), __( '1 Comment', 'naturesintent' ), __( '% Comments', 'naturesintent' ) ); ?></span>
		<?php endif; ?>
	</div><!-- bloc-social  -->

	<!-- Excerpt  -->
	<?php the_excerpt(); ?>
</article><!-- #post-## -->
