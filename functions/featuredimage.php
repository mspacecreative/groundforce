<?php 
function featuredImage($size) {
	$result = $size;
	$featuredimg = get_the_post_thumbnail_url( $post->ID, $result );
	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/front-garden.jpg';
	
	if ( !empty($featuredimg) ) {
		echo '<img data-object-fit="cover" src="' . $featuredimg . '" class="object-fit" alt="' . $imgalt . '">';
	} else {
		echo '<img data-object-fit="cover" src="' . $defaultimg . '" class="object-fit" alt="' . __('Ground Force Property Services') . '">';
	}
}