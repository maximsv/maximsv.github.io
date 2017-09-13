<div class="col-md-3 col-md-pull-9 left-menu">
							<aside class="">
								<div class="menu-top menu">
									<h2>Растения</h2>
									<?php 
wp_nav_menu( array(
	'menu'=>'aside-top',
	'menu_class'=>'aside_menu',
    'theme_location'=>'боковое меню'
) );
?>
									
								</div>

								<div class="menu-bottom menu">
									<h2>Статьи </h2>
									<?php 
wp_nav_menu( array(
	'menu'=>'aside-bottom',
	'menu_class'=>'aside_menu',
    'theme_location'=>'боковое меню снизу'
) );
?>
								

									</div>

								</aside>

							</div>




