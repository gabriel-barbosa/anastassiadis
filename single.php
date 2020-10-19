<?php get_header(); ?>

<section>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
	<?php
	$images = get_field('galeria_de_fotos');
	if( $images ): ?>
		<div class="post-header">
			<div class="post-slider">
				<?php foreach( $images as $image ): ?>
					<img class="single-image" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['caption']); ?>" />
				<?php endforeach; ?>
			</div>

			<div class="slider-nav">
				<?php foreach( $images as $image ): ?>
					<div class="single-thumb">
						<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['ca']); ?>" />
					</div>
				<?php endforeach; ?>
			</div>

			<div class="caption-nav">
				<p class="caption">&nbsp;</p>

				<div class="thumbnails-button">
					<div class="button">See thumbnails</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="post-content">
		<div class="infos break"></div>

		<div class="content">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="infos">
			<?php if( have_rows('informacoes') ): ?>
		    <?php while( have_rows('informacoes') ): the_row(); ?>
		        <div>
		        	<div class="title"><?php the_sub_field('titulo'); ?></div>
							<div class="description"><?php the_sub_field('descricao'); ?></div>
		        </div>
		    <?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="content">
			<?php the_content(); // Dynamic Content. ?>
		</div>
	</div>
<?php endwhile; ?>

<?php else : ?>
	<article>
		<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
	</article>
<?php endif; ?>

</section>

<?php get_footer(); ?>
