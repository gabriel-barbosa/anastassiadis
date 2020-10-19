<?php /* Template Name: About */ get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('about_section') ): ?>
		<div id="profile" class="section about">
			<?php while( have_rows('about_section') ): the_row(); ?>
				<h1><?php the_sub_field('title'); ?></h1>
				<div><?php the_sub_field('text') ?></div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php if( have_rows('team_founder') ): ?>
		<?php while( have_rows('team_founder') ): the_row(); ?>
			<div id="team" class="section team content">
				<h1><?php if(qtranxf_getLanguage() == "pb"): ?>Time<?php else: ?>Team<?php endif; ?></h1>

				<div class="role"><?php the_sub_field('role'); ?></div>
				<h2><?php the_sub_field('name'); ?></h2>
				<p><?php the_sub_field('description') ?></p>
			</div>

			<div id="team" class="section team photo">
				<img src="<?php the_sub_field('photo'); ?>" alt="">
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if( have_rows('team_members')): ?>
		<div class="section team_members">
			<?php while( have_rows('team_members') ): the_row(); ?>
				<div class="member">
					<?php $image = get_sub_field('photo'); ?>
					<div class="image">
						<img src="<?php echo esc_url($image['url']); ?>" alt="">
					</div>

					<div class="role"><?php the_sub_field('role'); ?></div>
					<h2><?php the_sub_field('name'); ?></h2>
					<p><?php the_sub_field('description') ?></p>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php if( have_rows('clients')): ?>
		<div id="clients" class="section clients">
			<h1><?php if(qtranxf_getLanguage() == "pb"): ?>Clientes<?php else: ?>Clients<?php endif; ?></h1>

			<div class="clients-list">
				<?php while( have_rows('clients') ): the_row(); ?>
						<div class="client"><?php the_sub_field('client'); ?></div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

<?php endwhile; ?>

<?php else : ?>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>

<?php get_footer(); ?>
