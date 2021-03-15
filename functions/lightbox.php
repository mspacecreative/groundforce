<?php 
function lightBox() {
	wp_enqueue_script( 'lightbox' );
	wp_enqueue_style( 'lightbox-styles' );
	
	$images = get_field('gallery');
	
	if ( $images ) {
		
		echo '
		<div class="inner_container padding-6em">
			<div class="row narrow_gutters">';
			
			foreach( $images as $image ) {
			
				echo '
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<a data-fancybox="gallery" href="' . esc_url($image['url']) . '">
						<img src="' . esc_url($image['sizes']['med-square']) . '" alt="' . esc_attr($image['alt']) . '">
					</a>
				</div>';
			}
			
			echo '
			</div>
		</div>';
	}
}