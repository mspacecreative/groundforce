<?php
// LOOP PAGES
function loopPages() {
	ob_start();
		get_template_part('templates/loops/loop-pages');
	return ob_get_clean();
}
add_shortcode( 'loop_pages', 'loopPages' );

// LOOP PROJECTS
function loopProjects() {
	ob_start();
		get_template_part('templates/loops/loop-projects');
	return ob_get_clean();
}
add_shortcode( 'loop_projects', 'loopProjects' );

// LOOP POSTS IN SIDEBAR
function loopNewsSidebar() {
	ob_start();
		get_template_part('templates/loops/loop-posts-sidebar-general');
	return ob_get_clean();
}
add_shortcode( 'recent_posts_sidebar', 'loopNewsSidebar' );