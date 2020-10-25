<?php /* Template Name: Work */ get_header(); ?>

<section>
	<?php
	$args = array(
		'post_type'=> 'post',
		'post_status' => 'publish',
		'order'    => 'DESC',
	);
	$posts = new WP_Query( $args ); if ($posts->have_posts()): ?>
	<div class="posts-grid">
		<?php while ($posts->have_posts()): $posts->the_post(); ?>
			<div class="single-post">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
					<div class="hover">
						<div class="category"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></div>
						<div class="title"><?php the_title(); ?></div>
					</div>
				</a>

				<div class="title-mobile">
					<div class="category"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></div>
					<div class="title"><?php the_title(); ?></div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<?php else : ?>

	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>

<?php get_footer(); ?>
