<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php
$page_title = "Mechanical Keyboards";
?>
<?php include '../structure/page-title.php';?>
        <section id="filterProducts" class="bg-white">
            <div class="container-boxed">
                <div class="row">
                    <!-- Control buttons -->
                    <div id="myBtnContainer" class="col">
                        <button class="btn active" onclick="filterSelection('all')"> All</button>
                        <button class="btn" onclick="filterSelection('supercharged')"> Supercharged</button>
                        <button class="btn" onclick="filterSelection('minimalist')"> Minimalist</button>
                        <button class="btn" onclick="filterSelection('backlit')"> Backlit</button>
                        <button class="btn" onclick="filterSelection('smart')"> Smart</button>
                        <button class="btn" onclick="filterSelection('rgb')"> RGB</button>
                        <button class="btn" onclick="filterSelection('aluminum')"> Aluminum</button>
                        <button class="btn" onclick="filterSelection('mac')"> Mac</button>
                        <button class="btn" onclick="filterSelection('linux')"> Linux</button>
                        <button class="btn" onclick="filterSelection('ubuntu')"> Ubuntu</button>
                    </div>
                </div>
            </div>
        </section>
        <main id="hideThis" class="content-wrap">
            <section id="categoryBestSellers" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Mechanical</small>
                                        <br>Keyboards
                                    </h1>
                                    <h3 class="display-none smart-rgb"><span class="text-red">Viewing: </span>Smart RGB</h3>
                                    <h3 class="display-none for-pc"><span class="text-red">Viewing: </span>For PC</h3>
                                    <h3 class="display-none for-mac"><span class="text-red">Viewing: </span>For Mac</h3>
                                    <h3 class="display-none linux"><span class="text-red">Viewing: </span>For Linux</h3>
                                    <h3 class="display-none backlit"><span class="text-red">Viewing: </span>Backlit</h3>
                                    <h3 class="display-none refurbished"><span class="text-red">Viewing: </span>Refurbished</h3>
                                    <h3 class="display-none best-sellers"><span class="text-red">Viewing: </span>Best Sellers</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <?php include '../parts/category-keyboards-grid.php';?>
                    </div>
                </div>                
            </section>
        </main>
<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>