<?php get_header(); ?>

<div id="main-content">
	<div class="inner_container">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'groundforce' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</div>
</div>

<?php get_footer(); ?>
