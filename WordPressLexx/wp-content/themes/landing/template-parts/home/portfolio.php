<section class="Portfolio" id="portfolio">
	<div class="container-fluid">
		<div class="mx-auto">
			<h2><span>Portfolio</span></h2>
		<!-- <div class=" offset-md-3 col-md-6 d-flex justify-content-between pf-others">
				<a href="#">All</a>
				<a href="#">Web-Design</a>
				<a href="#">Front-End</a>
			</div> -->
		</div>
		<div class=" row">
			
			<?php
				$args = array( 'post_type' => 'Projects' ) ;
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					$post_date = get_the_date( 'dS M Y' );
				?>
					<div class="col-6 col-sm-4 col-md-3">
						<div class="grid-portfolio-item">
					<div class="grid-portfolio-image">
					  <img src="<?php the_post_thumbnail_url(); ?>">
					</div>
					<div class="grid-portfolio-item-cover">
					  <div class="grid-portfolio-item-content">
						<h5 class="grid-portfolio-work-title">
						  <a href="<?php echo get_permalink(); ?>">
											<?php the_content(); ?>
										</a>
						  <i class="fa fa-long-arrow-right grid-portfolio-work-icon-cover"></i>
						</h5>
						<span class="grid-portfolio-work-date">
						  <?php echo $post_date; ?>
						</span>
					  </div>
					</div>
				  </div>
					</div>
			<?php endwhile;?>
		</div>
	</div>
</section>