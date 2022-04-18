<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
<?php
$page_title = "Mechanical Keyboards";
?>
<?php include '../structure/page-title.php';?>
        <section id="filterKeyboards" class="bg-white z-index-3">
            <div class="container-boxed">
                <nav class="navbar navbar-expand-lg">
                    <h4 class="navbar-brand text-red m-0">Filter:</h4>
                    <a class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-ellipsis text-gray-dark"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-all" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=all">All</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-supercharged" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=supercharged">Supercharged</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-minimalist" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=minimalist">Minimalist</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-backlit" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=backlit">Backlit</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-smart-rgb" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=smartrgb">Smart RGB</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-aluminum" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=aluminum">Aluminum</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-pc" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=forpc">For PC</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-mac" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=formac">For Mac</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-linux" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=linux">For Linux</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="dropdown-item tag-ubuntu" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=ubuntu">Ubuntu</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <main id="hideThis" class="content-wrap">
            <section id="categoryBestSellers" class="bg-gray-lighter section-pad">
                <div class="container-boxed">
                    <div class="row">
                        <div class="col-lg-8">
                            <figure class="heading mt-0">
                                <figcaption>
                                    <h1>
                                        <small>Mechanical</small>
                                        <br>Keyboards
                                    </h1>
                                    <div class="filter-text d-flex align-items-center justify-content-between">
                                        <h3 class="display-none my-3 supercharged"><span class="text-red">Filter: </span>Supercharged</h3>
                                        <h3 class="display-none my-3 minimalist"><span class="text-red">Filter: </span>Minimalist</h3>
                                        <h3 class="display-none my-3 backlit"><span class="text-red">Filter: </span>Backlit</h3>
                                        <h3 class="display-none my-3 smart-rgb"><span class="text-red">Filter: </span>Smart RGB</h3>
                                        <h3 class="display-none my-3 aluminum"><span class="text-red">Filter: </span>Aluminum</h3>
                                        <h3 class="display-none my-3 for-pc"><span class="text-red">Filter: </span>For PC</h3>
                                        <h3 class="display-none my-3 for-mac"><span class="text-red">Filter: </span>For Mac</h3>
                                        <h3 class="display-none my-3 linux"><span class="text-red">Filter: </span>For Linux</h3>
                                        <h3 class="display-none my-3 ubuntu"><span class="text-red">Filter: </span>Ubuntu</h3>
                                        <h3 class="display-none my-3 refurbished"><span class="text-red">Filter: </span>Refurbished</h3>
                                        <h3 class="display-none my-3 best-sellers"><span class="text-red">Filter: </span>Best Sellers</h3>
                                        <a class="btn btn-outline-primary text-gray-dark display-none supercharged minimalist backlit smart-rgb aluminum for-pc for-mac linux refurbished best-sellers ubuntu" href="../products/category-mechanical-keyboards?filter=all" title="Clear Filter">Clear Filter<i class="fa-solid fa-times ms-2"></i></a>
                                    </div>
                                </figcaption>
                                <p class="mt-3">Das Keyboard uses premium materials and award-winning technology to deliver an unmatched typing experience. Every new mechanical keyboard comes with free shipping inside the continental US, a 30-day money back guarantee and a 1-year limited warranty.</p>
                            </figure>
                        </div>
                    </div>
                    <?php include '../parts/part-category-keyboards-grid.php';?>
                    </div>
                </div>                
            </section>
        </main>
<?php require '../structure/footer.php';?>
<?php require '../includes/footer-scripts.php';?>