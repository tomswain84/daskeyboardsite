<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php
$page_title = "Shop By Category";
?>
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
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel product-carousel best-sellers product-cards owl-theme">
                                <div class="item">
                                    <!-- Product Dtails -->
                                    <?php include '../products/product-details/details-daskeyboard-4-professional.php';?>
                                    <!-- Product Card -->
                                    <?php include '../parts/product-card.php';?>
                                </div>
                                <div class="item">
                                    <!-- Product Dtails -->
                                    <?php include '../products/product-details/details-daskeyboard-5qs.php';?>
                                    <!-- Product Card -->
                                    <?php include '../parts/product-card.php';?>
                                </div>
                                <div class="item">
                                    <!-- Product Dtails -->
                                    <?php include '../products/product-details/details-daskeyboard-4-professional-for-mac.php';?>
                                    <!-- Product Card -->
                                    <?php include '../parts/product-card.php';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>
            <section id="categoryAccessories" class="bg-white section-pad">
                <div class="container-boxed">
                    <div class="row">
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
                    </div>
                    <?php include '../parts/part-category-accessories.php';?>
                </div>
            </section>
            <section id="swag" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>DK</small>
                                        <br>Swag
                                    </h1>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <?php include '../parts/part-category-swag-carousel.php';?>
                    </div>
                </div>                
            </section>
        </main>
<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>