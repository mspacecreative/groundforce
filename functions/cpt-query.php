<?php 
function queryServiceIcons( $posttype ) {
	
	$result = $posttype;
	
	$args = array(
		'post_type' => $result,
		'posts_per_page' => -1,
	);
		
	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) :
	
	echo '
	<ul class="service_icons">';
		while ( $loop->have_posts() ) : $loop->the_post();
		$icon = get_field('icon');
		
		echo '
		<li><img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '">';
		endwhile;
		
	echo '
	</ul>';
	
	endif; wp_reset_query();
}