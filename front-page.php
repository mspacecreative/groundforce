<?php 
get_header(); ?>

<div class="splash header-transition">
			<div class="header_backdrop"></div>
			<div class="static_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/GFWebsitePhoto1.jpg);"></div>
			<div class="blur_overlay"></div>
			<div class="carousel">
				<div class="carousel_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/GFWebsitePhoto1.jpg);"></div>
				<div class="carousel_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/GFWebsitePhoto2-a.jpg);"></div>
				<div class="carousel_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/GFWebsitePhoto3.jpg);"></div>
			</div>
			<!--<div class="inner_container">
				<h1 class="splash_title original" data-aos="fade-up" data-aos-duration="1500">imagine your outdoors</h1>
			</div>-->
			<div class="inner_container fixed-tagline" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true" data-aos-anchor-placement="top-center">
				<h1 class="splash_title ghost">imagine your outdoors</h1>
			</div>
			<div class="arrow_down">
				<a href="#intro"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/hero-arrow-down.svg"></a>
			</div>
		</div>
		
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		} ?>
		
		<!-- newsletter
		<section class="cta padding-6em">
			<div class="inner_container">
				<div class="row bottom-lg bottom-md">
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 mobile_margin_bottom_2em">
						<h2 class="no-margin">stay up to date and subscribe to our newsletter</h2>
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-end">
						<div class="row subscribe_form no_gutters">
							<div class="col col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<input type="email" name="" value="" placeholder="email address" />
							</div>
							<div class="col col-lg-3 col-md-3 col-sm-3 col-xs-12 justify-content-xs-end">
								<input type="submit" name="" value="Subscribe" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		 / newsletter -->
		
		<section class="instagram-gallery">
			<?php echo do_shortcode('[insta-gallery id="1"]'); ?>
			<div class="inner_container">
				<div class="row view-all-instagram">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end margin-top-1em">
						<a href="http://instagram.com/groundforceproperty" target="_blank" class="content_link align-self-center">more on instagram</a>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>