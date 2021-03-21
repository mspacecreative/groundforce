<?php 
function featuredImage() {
	$hidepageheader = get_field('hide_page_header');
	$featuredimg = get_the_post_thumbnail_url( $post->ID, 'large' ); 
	$featuredimgfull = get_the_post_thumbnail_url( $post->ID, 'full' );
	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/front-garden.jpg';
	
	if ( !empty($featuredimg) && $hidepageheader ) {
		echo '<img data-object-fit="cover" src="' . $featuredimgfull . '" class="object-fit" alt="' . $imgalt . '">';
	} elseif ( !empty($featuredimg) ) {
		echo '<img data-object-fit="cover" src="' . $featuredimg . '" class="object-fit" alt="' . $imgalt . '">';
	} else {
		echo '<img data-object-fit="cover" src="' . $defaultimg . '" class="object-fit" alt="' . __('Ground Force Property Services') . '">';
	}
}