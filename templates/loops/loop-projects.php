<section class="padding-6em">
	<div class="inner_container ">
		
		<?php
		$args = array(
			'post_type' => 'project',
			'posts_per_page' => -1,
		);
			
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
		
		while ( $loop->have_posts() ) : $loop->the_post();
		
		// VARIABLES
		$featuredimg = get_the_post_thumbnail_url( get_the_ID(), 'image-tile' );
		$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
		$title = get_the_title(get_the_ID());
		$excerpt = get_the_excerpt(get_the_ID()); ?>
		
		<div class="row no_gutters margin_bottom_2em">
			
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<img src="<?php echo $featuredimg ?>" alt="<?php if ( $imgalt ): echo $imgalt; else: echo bloginfo('name'); endif; ?>">
			</div>
			
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
				
				<div class="col_inner grey_bg">
					<?php if ( $title ): ?>
					<h2><?php echo $title ?></h2>
					<?php endif; ?>
						
					<?php if ( $excerpt ): ?>
					<p><?php echo $excerpt ?></p>
					<?php endif; ?>
						
					<a href="<?php the_permalink(); ?>" class="button"><?php echo esc_html_e('view project'); ?></a>
				</div>
				
			</div>
			
		</div>
		
		<?php endwhile;
		
		endif; wp_reset_query(); ?>
		
	</div>
</section>