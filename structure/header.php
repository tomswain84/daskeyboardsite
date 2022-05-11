        <!-- Site Header -->
        <section id="navSecondary" class="bg-gray-dark">
            <div class="container-boxed">
                <div class="row text-gray-medium d-flex align-items-center">
                    <div class="col">
                        <nav class="navbar p-0 navbar-expand-sm navbar-dark">

                            <?php include './parts/part-secondary-nav-modal-shipping.php';?>

                            <?php include './parts/part-secondary-nav-modal-account-login.php';?>

                            <div class="dropdown d-block d-sm-none py-3">
                                <a class="navbar-toggler dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="toggler-icon">
                                        <span class="w-75 ms-auto"></span>
                                        <span class="w-100"></span>
                                        <span class="w-50 ms-auto"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start bg-gray-dark border-0 rounded-0" aria-labelledby="navbarDropdown">
                                    <?php include './parts/part-secondary-nav-dropdown-links.php';?>
                                </ul>
                            </div>

                            <div class="collapse navbar-collapse d-none order-sm-2" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto me-3 mt-3 mt-sm-0">
                                    <?php include './parts/part-secondary-nav-dropdown-links.php';?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <header id="navPrimary" class="bg-gray-darker sticky-top">
            <div class="container-boxed">
                <nav class="row">
                    <div class="col-10 col-md-5 py-3 py-sm-4 pe-3">
                        <a href="/sites/daskeyboard/">
                            <img id="siteLogo" src="/sites/daskeyboard/images/logo-das_keyboard-red_white.png" class="img-fluid" alt="Das Keyboard" />
                        </a>
                    </div>
                    <div class="col-2 col-md-1 order-md-3 cart d-flex align-items-center justify-content-end">
                        <a class="cart-btn" data-bs-toggle="offcanvas" href="#shoppingCart" role="button" aria-controls="shoppingCart">
                            <img class="img-fluid" src="/sites/daskeyboard/images/cart.svg" alt="Shopping Cart" />
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pb-3 py-sm-4 d-flex align-items-center" id="navPrimaryDropdown">
                        <ul class="navbar-nav flex-row ms-sm-auto w-100 justify-content-around justify-content-lg-end">
                            <li id="navKeyboards" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="keyboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Keyboards
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="keyboards">
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=backlit">Backlit</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=smartrgb">Smart RGB</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=forpc">For PC</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=formac">For Mac</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=linux">For Linux</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=refurbished">Refurbished</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=bestsellers">Best Sellers</a>
                                    <hr>
                                    <a class="dropdown-item bg-gr view-all py-3 d-flex align-items-center justify-content-between" href="/sites/daskeyboard/products/category-mechanical-keyboards?filter=all">View All<i class="fa-solid fa-plus text-red"></i></a>
                                </div>
                            </li>
                            <li id="navAccessories" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="accessories" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Accessories
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="accessories">
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-accessories#palmRests">Palm Rests</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-accessories#keycapSets">Keycap Sets</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-accessories#parts">Parts</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-accessories#mousePads">Mouse Pads</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/products/category-swag">Swag</a>
                                    <hr>
                                    <a class="dropdown-item view-all py-3 d-flex align-items-center justify-content-between" href="/sites/daskeyboard/products/category-accessories">View All<i class="fa-solid fa-plus text-red"></i></a>
                                </div>
                            </li>
                            <li id="navTechnology" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="technology" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Technology
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="technology">
                                    <a class="dropdown-item" href="/sites/daskeyboard/technology/q-software">Q Software</a>
                                    <a class="dropdown-item" href="/sites/daskeyboard/technology/gamma-zulu-switch">Gamma Zulu Switches</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <hr class="m-0">
            </div>
        </header>

        <section class="offcanvas offcanvas-end bg-gray-dark dark-section" tabindex="-1" id="shoppingCart" aria-labelledby="shoppingCartLabel">
            <div class="offcanvas-header bg-gray-darker text-white border-bottom">
                <h5 class="offcanvas-title" id="shoppingCartLabel">Shopping Cart</h5>
                <a href="#" class="btn btn-outline-primary" data-bs-dismiss="offcanvas">Close<i class="fa-solid fa-xmark ms-2"></i></a>
            </div>
            <div class="offcanvas-body">
                <div>
                    <h3>Your Cart is Empty</h3>
                </div>
            </div>
        </section>

        <section id="navBreadcrumbs" class="bg-gray-darker d-none">
            <div class="container-boxed">
                <div class="row">
                    <div class="col d-md-flex align-items-center justify-content-between">
                        <nav class="breadcrumb m-0 bg-gray-darker px-0 d-flex justify-content-center justify-content-lg-start" aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 bg-gray-darker px-0 d-none">
                                <li id="home" class="breadcrumb-item home pe-1">
                                    <a href="/sites/daskeyboard/" title="Home Page">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li id="parentPage" class="display-none breadcrumb-item pe-1">
                                    <a href="#" title="Back to <?=$parent_page_title?>">
                                        <?=$parent_page_title?>
                                    </a>
                                </li>
                                <li id="currentPage" class="breadcrumb-item active pe-1" aria-current="page"><?=$page_title?></li>
                            </ol>
                        </nav>
                        <div id="headerCTA" class="pb-3 py-md-4">
                            <div class="col d-flex align-items-center justify-content-center justify-content-md-between pe-md-0">
                                <a class="btn btn-primary me-sm-1" href="/sites/daskeyboard/products" title="Shop By Category"><span class="d-none d-sm-inline">Shop </span>By Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>