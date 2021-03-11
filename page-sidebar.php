<?php
/* Template Name: Page with Sidebar */
 get_header(); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php echo the_title(); ?></h1>
	</div>
	
	<div class="innerContainer">
		<div class="row sidebar_layout">
	
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
			echo '
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12 bottomMarginMobile">';
				the_post();
				the_content();
			echo '
			</div>';
			
			echo get_sidebar();
			}
		} ?>
		
		</div>
	</div>

</div>

<?php get_footer(); ?>
