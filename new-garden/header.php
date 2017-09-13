
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru" class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8" />

	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-114x114.png" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<?php wp_head(); ?>
</head>

<body <?php body_class('ishome'); ?>>
	<div class="main">

		<div class="container main-head">
			<div class="row">
			<div class="header">

					<div class="mnu-line clearfix">

						<div class="col-md-2 col-sm-6 logo-mnu">
							<a class="logo" href="http://www.new-garden.co.ua">
								<img src="<?php bloginfo('template_url');?>/img/logo-new.png" alt="<?php echo get_bloginfo('name'); ?>">
							</a>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 col-md-push-7">
							<form class="navbar-form navbar-right">
								<div class="d3">
								<?php if ( is_active_sidebar( 'search' ) ) : ?>
							
							<div id="search" class="form">
								
								<?php dynamic_sidebar( 'search' ); ?>
								
							</div>
							
						<?php endif; ?>




									<!-- <form>
										<input type="search"
										placeholder="Поиск..." required>
										<button type="submit"></button>
									</form> -->
								</div>

							</form>
						</div>
						<div class="col-md-7 col-xs-12 col-md-pull-3">
							<nav class="main-mnu">
<?php 
wp_nav_menu( array(
	'menu_class'=>'main-mnu',
    'theme_location'=>'Top-menu'
) );
?>
							</nav>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2  hidden-xs  main-slogan">

							<h1><?php echo get_bloginfo('name'); ?> </h1>
							<p>
								<?php echo get_bloginfo('description'); ?>	 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
