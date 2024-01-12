<div class="product-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">THE NEW ARRIVALS</h3>
                            <p>Preorder now to receive exclusive deals & gifts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->

    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-2rows default-slider-nav-arrow">

                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-2row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php $i = 1; ?>
                                <?php foreach ($catalog as $us): ?>
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="<?= base_url('Catalog/detail/') . $us['id_catalog']; ?>"
                                                class="image-link">
                                                <img src="<?= base_url('./assets/images/admin/') . $us['gambar_barang']; ?>"
                                                    alt="">
                                            </a>
                                            <div class="tag">
                                                <span>sale</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="<?= base_url('Catalog/detail/') . $us['id_catalog']; ?>">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">
                                                        <?= $us['nama_barang']; ?>
                                                    </a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">
                                                    Rp.
                                                    <?= $us['harga_barang']; ?>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <!-- End Product Default Single Item -->
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-default-slider-section section-top-gap-100 section-fluid"></div>
<!-- End Product Default Slider Section -->