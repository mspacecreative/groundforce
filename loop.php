<?php if (have_posts()): ?>
	
	<div class="row cards" style="margin-top: 3em;">
 	
		<?php while (have_posts()) : the_post();
	 	
	 	$title = get_the_title();
		$date = get_the_date();
		$blurb = get_the_excerpt();
		$newsletter = in_category('newsletter'); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('col col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>>
	
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
	
			<div class="col_inner">
				<h3 style="margin-bottom: 0;"><?php echo $title ?></h3>
				<p class="date"><?php echo $date ?></p>
				<p class="excerpt"><?php echo $blurb ?></p>
				<p class="inline">
					<?php if ( $newsletter ) : ?>
					<a class="read_more" href="<?php echo the_permalink(); ?>"><?php echo __('View newsletter'); ?></a>
					<?php else : ?>
					<a class="read_more" href="<?php echo the_permalink(); ?>"><?php echo __('Read post'); ?></a>
					<?php endif; ?>
				</p>
			</div>
	
		</article>
		<!-- /article -->
	
		<?php endwhile; ?>
	
		<?php else : ?>
	
		<!-- article -->
		<article>
			<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
	</div>

<?php endif; ?>
