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

<div class="breadcrumb">
	<ul>
		<?php
			$args = array(
				'post_type'	=>'products',
				'title_li'	=> '' 
			);
			wp_list_pages( $args ); 
		?>
	</ul>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!-- .entry-header --><!--

--><div class="entry-image entry-image-product">
		<?php
			$image_01 = get_field('product_image_01');
			$image_02 = get_field('product_image_02');
			( !empty($image_02) ) ? $class_image_product = "entry-image-double" : "";
			if( !empty($image_01) ): ?>
				<img src="<?php echo $image_01['url']; ?>" alt="<?php echo $image_01['alt']; ?>" class="<?php echo $class_image_product?>"/>
		<?php endif;
			if( !empty($image_02) ): ?>
				<img src="<?php echo $image_02['url']; ?>" alt="<?php echo $image_02['alt']; ?>" class="<?php echo $class_image_product?>"/>
		<?php endif; ?>
	</div>

	<div class="module-tab hide-module-tab clearfix">
		<ul>
			<li>
				<input type="radio" id="tab-one-<?php the_ID(); ?>" name="tab-set" checked="checked">
				<label for="tab-one-<?php the_ID(); ?>"><?php _e( 'Ingredients', 'nsi' ); ?></label>
				<div class="tab-content tab-content-1">
					<div class="product-half-content">
						<h2 class="entry-title"><?php _e( 'Ingredients', 'nsi' ); ?></h2>
						<p><?php the_field('ingredients'); ?></p>
					</div>
					<div class="product-half-image">
						<?php
							$image = get_field('ingredients_image');
							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div><!-- tab-content -->
			</li>
			<li>
				<input type="radio" id="tab-two-<?php the_ID(); ?>" name="tab-set">
				<label for="tab-two-<?php the_ID(); ?>"><?php _e( 'Nutrition', 'nsi' ); ?></label>
				<div class="tab-content tab-content-2">
					<div class="product-half-content">
						<h2 class="entry-title"><?php _e( 'Nutrition', 'nsi' ); ?></h2>
						<p><?php the_field('nutrition'); ?></p>
					</div>
					<div class="product-half-image">
						<?php
							$image = get_field('nutrition_image');
							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div><!-- tab-content -->
			</li>
		</ul>
	</div>
</article>
