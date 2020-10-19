<?php /* Template Name: Press */ get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('press') ): ?>
		<div class="press">
			<?php while( have_rows('press') ): the_row(); ?>
				<div class="single-press">
					<div class="year"><?php the_sub_field('ano'); ?></div>

					<div class="name">
						<h1><?php the_sub_field('nome'); ?></h1>
						<div class="country"><?php the_sub_field('pais'); ?></div>
					</div>

					<div class="link">
						<a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('titulo'); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
<?php endwhile; ?>

<?php else : ?>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>

<?php get_footer(); ?>
