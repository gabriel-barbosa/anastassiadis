<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' - '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

	<!-- header -->
	<header class="header">
			<div class="logo">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<svg id="Group_20" data-name="Group 20" xmlns="http://www.w3.org/2000/svg" width="331.407" height="49.322" viewBox="0 0 331.407 49.322">
					  <path id="Path_1" data-name="Path 1" d="M190.992,259.277h-6.958v-.124c2.36-2.174,2.733-3.354,4.224-7.392L202.3,213.247h1.677L218.2,252.32c1.615,4.6,2.05,5.342,4.038,6.833v.124h-7.765v-.124c.807-1.056,1.429-3.168.124-6.957l-3.6-10.064H193.352l-3.541,9.939c-1.429,3.913-.249,5.839,1.181,7.081Zm11.243-41.869-8.386,23.481h16.71Z" transform="translate(-184.034 -210.887)" fill="#101010"/>
					  <path id="Path_2" data-name="Path 2" d="M381.752,314.79h-5.839v-.124c1.181-2.174,1.367-3.976,1.367-7.268V292.054a5.243,5.243,0,0,0-2.733-4.659v-.124l5.591-3.23v5.653l.248.062a14.527,14.527,0,0,1,11.181-5.4c5.777,0,8.7,3.416,8.7,9.069v13.915c0,3.417.062,5.28,1.367,7.33v.124h-5.839v-.124c1.18-2.174,1.367-4.1,1.367-7.268V294.1c0-4.162-1.739-7.33-6.958-7.33a13.389,13.389,0,0,0-9.815,4.1v16.461c0,3.292.062,5.156,1.367,7.33Z" transform="translate(-333.423 -266.399)" fill="#101010"/>
					  <path id="Path_3" data-name="Path 3" d="M545.307,312.44a14,14,0,0,1-9.815,4.41c-4.41,0-7.267-2.36-7.267-6.336,0-7.268,10-10.436,17.083-11.12V293.68c0-3.293-1.553-6.336-7.02-6.336a15.712,15.712,0,0,0-8.7,2.733l-.311-.435a15.148,15.148,0,0,1,10.808-4.162c6.9,0,8.324,3.6,8.324,7.579v18.76c0,1.677.746,2.671,2.423,2.671A4.076,4.076,0,0,0,553.817,313l.186.125a4.968,4.968,0,0,1-4.721,3.541C546.611,316.664,545.369,314.862,545.307,312.44Zm0-1.056v-11c-6.709.808-13.915,3.541-13.915,9.256,0,2.92,1.677,4.969,5.59,4.969A12.274,12.274,0,0,0,545.307,311.383Z" transform="translate(-453.929 -267.528)" fill="#101010"/>
					  <path id="Path_4" data-name="Path 4" d="M680.693,292.126l-.5.124c-2.3-4.472-4.846-5.653-7.89-5.653-3.913,0-6.647,2.174-6.647,5.467,0,3.914,3.541,5.156,7.889,6.833,4.287,1.677,8.821,3.727,8.821,9.442,0,5.219-3.727,8.51-10.933,8.51a17.953,17.953,0,0,1-8.2-1.8l-.621-6.336.5-.124c2.051,4.97,4.784,7.144,9.194,7.144,4.97,0,7.517-2.858,7.517-6.336,0-4.1-3.728-5.777-7.828-7.268-4.162-1.491-8.883-3.541-8.883-8.883,0-5.777,5.218-7.765,10.25-7.765a18.91,18.91,0,0,1,6.709,1.118Z" transform="translate(-559.312 -267.528)" fill="#101010"/>
					  <path id="Path_5" data-name="Path 5" d="M776.479,296.927V274.44h-3.354v-.124l6.336-5.529h.124v4.535h9.193v1.118h-9.193v22.612c0,3.168,1.366,4.783,4.535,4.783a11.928,11.928,0,0,0,5.218-1.3l.124.249a9.69,9.69,0,0,1-6.771,2.981C779.772,303.76,776.479,302.269,776.479,296.927Z" transform="translate(-645.967 -254.438)" fill="#101010"/>
					  <path id="Path_6" data-name="Path 6" d="M884.311,312.44a14,14,0,0,1-9.815,4.41c-4.41,0-7.268-2.36-7.268-6.336,0-7.268,10-10.436,17.083-11.12V293.68c0-3.293-1.553-6.336-7.019-6.336a15.713,15.713,0,0,0-8.7,2.733l-.311-.435a15.148,15.148,0,0,1,10.808-4.162c6.9,0,8.324,3.6,8.324,7.579v18.76c0,1.677.745,2.671,2.422,2.671A4.075,4.075,0,0,0,892.821,313l.186.125a4.969,4.969,0,0,1-4.721,3.541C885.615,316.664,884.373,314.862,884.311,312.44Zm0-1.056v-11c-6.709.808-13.915,3.541-13.915,9.256,0,2.92,1.677,4.969,5.59,4.969A12.274,12.274,0,0,0,884.311,311.383Z" transform="translate(-719.757 -267.528)" fill="#101010"/>
					  <path id="Path_7" data-name="Path 7" d="M1019.7,292.126l-.5.124c-2.3-4.472-4.845-5.653-7.89-5.653-3.913,0-6.646,2.174-6.646,5.467,0,3.914,3.541,5.156,7.889,6.833,4.286,1.677,8.821,3.727,8.821,9.442,0,5.219-3.727,8.51-10.933,8.51a17.953,17.953,0,0,1-8.2-1.8l-.621-6.336.5-.124c2.05,4.97,4.783,7.144,9.193,7.144,4.97,0,7.517-2.858,7.517-6.336,0-4.1-3.727-5.777-7.827-7.268-4.162-1.491-8.883-3.541-8.883-8.883,0-5.777,5.218-7.765,10.25-7.765a18.911,18.911,0,0,1,6.709,1.118Z" transform="translate(-825.14 -267.528)" fill="#101010"/>
					  <path id="Path_8" data-name="Path 8" d="M1129.057,292.126l-.5.124c-2.3-4.472-4.846-5.653-7.889-5.653-3.913,0-6.647,2.174-6.647,5.467,0,3.914,3.541,5.156,7.889,6.833,4.286,1.677,8.821,3.727,8.821,9.442,0,5.219-3.727,8.51-10.933,8.51a17.955,17.955,0,0,1-8.2-1.8l-.621-6.336.5-.124c2.05,4.97,4.783,7.144,9.194,7.144,4.969,0,7.517-2.858,7.517-6.336,0-4.1-3.727-5.777-7.827-7.268-4.162-1.491-8.883-3.541-8.883-8.883,0-5.777,5.218-7.765,10.25-7.765a18.908,18.908,0,0,1,6.708,1.118Z" transform="translate(-910.895 -267.528)" fill="#101010"/>
					  <path id="Path_9" data-name="Path 9" d="M1221.707,268.4c1.18-2.174,1.366-4.038,1.366-7.268V245.732a5.294,5.294,0,0,0-2.733-4.6v-.124l5.839-3.23v23.295c0,3.292.062,5.156,1.366,7.33v.124h-5.839Zm2.733-38.265a2.547,2.547,0,1,1,2.546-2.547A2.519,2.519,0,0,1,1224.44,230.14Z" transform="translate(-996.648 -220.139)" fill="#101010"/>
					  <path id="Path_10" data-name="Path 10" d="M1299.009,312.44a14,14,0,0,1-9.816,4.41c-4.41,0-7.268-2.36-7.268-6.336,0-7.268,10-10.436,17.083-11.12V293.68c0-3.293-1.554-6.336-7.02-6.336a15.713,15.713,0,0,0-8.7,2.733l-.311-.435a15.148,15.148,0,0,1,10.808-4.162c6.9,0,8.325,3.6,8.325,7.579v18.76c0,1.677.745,2.671,2.422,2.671a4.075,4.075,0,0,0,2.982-1.491l.186.125a4.968,4.968,0,0,1-4.72,3.541C1300.313,316.664,1299.071,314.862,1299.009,312.44Zm0-1.056v-11c-6.709.808-13.915,3.541-13.915,9.256,0,2.92,1.677,4.969,5.591,4.969A12.276,12.276,0,0,0,1299.009,311.383Z" transform="translate(-1044.94 -267.528)" fill="#101010"/>
					  <path id="Path_11" data-name="Path 11" d="M1436.41,245.36a12,12,0,0,1-11.057,6.274c-7.517,0-12.487-5.653-12.487-14.6,0-8.821,6.46-16.772,16.275-16.772a15.065,15.065,0,0,1,7.206,1.677V208.9c0-1.988-1.3-3.106-2.734-3.852v-.124l5.839-2.609v41.744c0,3.913.684,4.534,2.733,5.4v.124l-5.528,1.863V245.36Zm-.062-1.242V230.079c0-6.9-4.286-8.7-8.076-8.7-6.833,0-11.8,6.088-11.8,14.536s4.472,13.6,10.685,13.6A10.841,10.841,0,0,0,1436.348,244.118Z" transform="translate(-1147.617 -202.312)" fill="#101010"/>
					  <path id="Path_12" data-name="Path 12" d="M1569.641,268.4c1.18-2.174,1.366-4.038,1.366-7.268V245.732a5.294,5.294,0,0,0-2.733-4.6v-.124l5.839-3.23v23.295c0,3.292.063,5.156,1.367,7.33v.124h-5.839Zm2.733-38.265a2.547,2.547,0,1,1,2.547-2.547A2.519,2.519,0,0,1,1572.374,230.14Z" transform="translate(-1269.479 -220.139)" fill="#101010"/>
					  <path id="Path_13" data-name="Path 13" d="M1645.918,292.126l-.5.124c-2.3-4.472-4.845-5.653-7.889-5.653-3.913,0-6.646,2.174-6.646,5.467,0,3.914,3.541,5.156,7.889,6.833,4.287,1.677,8.821,3.727,8.821,9.442,0,5.219-3.728,8.51-10.933,8.51a17.954,17.954,0,0,1-8.2-1.8l-.621-6.336.5-.124c2.051,4.97,4.784,7.144,9.194,7.144,4.97,0,7.517-2.858,7.517-6.336,0-4.1-3.728-5.777-7.828-7.268-4.162-1.491-8.883-3.541-8.883-8.883,0-5.777,5.218-7.765,10.25-7.765a18.91,18.91,0,0,1,6.709,1.118Z" transform="translate(-1316.188 -267.528)" fill="#101010"/>
					</svg>
				</a>
			</div>

			<div id="nav-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<nav class="nav">
				<?php wp_nav_menu(array('menu' => '9')); ?>
				<?php html5blank_nav(); ?>
			</nav>

		<?php if(is_single()): ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php
				$categories = get_the_category();
				$cls = '';

				 if ( ! empty( $categories ) ) {
						foreach ( $categories as $cat ) {
							$cls = $cat->slug;
							$catname = $cat->name;
						}
					}
					endwhile; endif;
				?>
			<?php elseif(is_category()): ?>
				<?php $category = get_queried_object();
				$cls = $category->slug; ?>
				<?php endif; ?>

			<?php if(is_page(array('work')) || is_category() || is_single()): ?>
			<div class="cat-menu <?php if(qtranxf_getLanguage() == "en"): ?>english<?php endif; ?>">
				<div class="cat-item all"><a href="<?php bloginfo('url') ?>/work/">All</a></div>
				<?php global $wp_query;
				// get the query object
				$queriedpost = $wp_query->get_queried_object();
				$id = $queriedpost->id;

				$terms = get_terms( 'category', array(
						'hide_empty' => 0,
						'exclude' => array('1'),
				));
				foreach( $terms as $term ): ?>
				<div class="cat-item <?php echo($term->slug); if($cls == $term->slug): echo(' current'); endif; ?>">
					<a href="<?php $term_link = get_term_link( $term ); echo($term_link); ?>"><?php echo($term->name); ?></a>
				</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>

			<?php if(is_page('about')): ?>
				<div class="cat-menu about-menu <?php if(qtranxf_getLanguage() == "en"): ?>english<?php endif; ?>">
					<div class="cat-item"><a href="#profile"><?php if(qtranxf_getLanguage() == "pb"): ?>Perfil<?php else: ?>Profile<?php endif; ?></a></div>
					<div class="cat-item"><a href="#team"><?php if(qtranxf_getLanguage() == "pb"): ?>Equipe<?php else: ?>Team<?php endif; ?></a></div>
					<div class="cat-item"><a href="#clients"><?php if(qtranxf_getLanguage() == "pb"): ?>Clientes<?php else: ?>Clients<?php endif; ?></a></div>
				</div>
			<?php endif; ?>
	</header>

	<nav class="menu-mobile">
		<?php wp_nav_menu(array('menu' => '9')); ?>
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /header -->

	<div class="wrapper">
