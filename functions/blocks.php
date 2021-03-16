<?php

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );
 
function misha_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/shortcode',
		'core/spacer',
		'core/html',
		'core/freeform',
		'acf/hero',
		'acf/content',
		'acf/read-more',
		'acf/half-and-half-img-text',
		'acf/variable-columns',
		'acf/carousel',
		'acf/grid',
		'acf/testimonial',
		'acf/cta',
		'acf/before-after',
		'acf/image-text',
		'acf/cta-button',
	);
 
}

/*add_action('after_setup_theme', 'removeCorePatterns');

function removeCorePatterns() {
        remove_theme_support('core-block-patterns');

	unregister_block_pattern_category('buttons');
	unregister_block_pattern_category('columns');
	unregister_block_pattern_category('gallery');
	unregister_block_pattern_category('header');
	unregister_block_pattern_category('text');
	unregister_block_pattern_category('uncategorized');
}
*/