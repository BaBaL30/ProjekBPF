<div class="product-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Large Image -->
                    <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                            <img src="<?= base_url('./assets/images/admin/') . $catalog['gambar_barang']; ?>" alt="">
                        </div>
                    </div>
                    <!-- End Large Image -->
                    <!-- Start Thumbnail Image -->
                    <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                        <div class="swiper-wrapper">
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-1.jpg" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-2.jpg" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-3.jpg" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-4.jpg" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-5.jpg" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="assets/images/product/default/home-1/default-6.jpg" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                    </div>
                    <!-- End Thumbnail Image -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                    data-aos-delay="200">
                    <!-- Start  Product Details Text Area-->
                    <div class="product-details-text">
                        <h4 class="title">
                            <?= $catalog['nama_barang']; ?>
                        </h4>
                        <div class="d-flex align-items-center">
                            <ul class="review-star">
                                <li class="fill"><i class="ion-android-star"></i></li>
                                <li class="fill"><i class="ion-android-star"></i></li>
                                <li class="fill"><i class="ion-android-star"></i></li>
                                <li class="fill"><i class="ion-android-star"></i></li>
                                <li class="empty"><i class="ion-android-star"></i></li>
                            </ul>
                            <a href="#" class="customer-review ml-2"></a>
                        </div>

                        <div class="price">Rp.
                            <?= $catalog['harga_barang']; ?>
                        </div>
                        <p>
                            <?= $catalog['deskripsi_barang']; ?>
                        </p>
                    </div> <!-- End  Product Details Text Area-->
                    <!-- Start Product Variable Area -->
                    <div class="product-details-variable">
                        <h4 class="title">Available Options</h4>
                        <!-- Product Variable Single Item -->
                        <div class="variable-single-item">
                            <div class="product-stock"> <span class="product-stock-in"><i
                                        class="ion-checkmark-circled"></i></span>
                                <?= $catalog['stok_barang']; ?> IN STOCK
                            </div>
                        </div>
                        <!-- Product Variable Single Item -->
                        <div class="d-flex align-items-center ">
                            <form action="<?= base_url('Cart/upload'); ?>" class="row g-3" method="POST">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                        <input name="kuantitas" min="1" max="100" value="1" type="number"
                                            id="kuantitas">
                                    </div>
                                </div>

                                <div class="product-add-to-cart-btn">
                                    <input type="hidden" name="id_catalog" value="<?= $catalog['id_catalog']; ?>">
                                    <input type="hidden" name="nama_barang" value="<?= $catalog['nama_barang']; ?>"
                                        class="form-control" id="nama_barang" placeholder="Nama Barang">
                                    <input type="hidden" name="harga_barang" value="<?= $catalog['harga_barang']; ?>"
                                        class="form-control" id="harga_barang" placeholder="Harga">
                                    <input type="hidden" name="gambar_barang" value="<?= $catalog['gambar_barang']; ?>"
                                        class="form-control" id="gambar_barang" placeholder="Gambar">
                                    <button type="submit">+ Add To Cart</button>
                                </div>
                            </form>
                        </div>

                    </div> <!-- End Product Variable Area -->

                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Details Section -->