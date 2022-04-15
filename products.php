<?php require 'includes/head.php';?>
<?php require 'structure/header.php';?>
<?php include 'structure/page-title.php';?>
        <main class="content-wrap">
            <section id="categoryKeyboards" class="bg-white section-pad mt-3">
            	<div class="container-boxed">
                    <div class="row">
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
                    </div>
                    <?php include 'parts/category-keyboards.php';?>
            	</div>
            </section>
            <?php include 'parts/category-best-sellers.php';?>
            <section id="categoryAccessories" class="bg-white section-pad mt-3">
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
                    <?php include 'parts/category-switches.php';?>
                </div>
            </section>
        </main>
<?php require 'structure/footer.php';?>
<?php require 'includes/footer-scripts.php';?>