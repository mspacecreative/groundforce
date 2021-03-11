<?php 
get_header('home'); ?>

<div class="splash header-transition">
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
		
		<section id="intro" class="intro padding-6em header-transition">
			<!--<div class="inner_container fixed-tagline">
				<h1 class="splash_title ghost" data-aos="fade-up" data-aos-duration="1500">imagine your outdoors</h1>
			</div>-->
			<div class="inner_container intro_container" data-aos="fade-up" data-aos-duration="1500">
				<h2 class="text_align_center">services</h2>
				<div class="row row_with_icons col_borders">
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="col_icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/landscaping.svg">
						</div>
						<div class="col_inner boxed">
							<h3>landscaping</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						</div>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1500">
						<div class="col_icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/lounger.svg">
						</div>
						<div class="col_inner boxed">
							<h3>outdoor spaces</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						</div>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1500">
						<div class="col_icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/snowflake.svg">
						</div>
						<div class="col_inner boxed">
							<h3>snow + ice control</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						</div>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1500">
						<div class="col_icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/poolscape.svg">
						</div>
						<div class="col_inner boxed">
							<h3>poolscapes</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="cta centered">
			<div class="inner_container padding-6em">
				<h2>ready to get started? let’s do this together.</h2>
				<a href="#quote" class="button">request a quote</a>
			</div>
		</section>
		
		<!-- before + afters -->
		<section id="transform-your-space" class="padding-6em before_and_after">
			<div class="inner_container">
				<h2 class="text_align_center">transform your space</h2>
				<div class="row margin-top-2em text_align_center no_gutters" data-aos="fade-up" data-aos-duration="1500">
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img data-object-fit="cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/the_curve_before.jpg" class="object-fit">
						<p class="before">before</p>
					</div>
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="col_inner grey_bg col-align-items-center padding-3em">
							<h3>lorem ipsum dolor sit amet, consectetur adipiscing elio.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
							<a href="#quote" class="button align-self-center">more before + afters</a>
						</div>
					</div>
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img data-object-fit="cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/the_curve_after.jpg" class="object-fit">
						<p class="after">after</p>
					</div>
				</div>
			</div>
		</section>
		<!-- / before + afters -->
		
		<section class="testimonial padding-6em light">
			<div class="inner_container">
				<div class="row wide_gutters middle-lg middle-md" data-aos="fade-up" data-aos-duration="1500">
					<div class="col col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<h3>Bob MacKinnon, Home Owner</h3>
					</div>
					<div class="col col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<p>Ground Force did an amazing job transferring our backyard into a beautiful, functional living space. Hot tub, kitchen, dining room and patio lounge.  We got more use out of our backyard since the job was done last summer than the previous 12 years combined. We look forward to another spring, summer and fall of outdoor entertaining!</p>
					</div>
					<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end margin-top-2em">
						<a href="#quote" class="button align-self-center">view all</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="padding-6em recent-work no-horizontal-overflow">
			<div class="inner_container ">
				<h2 class="line-rule-right">
					<span>recent work</span>
				</h2>
				<div class="work-carousel margin-top-2em">
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/driveway.jpg">
						<h4>landscaping</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/front-garden.jpg">
						<h4>outdoor spaces</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/snow-removal.jpg">
						<h4>snow + ice control</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/driveway.jpg">
						<h4>landscaping</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/driveway.jpg">
						<h4>landscaping</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/driveway.jpg">
						<h4>outdoor spaces</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
					<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/driveway.jpg">
						<h4>outdoor spaces</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div>
				</div>
				<div class="row view-all-work">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end margin-top-2em middle-lg middle-md">
						<div class="append-arrows"></div>
						<a href="#" class="button align-self-center">view all</a>
					</div>
				</div>
			</div>
		</section>
		
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
			<div class="container">
				<div class="row narrow_gutters">
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-1.jpg">
					</div>
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-2.jpg">
					</div>
					<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-3.jpg">
					</div>
				</div>
			</div>
			<div class="inner_container">
				<div class="row view-all-instagram">
					<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end margin-top-2em">
						<a href="http://instagram.com/groundforceproperty" target="_blank" class="content_link align-self-center">more on instagram</a>
					</div>
				</div>
			</div>
		</section>
		
		<section id="quote" class="quote padding-6em">
			<div class="inner_container max_width_1000">
				<div class="row">
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 mobile_margin_bottom_2em">
						<h2 class="no-margin">let’s discuss your next project</h2>
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-end">
						<div class="row quote_form">
							<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="" value="" placeholder="first name" />
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="" value="" placeholder="last name" />
							</div>
							<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="email" name="" value="" placeholder="email address" />
							</div>
							<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<textarea placeholder="message"></textarea>
							</div>
							<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-end">
								<input type="submit" name="" value="submit" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>