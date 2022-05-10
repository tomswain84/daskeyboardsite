<?php $body_id = "q-software";?>
<?php $body_class = "single-content q-series";?>
<?php $page_title = "Das Keyboard Q Software";?>
<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php include '../structure/page-title.php';?>

	<section class="bg-gray-dark dark-section section-pad">
		<div class="container-boxed">
		    <div id="appletDashboard" class="row align-items-center justify-content-between">
		    	<div class="col-12 col-xl-8 col-xxl-6">
		    		<h2 class="text-red"><span class="animated-cursor cursor-light">The information you need - on your keyboard</span></h2>
		            <p class="mt-3">Das Keyboard Q Software turns an RGB keyboard into a smart keyboard whose keys change colors based on information trends such as weather, stock quotes, project statuses (e.g. Trello, Basecamp, etc.). Customize your keyboard to meet your needs and stay informed on what is important to you.</p>
		        </div>
		        <div class="col-12 col-xl-4 col-xxl-6">
		        	<img class="img-fluid blend-plus-lighter" src="../images/product-images/product-details/5qs/dk5q_intro.png" alt="Applet Dashboard">
		        </div>
		    </div>
		</div>
	</section>

    <?php include '../parts/part-q_software.php';?> <!-- Q Software Section -->

	<?php include '../parts/part-q_software-video.php';?> <!-- Software Video Section -->

	<?php include '../parts/part-message_preview.php';?> <!-- Message Preview -->

	<?php include '../parts/part-q_applets-preview.php';?> <!-- Applets Preview -->

	<section id="compatibility" class="bg-white"><!-- /compatibility -->
		<div class="container-fluid">
			<div class="row">
				<div class="d-flex align-items-center justify-content-center">
					<div class="row text-center p-3 p-md-0">
						<div class="col-12 pb-5">
							<h2>Operating System Compatibility</h2>
						</div>
						<div class="col">
							<img class="img-fluid" src="../images/compatibility-mac.png" alt="Compatible with Mac OS">
							<h6 class="mt-3">Mac OS</h6>
						</div>
						<div class="col">
							<img class="img-fluid" src="../images/compatibility-windows.png" alt="Compatible with Windows">
							<h6 class="mt-3">Windows</h6>
						</div>
						<div class="col">
							<img class="img-fluid" src="../images/compatibility-linux.png" alt="Compatible with Linux">
							<h6 class="mt-3">Linux</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include '../parts/part-q_applets-carousel.php';?> <!-- Applets Carousel -->

	<section class="bg-white section-pad">
		<div class="container-boxed">
			<div class="row">
				<div class="col-12">
					<div class="video ratio ratio-16x9">
						<iframe src="https://www.youtube.com/embed/Hb4IRDu7G9A" title="YouTube video" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include '../parts/part-q_applets-software_api.php';?> <!-- Software API -->

	<section id="productLineup" class="bg-gray-lighter section-pad"><!-- /productLineup -->
		<div class="container">
			<div class="row">
				<div class="col">
					<figure class="heading m-0">
                        <figcaption>
                            <h2>
                                <small>Das Keybaord</small>
                                <br>Q Series Lineup
                            </h2>
                        </figcaption>
                    </figure>
				</div>
			</div>
			<div class="product-cards row row-cols-1 row-cols-sm-3 row-cols-lg-3 gy-4">
				<?php include '../parts/part-category-keyboards-grid.php';?>
			</div>
		</div>
	</section><!-- /productLineup -->

<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>