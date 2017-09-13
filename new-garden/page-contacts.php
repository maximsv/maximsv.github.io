<?php
/*
Template Name: page-contacts
*/
?>
<?php get_header(); ?>


<section class="content">
	
	<div class="container content-main">
		<div class="row">
			
			<div class="col-md-9 col-md-push-3 content-right">
				
				<div class="content-contacts"><?php
	// Start the loop.
					while ( have_posts() ) : the_post(); ?>
					
					<h2>
						<img class="sprout-decor" src="<?php bloginfo('template_url');?>/img/sprout.png" alt="Питомник саженцев в Умани"> Продажа растений 
						<div class="soc-icons">
							<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
								
								<div id="sidebar-1" class="Sidebar-soc">
									
									<?php dynamic_sidebar( 'sidebar-1' ); ?>
									
								</div>
								
							<?php endif; ?>
						</div>
					</h2>
					
					<p><?php the_content(); ?></p>
					<div class="form-contacts">
						<div class="row">

							<div class="col-md-6 col-md-push-6 col-xs-12">

								<form id="form" class="forms">
									<h3>Заполните, пожалуйста, эту форму</h3>

									<label>
										<span>
											Ваше имя
										</span>
										<input type="text" name="name" placeholder="Ваше имя" required />
									</label>

									<label>
										<p>Ваш телефон</p>
										<input type="text" name="phone" placeholder="Ваш телефон" required />
									</label>

									<label>
										<span>Оставьте необходимую информацию</span>
										<textarea name="text" required></textarea>
									</label>
									<div class="button-wrap">
										<button class="btn">
											Отправить
										</button>
									</div>
								</form>
							</div>

							<div class="col-md-6 col-md-pull-6 col-xs-12 contacts-adress" >
								
								<h3>				
									<i class="fa fa-car" aria-hidden="true"></i>							
									К нам можно обратиться
									по следующему адресу:
								</h3>

								<p>
									<i class="fa fa-street-view" aria-hidden="true"></i>
									<?php echo get_post_meta($post->ID, 'adress', true); ?>
								</p>
								<h3>Телефон для связи</h3>
								<p class="telefon-contacts"><i class="fa fa-phone" aria-hidden="true"></i>
									<?php echo get_post_meta($post->ID, 'telefon1', true); ?> </p>
									<p class="telefon-contacts"><i class="fa fa-phone" aria-hidden="true"></i>
										<?php echo get_post_meta($post->ID, 'telefon2', true); ?></p>

										<p>
											<i class="fa fa-street-view" aria-hidden="true"></i>
											<?php echo get_post_meta($post->ID, 'menedger', true); ?>
										</p>
										<h3>Телефон для связи</h3>
										<p class="telefon-contacts"><i class="fa fa-phone" aria-hidden="true"></i>
											<?php echo get_post_meta($post->ID, 'telefon3', true); ?>  </p>
											
										</div>

									</div>
								</div>

								<div class="maps-contacts">
									<div class="row">
										<div class="col-md-12">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17683.241101256997!2d30.269014149601713!3d48.68148611995788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1503673872459" width="900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
								

							<?php endwhile; ?>
						</div>		
						<div class="row">
							<?php
	// Start the loop.
							while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-12 logo-tree">
								
								<img src="<?php bloginfo('template_url');?>/img/mini-tree.png" alt="">
								<p><?php echo get_post_meta($post->ID, 'Slogan', true); ?></p>

							</div><?php endwhile; ?>
						</div>


					</div>

					<?php get_sidebar(); ?>

				</div>
			</div>

		</section>						


		<?php get_footer(); ?>