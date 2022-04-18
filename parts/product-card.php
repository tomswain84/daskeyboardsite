                                <figure class="card category-keyboards">
                                    <img src="<?=$product_image_url?>" class="img-fluid card-img-top" alt="<?=$product_title?>" />
                                    <figure class="heading text-center">
                                        <figcaption>
                                            <h2>
                                                <small>Das Keyboard</small>
                                                <br><?=$product_title?>
                                            </h2>
                                        </figcaption>
                                    </figure>
                                    <figcaption class="card-body d-flex flex-column">
                                        <h5 class="price">Starting at <span class="text-red">$<?=$product_price?></span></h5>
                                        <!-- <details class="desc p-3">
                                            <summary>Product Description</summary>
                                            <p><?=$product_desc?></p>
                                        </details> -->
                                        <p class="desc"><?=$product_desc?></p>
                                        <?php include '../parts/tags.php';?>
                                        <div class="row buy-now mt-auto mb-3">
                                            <div class="col">
                                                <a href="<?=$buynow_url?>" class="btn btn-blue" title="Buy Now">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="row specs g-0">
                                            <div class="col">
                                                <span class="spec-title"><?=$keystroke?>M</span>
                                                <span class="spec-desc">Keystroke</span>
                                            </div>
                                            <div class="col">
                                                <span class="spec-title"><?=$switchbrand?></span>
                                                <span class="spec-desc">Switchbrand</span>
                                            </div>
                                        </div>
                                    </figcaption>
                                    <div class="card-footer">
                                        <a class="btn" href="<?=$product_url?>" title="Product Details">Product Details</a>
                                    </div>
                                </figure>