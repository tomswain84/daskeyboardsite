<?php $body_id = "products";?>
<?php $body_class = "product-listing";?>
<?php $page_title = "Shop By Category";?>
<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php include '../structure/page-title.php';?>
        <main class="content-wrap">
            <section id="categoryKeyboards" class="bg-white section-pad">
                <div class="container-boxed">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Mechanical</small>
                                        <br>Keyboards
                                    </h1>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col d-flex">
                            <a class="btn btn-outline-primary text-gray-dark ms-auto" href="../products/category-mechanical-keyboards?filter=all" title="Shop All">Shop All<i class="fa-solid fa-plus ms-2"></i></a>
                        </div>
                    </div>
                    <?php include '../parts/part-category-keyboards-subcats.php';?>
                </div>
            </section>
            <section id="categoryBestSellers" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Best</small>
                                        <br>Sellers
                                    </h1>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div id="BestSellers" class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-4 best-sellers product-cards">
                        <div class="col supercharged aluminum for-pc">
                            <!-- Product Dtails -->
                            <?php include '../products/product-details/details-daskeyboard-4-professional.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-keyboard-card.php';?>
                        </div>
                        <div class="col supercharged backlit smart-rgb aluminum for-pc ubuntu">
                            <!-- Product Dtails -->
                            <?php include '../products/product-details/details-daskeyboard-5qs.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-keyboard-card.php';?>
                        </div>
                        <div class="col for-pc supercharged aluminum linux">
                            <!-- Product Dtails -->
                            <?php include '../products/product-details/details-daskeyboard-4-professional-for-mac.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-keyboard-card.php';?>
                        </div>
                    </div>
                </div>                
            </section>
            <section id="categoryAccessories" class="bg-white section-pad">
                <div class="container-boxed">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Keyboard</small>
                                        <br>Accessories
                                    </h1>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col d-flex">
                            <a class="btn btn-outline-primary text-gray-dark ms-auto" href="../products/category-accessories" title="Shop All">Shop All<i class="fa-solid fa-plus ms-2"></i></a>
                        </div>
                    </div>
                    <?php include '../parts/part-category-accessories-subcats.php';?>
                </div>
            </section>
            <section id="swag" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Das</small>
                                        <br>Swag
                                    </h1>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-4 product-cards">

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