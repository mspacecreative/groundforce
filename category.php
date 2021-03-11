<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section id="main-content">
			
			<div class="innerContainer">
				
				<h1 class="page_title"><?php esc_html_e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>
			
				<?php get_template_part( 'loop' ); ?>
				<?php get_template_part( 'pagination' ); ?>
				
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
