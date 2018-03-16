<section class="sponsors" id="sponsors">
	<div class="container">
		<div class="row">
			<?php
				$args = array( 'post_type' => 'sponsors' ) ;
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>

				<div class="d-flex order-1 order-md-1 col-6 col-md-3">
					<div class="sponsor-logo mx-auto">
						<a href="<?php echo get_permalink(); ?>">
							<span class="sponsors-img">
								<img src="<?php the_post_thumbnail_url(); ?>">
							</span>
							<span class="d-none d-md-block"><?php the_title(); ?></span>
						</a>
					</div>
				</div>

			<?php endwhile;?>

		</div>
	</div>
</section>