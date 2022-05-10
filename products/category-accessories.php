<?php $body_id = "keyboardAccessories";?>
<?php $body_class = "product-listing accessories";?>
<?php $page_title = "Keyboard Accessories";?>
<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php include '../structure/page-title.php';?>
        <main id="hideThis" class="content-wrap">
            <section id="palmRests" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="sidebar-title">Palm Rests</h3>
                        </div>
                    </div>
                    <div class="product-cards row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-4">

                        <div class="col"><!-- Palm Rest One -->
                            <?php include '../products/product-details/accessories/details-das-keyboard-palm-rest-one.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Das Keyboard 5QS & 5Q Replacement Palm Rest -->
                            <?php include '../products/product-details/accessories/details-das-keyboard-5qs-5q-replacement-palm-rest.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                    </div>
                </div>                
            </section>
            <section id="keycapSets" class="bg-white section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="sidebar-title">Keycap Sets</h3>
                        </div>
                    </div>
                    <div class="product-cards row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-4">

                        <div class="col"><!-- Das Keyboard Gray PBT 104 Key Keycap Set -->
                            <?php include '../products/product-details/accessories/details-pbt-keycap-set-104-key-gray.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Blank 108 Key Cherry MX Black Keycap Set for Unlit, RGB and Backlit Keyboards -->
                            <?php include '../products/product-details/accessories/details-das-keyboard-blank-rgb-keycap-set-for-cherry-mx-switches-translucent.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                        <div class="col"><!-- Das Keyboard Modern Font Dvorak RGB Keycap Set for Gamma Zulu Switches (Translucent) -->
                            <?php include '../products/product-details/accessories/details-das-keyboard-modern-font-dvorak-rgb-keycap-set-for-gamma-zulu-switches-translucent.php';?>
                            <!-- Product Card -->
                            <?php include '../parts/part-accessories-card.php';?>
                        </div>

                    </div>
                </div>                
            </section>
        </main>
<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>