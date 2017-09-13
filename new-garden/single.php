<?php get_header(); ?>


<section class="content">

	<div class="container content-main">
		<div class="row">

			<div class="col-md-9 col-md-push-3 content-right">

				<div class="content-mnu-articles">
					<div class="media">
						<h2 class="media-heading"> 
							<?php the_title() ; ?> 
							<div class="soc-icons">
						<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
							
							<div id="sidebar-1" class="Sidebar-soc">
								
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
								
							</div>
							
						<?php endif; ?>
					</div>
						</h2>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

								<?php if(has_post_thumbnail()): ?>
									<?php the_post_thumbnail(); ?>
								<?php else: ?>
								<?php endif; ?>


								<?php the_content(); ?>

							<?php  endwhile;?> 
						<?php endif; ?>					


				</div>

				<div class="row">
					<?php
	// Start the loop.
					while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-12 logo-tree">

						<img src="<?php bloginfo('template_url');?>/img/mini-tree.png" alt="">
						<p><?php echo get_post_meta($post->ID, 'Slogan', true); ?></p>

					</div>
				<?php endwhile; ?>
				</div>

			</div>
		</div>

		<?php get_sidebar(); ?>


	</div>
</div>

</section>
<?php get_footer(); ?>







