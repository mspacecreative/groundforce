<?php
// LOOP PAGES
function loopPages() {
	ob_start();
		get_template_part('templates/loops/loop-pages');
	return ob_get_clean();
}
add_shortcode( 'loop_pages', 'loopPages' );

// LOOP NEWS
function loopNews() {
	ob_start();
		get_template_part('templates/loops/loop-news');
	return ob_get_clean();
}
add_shortcode( 'news_feed', 'loopNews' );

// LOOP POSTS IN SIDEBAR
function loopNewsSidebar() {
	ob_start();
		get_template_part('templates/loops/loop-posts-sidebar-general');
	return ob_get_clean();
}
add_shortcode( 'recent_posts_sidebar', 'loopNewsSidebar' );