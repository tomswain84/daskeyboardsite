<?php $body_id = "x50q";?>
<?php $body_class = "product-page commerce keyboards q-series";?>
<?php require '../../includes/head.php';?>
<?php require '../../structure/header.php';?>
<!-- Product Dtails -->
<?php include '../../products/product-details/details-daskeyboard-x50q.php';?>
<?php
$page_title = "Das Keyboard X50Q";
?>
<?php include '../../structure/page-title.php';?>
	<main class="content-wrap">
	        <section class="bg-white section-pad">
	        	<div class="container-boxed">
	        		<div class="row">
	        			<div id="contentContainer" class="col-md-9">
	        				<div class="row mb-5">
	        					<div class="col">
			        				<a class="btn btn-outline-primary text-gray-dark ms-2" href="<?=$product_url?>" title="Back to Product Details"><i class="fa-solid fa-backward-step me-2"></i>Back to Product Details</a>
			        			</div>
			        		</div>
	        				<img class="img-fluid" src="<?=$commerce_image_url?>" alt="<?=$product_title?>" />
	        			</div>
	        			<div id="sidebar" class="col-md-3">
	        				<div class="sidebar-content">
		        				<h2>Das Keyboard <?=$product_title?></h2>
		        				<span class="star-rating text-red small">
		        					<i class="fa-solid fa-star small"></i>
		        					<i class="fa-solid fa-star small"></i>
		        					<i class="fa-solid fa-star small"></i>
		        					<i class="fa-solid fa-star small"></i>
		        					<i class="fa-solid fa-star small"></i>
		        					<span class="text-gray-dark ms-2 small">101 Reviews</span>
		        				</span>

		        				<div class="product-price">
		        					<h3>Starting At: <span class="text-red">$<?=$product_price?></span>
		        				</div>

		        				<img class="my-4" src="../../images/temp-klarma.png" alt="Temp Klarma" />

		        				<div class="option-switches mb-5">
			        				<h3 class="sidebar-title">Select Switch Type</h3>
			        				<div class="form-check my-3">
			        					<input class="form-check-input visually-hidden" type="radio" name="flexRadioDefault" id="swtichClicky" checked="checked">
			        					<label class="switch-select form-check-label d-flex align-items-center" for="swtichClicky">
			        						<img class="select-image me-3" src="../../images/commerce_options-switch_type-clicky.png" alt="Clicky" />
			        						<span class="label-wrap"><span class="oswald">Clicky</span> <small>- Cherry MX Blue</small></span>
			        					</label>
			        				</div>
			        				<div class="form-check my-3">
			        					<input class="form-check-input visually-hidden" type="radio" name="flexRadioDefault" id="switchSoftTactile">
			        					<label class="switch-select form-check-label d-flex align-items-center" for="switchSoftTactile">
			        						<img class="select-image me-3" src="../../images/commerce_options-switch_type-soft_tactile.png" alt="Soft Tactile" />
			        						<span class="label-wrap"><span class="oswald">Soft Tactile</span> <small>- Cherry MX Brown</small></span>
			        					</label>
			        				</div>
			        				<div class="form-check my-3">
			        					<input class="form-check-input visually-hidden" type="radio" name="flexRadioDefault" id="selectSmoothLinear">
			        					<label class="switch-select form-check-label d-flex align-items-center" for="selectSmoothLinear">
			        						<img class="select-image me-3" src="../../images/commerce_options-switch_type-smooth_linear.png" alt="Smooth Linear" />
			        						<span class="label-wrap"><span class="oswald">Smooth Linear</span> <small>- Cherry MX Red</small></span>
			        					</label>
			        				</div>
			        			</div>

			        			<div class="cartCTA">
			        				<h3 class="sidebar-title">Order Total: <span class="text-red">(order total goes here)</span></h3>
			        			</div>

		        			</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>
	</main>
<?php require '../../structure/footer.php';?>
<?php require '../../includes/footer-scripts.php';?>