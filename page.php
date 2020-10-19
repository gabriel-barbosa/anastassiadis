<?php get_header(); ?>

	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
		<div class="column-wrapper">
			<div class="column">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
	<?php else : ?>

		<article>
			<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
