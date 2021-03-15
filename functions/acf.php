<?php

/* REGISTER ACF BLOCKS */
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'three-col-links',
			'title'				=> __('Three columns with links'),
			'description'		=> __('Display titles and links to pages'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'titles', 'page links' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero Block'),
			'description'		=> __('Background carousel with text overlay'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background carousel', 'intro', 'landing page' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'feature',
			'title'				=> __('Feature Section'),
			'description'		=> __('Background image with text and button'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background image', 'content', 'CTA' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register grid block
		acf_register_block(array(
			'name'				=> 'grid',
			'title'				=> __('Content Grid'),
			'description'		=> __('Repeatable columns in variable column widths'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'content', 'grid', 'repeatable' ),
			//'mode'				=> 'edit',
			//'supports'			=> array( 'mode' => false ),
		));
		
		// register download boxes
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to Action Block'),
			'description'		=> __('Displays call to action heading and button'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'megaphone',
			'keywords'			=> array( 'call to action', 'button', 'cta' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register full span img text left block
		acf_register_block(array(
			'name'				=> 'two-third-one-third',
			'title'				=> __('Two Third One Third Block'),
			'description'		=> __('Two third one third block with options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'flex layout', 'content' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register 50/50 colour overlay text block
		acf_register_block(array(
			'name'				=> 'coloured-bg',
			'title'				=> __('Coloured Background Block'),
			'description'		=> __('Coloured background with text and variable columns'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'variable columns', 'layout' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'half-and-half-img-text',
			'title'				=> __('Two Column 50/50'),
			'description'		=> __('Two column row with content and background image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'two columns', 'row' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register cta block
		acf_register_block(array(
			'name'				=> 'variable-columns',
			'title'				=> __('Variable Columns Block'),
			'description'		=> __('Two, three and four column layouts'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid layout', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register events block
		acf_register_block(array(
			'name'				=> 'promo-box',
			'title'				=> __('Promotional Box'),
			'description'		=> __('Boxed row with content and featured image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'image', 'promotional' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register two third one third block
		acf_register_block(array(
			'name'				=> 'two-col-full-span',
			'title'				=> __('Two Column Full Span Block'),
			'description'		=> __('A full width two column block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'full width', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel Block'),
			'description'		=> __('Displays image carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'photo gallery' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'boxed-columns',
			'title'				=> __('Boxed Columns Block'),
			'description'		=> __('Variable columns wrapped in boxes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'boxed items', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register image grid
		acf_register_block(array(
			'name'				=> 'shortcode',
			'title'				=> __('Shortcode Block'),
			'description'		=> __('Display shortcode with page anchor link'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'shortcode', 'page anchor link' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register column block
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Variable Columns Section'),
			'description'		=> __('Displays variable column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'columns', 'variable' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register single testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('Display a testimonial'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-quote',
			'keywords'			=> array( 'testimonial', 'quote' ),
			'mode'				=> 'edit',
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register home page slider block
		acf_register_block(array(
			'name'				=> 'slider',
			'title'				=> __('Partners Slider Section'),
			'description'		=> __('Displays a logos in carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'logos' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content Section'),
			'description'		=> __('Displays a WYSIWYG editor with various design options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register product block
		acf_register_block(array(
			'name'				=> 'archive',
			'title'				=> __('Archive Block'),
			'description'		=> __('Displays selected post type results'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion Block'),
			'description'		=> __('Displays collapsable tabs for titles and content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'tabs', 'accordion' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'before-after',
			'title'				=> __('Before + After Block'),
			'description'		=> __('Displays before and after photos and description'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'columns',
			'keywords'			=> array( 'before and after', 'recent work' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));

	}
}

add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/templates/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/templates/blocks/block-{$slug}.php") );
	}
}

// OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page( 'Theme Settings' );
	
}

// CTA BUTTON FUNCTION
function ctaButton() {
	if ( have_rows('cta') ):
	while ( have_rows('cta') ): the_row();
		
	$pagelink = get_sub_field('page_link');
	$anchorlink = get_sub_field('anchor_link');
	$externallink = get_sub_field('external_link');
	$label = get_sub_field('label'); ?>
		
	<a 
	<?php 
	if ( $anchorlink ): echo 'href="#'; echo $anchorlink; echo '"'; 
	elseif ( $pagelink ): echo 'href="'; echo $pagelink; echo '"'; 
	elseif ( $externallink ): echo 'href="'; echo $externallink; echo '"'; echo 'target="_blank"'; 
	endif; ?> class="button">
	<?php 
	if ( $label ): echo $label; 
	else: echo esc_html_e('Learn more'); 
	endif; ?>
	</a>
		
	<?php 
	endwhile;
	endif;
}