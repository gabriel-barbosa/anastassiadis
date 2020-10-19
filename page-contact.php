<?php /* Template Name: Contato */ get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('contact_section') ): while( have_rows('contact_section') ): the_row(); ?>
		<div class="contact">
			<h1><?php the_sub_field('titulo'); ?></h1>

			<div class="column">
				<?php the_sub_field('coluna_1'); ?>
			</div>

			<div class="column">
				<?php the_sub_field('coluna_2'); ?>
			</div>

			<div class="column">
				<?php the_sub_field('coluna_3'); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>

	<?php if( have_rows('employment_section') ): while( have_rows('employment_section') ): the_row(); ?>
		<div class="employment">
			<div class="column">
				<h1><?php the_sub_field('titulo'); ?></h1>
				<div class="content">
					<?php the_sub_field('content'); ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
<?php endwhile; ?>

<?php else : ?>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>

<?php get_footer(); ?>
