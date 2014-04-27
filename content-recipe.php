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
			<?php the_content(); ?>
		</h2>
		<h1 class="entry-title-main"><?php the_title(); ?></h1>

		<div class="block-ingredients">
			<h3><?php _e( 'Ingredients', 'nsi' ); ?></h3>
			<p><?php the_field('recipe_ingredients'); ?></p>
		</div>

		<div class="block-preparation">
			<h3><?php _e( 'Preparation', 'nsi' ); ?></h3>
			<p><?php the_field('recipe_preparation'); ?></p>
		</div>
	</div><!-- .entry-header --><!--

--><div class="entry-image entry-image-product">

	</div>


</article>
