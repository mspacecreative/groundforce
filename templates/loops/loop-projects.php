<section>
	<div class="inner_container ">
		
		<?php
		$args = array(
			'post_type' => 'project',
			'posts_per_page' => -1,
		);
			
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>
		
		<div class="row">
		
		<?php while ( $loop->have_posts() ) : $loop->the_post();
		
		// VARIABLES
		$featuredimg = get_the_post_thumbnail_url( get_the_ID(), 'image-tile' );
		$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
		$title = get_the_title(get_the_ID());
		$excerpt = get_the_excerpt(get_the_ID()); ?>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			
			<div class="row no_gutters bottom_col_spacing">
					
				<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img data-object-fit="cover" src="<?php echo $featuredimg ?>" alt="<?php if ( $imgalt ): echo $imgalt; else: echo bloginfo('name'); endif; ?>" class="object-fit">
				</div>
					
				<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
						
					<div class="col_inner grey_bg row no_gutters center-lg center-md center-sm center-xs middle-lg middle-md middle-sm middle-xs flex-direction-column-center">
						<?php if ( $title ): ?>
						<h2 class="small-h2"><?php echo $title ?></h2>
						<?php endif; ?>
								
						<?php if ( $excerpt ): ?>
						<p><?php echo $excerpt ?></p>
						<?php endif; ?>
								
						<a href="<?php the_permalink(); ?>" class="button"><?php echo esc_html_e('view project'); ?></a>
					</div>
						
				</div>
					
			</div>
				
		</div>
		
		<?php endwhile; ?>
		
		</div>
		
		<?php endif; wp_reset_query(); ?>
		
	</div>
</section>