<?php get_header(); ?>

	<section class="content">
			
			<div class="container content-main">
				<div class="row">
					
					<div class="col-md-12 content-right">
					<h1 class="page-title"><?php esc_html_e( 'Вы ошибочно попали на несуществующую страницу.', 'new-garden' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Наиболее популярные категории', 'new-garden' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					

						</div>

						</div>
					</div>
					</div>

				</section>						


<?php get_footer(); ?>
