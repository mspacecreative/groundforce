<?php get_header();

// VARIABLES
$title = get_the_title();
$headertitle = get_field('header_title');
$intro = get_field('intro_copy');
$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
$content = apply_filters( 'the_content', get_the_content() );
$hidepageheader = get_field('hide_page_header'); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php echo $title ?></h1>
	</div>
		
	<div class="inner_container">
	
	<?php if ( !$hidepageheader ): ?>
		
		<div class="row no_gutters light_grey_bg page_header">
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<?php featuredImage('large'); ?>
			</div>
			
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="col_inner text_align_center">
					
				<?php 
				if ( is_page('services') ) {
					queryServiceIcons('services');
				}
					
				if ( $headertitle && $intro ) {
					echo '<h2>' . $headertitle . '</h2>';
					echo '<p>' . $intro . '</p>';
				} ?>
					
				</div>
			</div>
		</div>
		
	<?php else:
	featuredImage('page-header');
	endif; ?>
		
	</div>

	<?php 
	if ( have_posts() ) {
	 	while ( have_posts() ) { 
		 	the_post();
			the_content();
		}
	} ?>
</div>

<?php get_footer(); ?>
