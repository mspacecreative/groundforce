		<?php get_template_part('templates/request-quote'); ?>
		</div>
		<!-- /wrapper -->
		
		<!-- footer -->
		<footer class="padding-6em light">
			<div class="inner_container">
				<div class="row">
					<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h4>we're here to help</h4>
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<ul class="footer_links">
									<li><a href="<?php echo home_url('careers'); ?>">careers</a></li>
									<li><a href="<?php echo home_url('recent-work'); ?>">recent work</a></li>
									<li><a href="#quote">request a quote</a></li>
								</ul>
							</div>
							<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<ul class="footer_links">
									<li><a href="<?php echo home_url('services#landscaping'); ?>">landscaping</a></li>
									<li><a href="<?php echo home_url('services#outdoor-spaces'); ?>">outdoor spaces</a></li>
									<li><a href="<?php echo home_url('services#poolscapes'); ?>">poolscapes</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<h4>reach out</h4>
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<ul class="footer_links">
									<li>671 Old Sambro Road</li>
									<li>Harrietsfield, NS B3V 1A2</li>
									<li>(902) 209-2748</li>
								</ul>
							</div>
							<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
								<ul class="footer_links social_media">
									<li><a href="https://www.facebook.com/groundforceservices/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="http://instagram.com/groundforceproperty" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<li><a href="mailto:admin@groundforceservices.ca"><i class="fa fa-envelope"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<section class="credits light">
			<div class="inner_container">
				<div class="padding-1em">
					<p>&copy; 2021 Ground Force Property Services. All rights reserved.</p>
				</div>
			</div>
		</section>
			
		<?php wp_footer(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36691022-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-36691022-5');
		</script>

	</body>
</html>
