<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5, 
	'post__not_in' => array($post->ID)
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<ul class="sidebar_post_list">

	<?php while ( $loop->have_posts() ) : $loop->the_post();
	$newsletter = in_category('newsletter'); ?>
	
	<li>
		<!-- post title -->
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<h3 class="darkHeading"><?php the_title(); ?></h3>
		</a>
		<!-- /post title -->
		
		<!-- post details -->
		<p class="date">
			<?php echo the_time( 'F j, Y' ); ?>
		</p>
		<!-- /post details -->
		
		<?php if ( $newsletter ): ?>
		<a class="read_more" href="<?php the_permalink(); ?>"><?php esc_html_e('View newsletter', 'bcfa'); ?></a>
		<?php else : ?>
		<a class="read_more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read post', 'bcfa'); ?></a>
		<?php endif; ?>
		
	</li>
	
	<?php endwhile; ?>
	
</ul>	
<?php endif; wp_reset_postdata(); ?>