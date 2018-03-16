
<section class="FEATURES" id="features">
	<div class="container">
		<div class="flex-md-row row">
			<?php
				$args = array( 
					'post_type' => 'aditional',
					'order' => 'ASC', // вывести в хронологическом порядке //
					// 'orderby' => 'date', // вывести в хронологическом порядке //
				) ;
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="col-12 col-sm-6 main-inf">
					<h4><?php the_title(); ?> <?php echo get_field('icon'); ?></h4>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
			<?php endwhile;?>
		</div>
	</div>
</section>