<?php 
get_header();
$pagetitle = get_the_title();
$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredbgimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

echo '
<div class="pageHeader" style="background-image: url(' . $featuredbgimg[0] . ');">
	<div class="innerContainer">
	 	<h1>' . $pagetitle . '</h1>
	 </div>
</div>';