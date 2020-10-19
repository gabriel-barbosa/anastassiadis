<?php /* Template Name: Home */ get_header(); ?>

<section class="slider-header">
	<div class="slider">
		<?php
		$featured_posts = get_field('featured_posts');
		if( $featured_posts ): ?>
			<?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
				<div class="single-post" data-title="<?php the_title(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					<div class="caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
				</div>
			<?php endforeach; ?>
			<?php
			// Reset the global post object so that the rest of the page works correctly.
			wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<div class="arrow prev">
		<img src="<?php bloginfo('template_url'); ?>/img/arrow-left.svg" alt="">
	</div>

	<div class="arrow next">
		<img src="<?php bloginfo('template_url'); ?>/img/arrow-right.svg" alt="">
	</div>
</section>

<?php get_footer(); ?>
