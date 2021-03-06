<?php 
get_header(); ?>

	<section id="main-content" class="section">
		<div class="inner_container margin-top-2em padding-bottom-6em">
			<h3><?php esc_html_e( 'Page not found', 'html5blank' ); ?></h3>
			<p>
				The page you requested does not exist. Please use the navigation above or click <a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'here', 'html5blank' ); ?></a> to return to the home page.
			</p>
		</div>
	</section>

<?php get_footer(); ?>
