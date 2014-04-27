<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NaturesIntent
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="nav-social">
				<div class="bt-newsletter">
					<img src="<?php bloginfo('template_directory'); ?>/img/bt-newsletter.svg" /><!--
					--><a href="#">Newsletter</a>
				</div><!--
				--><?php get_template_part( 'menu', 'social' ); ?>
			</div>
		</div><!-- .site-header--top -->		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
