
<?php get_header() ?>

<?php get_template_part( 'template-parts/home/features' );  ?>

<?php get_template_part( 'template-parts/home/team' );  ?>

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
											<?php echo the_title(); ?>
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

<section class="sponsors" id="sponsors">
	<div class="container">
		<div class="row">
			<div class="d-flex order-1 order-md-1 col-6 col-md-3">
				<div class="sponsor-logo mx-auto">
					<a href="#">
						<span class="sponsors-img">
							<img src="<?php bloginfo('template_directory') ?>/img/Unimog.png" alt="">
						</span>
						<span class="d-none d-md-block">old vintage</span>
					</a>
				</div>
			</div>
			<div class="d-flex order-3 order-md-2 col-6 col-md-3">
				<div class="sponsor-logo mx-auto">
					<a href="#">
						<span class="sponsors-img">
							<img src="<?php bloginfo('template_directory') ?>/img/Aragon.png" alt="">
						</span>
						<span class="d-none d-md-block">interior vintage</span>
					</a>
				</div>	
			</div>
			<div class="d-flex order-2 order-md-3 col-6 col-md-3">
				<div class="sponsor-logo mx-auto">
					<a href="#">
						<span class="sponsors-img">
							<img class="mb-4" src="<?php bloginfo('template_directory') ?>/img/Sina.png" alt="">
						</span>
						<span class="d-none d-md-block">old vintage</span>
					</a>
				</div>
			</div>
			<div class="d-flex order-4 order-md-4 col-6 col-md-3">
				<div class="sponsor-logo mx-auto">
					<a href="#">
						<span class="sponsors-img">
							<img src="<?php bloginfo('template_directory') ?>/img/Elementary.png" alt="">
						</span>
						<span class="d-none d-md-block">interior vintage</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="Contact-us" id="contact-us">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php echo do_shortcode( '[contact-form-7 id="137" title="footer_form"]' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>