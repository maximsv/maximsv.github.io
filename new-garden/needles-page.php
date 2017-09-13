<?php
/*
Template Name: needles-page
*/
?>
<?php get_header(); ?>


<section class="content">

	<div class="container content-main">
		<div class="row">

			<div class="col-md-9 col-md-push-3 content-right">
			<?php
	// Start the loop.
				while ( have_posts() ) : the_post(); ?>
				<div class="content-mnu">
					<div class="soc-icons">
						<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
							
							<div id="sidebar-1" class="Sidebar-soc">
								
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
								
							</div>
							
						<?php endif; ?>
					</div>
					<h2>
						<img class="sprout-decor" src="<?php bloginfo('template_url');?>/img/sprout.png" alt="Питомник саженцев в Умани"> Продажа растений</h2>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>

					<div class="wrapper-thumbnail">
						<div class="row">
							<h3>Направления деятельности нашего питомника:</h3>
							<div class="col-md-4 col-sm-6 thumbnail-wrapper">
							<?php if ( is_active_sidebar( 'card-1' ) ) : ?>
								
								<div id="card-1" class="card">
									
									<?php dynamic_sidebar( 'card-1' ); ?>
									
								</div>
								
							<?php endif; ?>



						</div>	
						<div class="col-md-4 col-sm-6 thumbnail-wrapper">
							<?php if ( is_active_sidebar( 'card-1' ) ) : ?>
								
								<div id="card-1" class="card">
									
									<?php dynamic_sidebar( 'card-1' ); ?>
									
								</div>
								
							<?php endif; ?>

							

						</div>	

<div class="col-md-4 col-sm-6 thumbnail-wrapper">
							<?php if ( is_active_sidebar( 'card-1' ) ) : ?>
								
								<div id="card-1" class="card">
									
									<?php dynamic_sidebar( 'card-1' ); ?>
									
								</div>
								
							<?php endif; ?>

							

						</div>	


						

						
					

			

						</div>
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



