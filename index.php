<?php $body_id = "home";?>
<?php $body_class = "single-content";?>
<?php require 'includes/head.php';?>
<?php require 'structure/header.php';?>
<?php $page_title = "";?>
<?php include 'structure/page-title.php';?>
		<!-- Hero Section -->
		<section id="hero" class="bg-gray-darker text-white pb-sm-5 d-flex flex-column pt-5">
			<div class="container-boxed">
				<div class="row">
					<div class="col-md-9 col-xl-6">
						<figure class="heading mt-lg-0">
							<figcaption class="text-white">
								<h1>
									<small>The Ultimate</small>
									<br>Mechanical Keyboard
								</h1>
							</figcaption>
							<p class="mt-3 mt-xl-4">Das Keyboard offers badass geeks the ultimate experience with high-performance mechanical keyboards with superior durability, construction, and design.</p>
						</figure>
					</div>
				</div>
			</div>
			<div class="container-fluid home-hero-image p-0">
				<div class="row g-0">
					<img class="intro img-fluid" src="images/img-hero-home.png" />
				</div>
			</div>
		</section>

		<!-- Keyboard Categories -->
		<section id="categoryKeyboards" class="bg-white section-pad mt-5 mt-xl-0">
			<div class="container-boxed mt-xxl-5 pt-xxl-5">
				<div class="row mt-xxl-5">
					<div class="col-12">
						<figure class="heading text-center mb-0">
							<figcaption>
								<h1>
									<small>A Mechanical Keyboard</small>
									<br>For Every Badass.
								</h1>
							</figcaption>
						</figure>
					</div>
                    <div class="col-12 d-flex py-4">
                        <a class="btn btn-outline-primary text-gray-dark mx-auto" href="products/category-mechanical-keyboards?filter=all" title="Shop All Keyboards">Shop All Keyboards<i class="fa-solid fa-plus ms-2"></i></a>
                    </div>
				</div>
				<?php include './parts/part-category-keyboards-subcats.php';?>
			</div>			
		</section>

		<?php include 'parts/part-q_software-video.php';?> <!-- Software Video Section -->

		<!-- Values Section -->
		<section id="values" class="bg-gray-darker dark-section pt-5">
			<div class="container-boxed pt-md-5 mt-xl-5">
				<div class="row mt-xxl-5">
					<div class="col-md-6 order-md-2 d-md-flex align-items-end align-items-xxl-start">
						<figure class="heading text-center mt-5 mt-md-3 pt-md-5">
							<figcaption>
								<h1>Das Keyboard <span class="text-red">Values</span></h1>
							</figcaption>
							<p>We are a badass company that makes badass products for badass customers. We are quality obsessed and develop all our products with premium materials.</p>
							<a class="btn btn-primary" href="/sites/daskeyboard/values.php" title="Read More">Read More<i class="fa-solid fa-caret-right ms-2"></i></a>
						</figure>
					</div>
					<div class="col-md-6 order-md-1 d-md-flex align-items-center position-relative">
						<img class="full-image position-absolute d-none d-xxl-inline" src="images/img-home-values-full.png" alt="Das Keybaord Values" />
						<img class="half-image img-fluid" src="images/img-home-values.png" alt="Das Keybaord Values" />
					</div>
				</div>
			</div>
		</section>

		<!-- Switches Section -->
		<section id="switches" class="pt-5 mt-5 bg-white">
			<div class="container-boxed pb-5 pt-xl-5 mt-sm-5">
				<div class="row mb-md-4">
					<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
						<figure class="heading text-center">
							<figcaption>
								<h1>Long lasting, <span class="text-red">durable switches</span>. </h1>
							</figcaption>
							<p>All of our keyboards are designed with high-performance, gold-plated mechanical key switches. Learn more about the different switches Das Keyboard offers.</p>
							<a class="btn btn-outline-primary text-gray-dark ms-2" href="/sites/daskeyboard/compare-switches.php" title="Learn More">Learn More<i class="fa-solid fa-caret-right ms-2"></i></a>
						</figure>
					</div>
				</div>
			</div>
			<div class="container-fluid bg-gray-darker">
				<div class="row">
					<div class="col-sm-8 offset-sm-2">
						<img class="d-block mx-auto mb-4 mb-md-5 mw-100" src="images/img-home-switches.png" alt="Long lasting, durable switches." />
					</div>
				</div>
			</div>
		</section>

		<!-- Font Section -->
		<section id="font" class="section-pad bg-gray-lighter">
			<div class="container-boxed">
				<div class="row">
					<div class="col-xl-10 offset-xl-1 d-md-flex align-items-center justify-content-between">
						<img class="img-fluid d-block mx-auto mb-4 mb-md-0 pe-md-5" src="images/img_blueprint-D.png" alt="Blueprint Letter D" />
						<figure class="heading text-center text-md-start ps-lg-5">
							<figcaption>
								<h1>A brand new <span class="text-red">keyboard font</span>.</h1>
							</figcaption>
							<p>Das Keyboard???s key cap font has been specially designed to provide ease of reading and harmonious view of the keyboard key caps. Das Keyboard???s font looks modern while keeping some of its lines from older, well established fonts. The overall result is sleek and easily readable while not drawing unnecessary attention.</p>
						</figure>
					</div>
				</div>
			</div>
		</section>

		<!-- Reviews Section -->
		<section id="reviews" class="section-pad bg-white">
			<div class="container-boxed">
				<div class="row">
					<div class="col">
						<figure class="heading text-center">
							<figcaption>
								<h1>Real Reviews <span class="text-red d-block d-sm-inline">from real people</span></h1>
							</figcaption>
							<p>Our customers love Das Keyboard. But don't take our word for it...</p>
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<!-- Reviews Tabs -->
						<ul class="nav nav-tabs d-flex align-items-center justify-content-between oswald mb-5">
							<li class="nav-item">
								<a href="#editorialReviews" class="nav-link active" data-bs-toggle="tab"></i>Editorial Reviews</a>
							</li>
							<li class="nav-item">
								<a href="#customerReviews" class="nav-link" data-bs-toggle="tab">Customer Reviews</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="editorialReviews">
								<div class="owl-carousel reviews-carousel owl-theme">
									<div class="card">
										<div class="card-header">
											<p class="review-copy">It's almost like typing on a cloud compared to Apple's Magic Keyboard.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-business_insider.png" />
											<figcaption>
												<h5 class="card-title review-name">Antonio Villas-Boas</h5>
												<p class="review-company">Business Insider</p>
												<p class="review-focus">On the Das Keyboard 4 Professional for Mac</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">This highly durable, top-tier mechanical keyboard will satisfy all your click-clacky needs while still offering excellent performance and long-lasting, coat-protected keys.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-digital_trends.png" />
											<figcaption>
												<h5 class="card-title review-name">Tyler Lacoma</h5>
												<p class="review-company">Digital Trends</p>
												<p class="review-focus">On the Das Keyboard 4 for Mac</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">A formidable and well-designed gaming keyboard with all the usual bells and whistles.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-wired_magazine.png" />
											<figcaption>
												<h5 class="card-title review-name">Jess Grey</h5>
												<p class="review-company">Wired Magazine</p>
												<p class="review-focus">On the Das Keyboard 5Q</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">Some keyboards just ooze class.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-tech_radar.png" />
											<figcaption>
												<h5 class="card-title review-name">Bill Thomas and Kevin Lee</h5>
												<p class="review-company">Tech Radar</p>
												<p class="review-focus">On the Das Keyboard Prime 13</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">You???ll probably never enjoy typing more than you will on this keyboard.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-bgr_media.png" />
											<figcaption>
												<h5 class="card-title review-name">Tim Kohut</h5>
												<p class="review-company">BGR Media</p>
												<p class="review-focus">On the Das Keyboard 4 Professional MX Brown</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="customerReviews">
								<div class="owl-carousel reviews-carousel owl-theme">
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
									<div class="card">
										<div class="card-header">
											<p class="review-copy">The tactile responsiveness when I push a key is so satisfying. It???s silly but it also makes me feel productive, each keystroke an audio reminder that I???m one step closer to my goal.</p>
										</div>
										<figure class="card-body">
											<img class="review-icon" src="images/reviews-icon-ny_times.png" />
											<figcaption>
												<h5 class="card-title review-name">Daisuke Wakabayashi</h5>
												<p class="review-company">NY Times</p>
												<p class="review-focus">On the Das Keyboard Model S</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php require './structure/footer.php';?>
<?php require './includes/footer-scripts.php';?>