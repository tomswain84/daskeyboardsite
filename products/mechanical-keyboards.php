<?php require '../includes/head.php';?>
<?php require '../structure/header.php';?>
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