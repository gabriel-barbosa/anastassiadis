<?php /* Template Name: Home */ get_header(); ?>

<section class="slider-header">
	<div class="slider">
		<?php
		$featured_posts = get_field('featured_posts');
		if( $featured_posts ): ?>
			<?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
				<div class="single-post" data-title="<?php the_title(); ?>" data-color="<?php if(get_field('featured_color') == 'white'): ?>white<?php else: ?>black<?php endif; ?>">
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
		<svg xmlns="http://www.w3.org/2000/svg" width="34.642" height="15.674" viewBox="0 0 34.642 15.674">
		  <g id="Component_2_1" data-name="Component 2 – 1" transform="translate(0.707 0.707)">
		    <line id="Line_11" data-name="Line 11" x2="33.935" transform="translate(0 13.967)" fill="none" stroke="#f6f0ef" stroke-width="2"/>
		    <path id="Path_36" data-name="Path 36" d="M4841.5,1192.36l13.967-13.967" transform="translate(-4841.5 -1178.393)" fill="none" stroke="#f6f0ef" stroke-width="2"/>
		  </g>
		</svg>
	</div>

	<div class="arrow next">
		<svg xmlns="http://www.w3.org/2000/svg" width="29.207" height="15.674" viewBox="0 0 29.207 15.674">
		  <g id="Component_3_1" data-name="Component 3 – 1" transform="translate(0 0.707)">
		    <line id="Line_11" data-name="Line 11" x1="28.5" transform="translate(0 13.967)" fill="none" stroke="#f6f0ef" stroke-width="2"/>
		    <path id="Path_36" data-name="Path 36" d="M4855.467,1192.36l-13.967-13.967" transform="translate(-4826.967 -1178.393)" fill="none" stroke="#f6f0ef" stroke-width="2"/>
		  </g>
		</svg>
	</div>
</section>

<?php get_footer(); ?>
