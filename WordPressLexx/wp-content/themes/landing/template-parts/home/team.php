<section class="Our-team" id="our-team">
	<div class="container">
		<div class="mx-auto">
			<h2><span>Our team</span></h2>
		</div>
	</div>
	<div class="pos-rel autoplay-Lexx">
		<?php $args = array( 'post_type' => 'members' ) ;
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="pos-rel">
					<img src="<?php the_post_thumbnail_url(); ?>">
					<div class=" pos-abs nadpis">
						<?php the_content(); ?>
						<p><?php the_title(); ?></p>
					</div>
				</div>
		<?php endwhile;?>

	</div>
</section>