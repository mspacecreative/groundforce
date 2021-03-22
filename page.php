<?php get_header();

// VARIABLES
$title = get_the_title();
$headertitle = get_field('header_title');
$intro = get_field('intro_copy');
$content = apply_filters( 'the_content', get_the_content() );
$hidepageheader = get_field('hide_page_header'); ?>

<div id="main-content">
	<div class="inner_container">
	 	<h1 class="page_title"><?php echo $title ?></h1>
	</div>
		
	<?php if ( !$hidepageheader ): ?>
	<div class="inner_container">
		
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
		
	</div>
	
	<?php elseif ( $hidepageheader ): ?>
	<div class="inner_container">
	
		<?php featuredImage('anamorphic');?>
		
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
