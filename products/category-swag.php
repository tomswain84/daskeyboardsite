<?php $body_id = "keyboardAccessories";?>
<?php $body_class = "product-listing accessories";?>
<?php $page_title = "Das Swag";?>
<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php include '../structure/page-title.php';?>
        <main class="content-wrap">
            <section id="swag" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="sidebar-title">Das Swag</h3>
                        </div>
                    </div>
                    <div class="product-cards row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-4">

                        <div class="col"><!-- Warehouse Clearance - The Click Magnet T-shirt -->
                            <?php include '../products/product-details/swag/details-the-click-magnet-t-shirt.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- The Badass T-shirt -->
                            <?php include '../products/product-details/swag/details-the-bad-ass-t-shirt.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Das Grizzly T-shirt -->
                            <?php include '../products/product-details/swag/details-das-grizzly.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Warehouse Clearance - Das Keyboard Stainless Steel Tumbler -->
                            <?php include '../products/product-details/swag/details-das-keyboard-stainless-steel-tumbler.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Das Keyboard 4-Piece Stone Coaster Set -->
                            <?php include '../products/product-details/swag/details-das-keyboard-4-piece-stone-coaster-set.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                    </div>
                </div>                
            </section>
        </main>
<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>