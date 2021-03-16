<?php get_header();

// VARIABLES
$title = get_the_title();
$headertitle = get_field('header_title', $post->ID);
$intro = get_field('intro_copy', $post->ID);
$featuredimg = get_the_post_thumbnail_url( $post->ID, 'large' ); 
$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/front-garden.jpg';
$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
$content = apply_filters( 'the_content', get_the_content() ); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php echo $title ?></h1>
	</div>
		
	<div class="inner_container">
		
		<div class="row no_gutters light_grey_bg middle-lg middle-md page_header">
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<?php if ( !empty($featuredimg) ): ?>
				<img data-object-fit="cover" src="<?php echo $featuredimg ?>" class="object-fit" alt="<?php echo $imgalt ?>">
				<?php else: ?>
				<img data-object-fit="cover" src="<?php echo $defaultimg ?>" class="object-fit" alt="<?php echo $imgalt ?>">
				<?php endif; ?>
			</div>
			
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="col_inner text_align_center">
					
					<?php if ( is_archive('services') ):
					queryServiceIcons( 'services' );
					endif; ?>
					
					<?php if ( $headertitle && $intro ): ?>
					<h2><?php echo $headertitle ?></h2>
					
					<p><?php echo $intro ?></p>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		
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
