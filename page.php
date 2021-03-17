<?php get_header();

// VARIABLES
$title = get_the_title();
$headertitle = get_field('header_title');
$intro = get_field('intro_copy');
$featuredimg = get_the_post_thumbnail_url( $post->ID, 'large' ); 
$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/front-garden.jpg';
$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
$content = apply_filters( 'the_content', get_the_content() );
$hidepageheader = get_field('hide_page_header'); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php echo $title ?></h1>
	</div>
		
	<?php if ( !$hidepageheader ): ?>
	<div class="inner_container">
		
		<div class="row no_gutters light_grey_bg page_header">
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<?php 
			if ( !empty($featuredimg) ) {
				echo '<img data-object-fit="cover" src="' . $featuredimg . '" class="object-fit" alt="' . $imgalt . '">';
			} else {
				echo '<img data-object-fit="cover" src="' . $defaultimg . '" class="object-fit" alt="' . __('Ground Force Property Services') . '">';
			} ?>
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
		
	</div>
	<?php endif; ?>

	<?php 
	if ( have_posts() ) {
	 	while ( have_posts() ) { 
		 	the_post();
			the_content();
		}
	} ?>
</div>

<?php get_footer(); ?>
