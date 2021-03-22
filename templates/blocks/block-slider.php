<?php 
$heading = get_field('heading'); ?>

<section class="padding-6em recent-work no-horizontal-overflow">
	<div class="inner_container ">
		
		<?php if ( $heading ): ?>
		<h2 class="line-rule-right"><span><?php echo $heading ?></span></h2>
		<?php endif;
		
		$args = array(
			'post_type' => 'project',
			'posts_per_page' => -11,
		);
			
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>
		
		<div class="work-carousel margin-top-2em">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();
			
			// VARIABLES
			$featuredimg = get_the_post_thumbnail_url( get_the_ID(), 'image-tile' );
			$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
			$title = get_the_title(get_the_ID());
			$excerpt = get_the_excerpt(get_the_ID()); ?>
			
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $featuredimg ?>" alt="<?php if ( $imgalt ): echo $imgalt; else: echo bloginfo('name'); endif; ?>">
					
					<?php if ( $title ): ?>
					<h4><?php echo $title ?></h4>
					<?php endif; ?>
					
					<?php if ( $excerpt ): ?>
					<p><?php echo $excerpt ?></p>
					<?php endif; ?>
					
				</a>
			</div>
			
			<?php endwhile; ?>
		</div>
		
		<?php endif; wp_reset_query(); ?>
		
		<div class="row view-all-work">
			<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end margin-top-2em middle-lg middle-md">
				<div class="append-arrows"></div>
				<a href="<?php echo home_url('projects'); ?>" class="button align-self-center"><?php echo esc_html_e('view all'); ?></a>
			</div>
		</div>
	</div>
</section>