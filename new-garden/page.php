<?php get_header(); ?>

<section class="content">

	<div class="container content-main">
		<div class="row">

			<div class="col-md-9 col-md-push-3 content-right">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
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
