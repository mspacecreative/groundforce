<?php 
function featuredImage($size) {
	$resultingsize = $size;
	$featuredimg = get_the_post_thumbnail_url( get_the_ID(), $resultingsize );
	$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
	$hidefeatureimg = get_field('hide_featured_image_in_header');
	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/front-garden.jpg';
	
	if ( !empty($featuredimg) && !$hidefeatureimg ) {
		echo '<img data-object-fit="cover" src="' . $featuredimg . '" class="object-fit" alt="' . $imgalt . '">';
	} else if ( !$hidefeatureimg ) {
		echo '<img data-object-fit="cover" src="' . $defaultimg . '" class="object-fit" alt="' . __('Ground Force Property Services') . '">';
	}
}