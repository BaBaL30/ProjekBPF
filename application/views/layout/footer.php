<style>
    .footer-bg{
        padding-top: 0;
    }
</style>
<footer class="footer-section footer-bg">
    <div class="footer-wrapper">

        <!-- Start Footer Center -->
        <div class="footer-center">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                        <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="title">FOLLOW US</h4>
                            <ul class="footer-social-link">
                                <li><a href="https://www.facebook.com/ainayya.butikduri.1/"><i class="fa fa-facebook"></i></a></li>                
                                <li><a href="https://www.instagram.com/padusheshop.id/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://shopee.co.id/buyer/login?next=https%3A%2F%2Fshopee.co.id%2Frisafitriayu%3Fsmtt%3D0.0.9"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send/?phone=6282138452454&text&type=phone_number&app_absent=0"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Start Footer Center -->

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                
            </div>
        </div>
        <!-- Start Footer Bottom -->
    </div>
</footer>
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
<div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal-add-cart-product-img">
                                        <img class="img-fluid"
                                            src="<?= base_url('assets/') ?>images/product/default/home-1/default-1.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                        successfully!</div>
                                    <div class="modal-add-cart-product-cart-buttons">
                                        <a href="<?= base_url() ?>Catalog/cart">View Cart</a>
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal-border">
                            <ul class="modal-add-cart-product-shipping-info">
                                <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your
                                        Cart.</strong></li>
                                <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                        SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Add cart -->
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/upload'); ?>" class="row g-3" method="POST"
                    enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="Nama" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                            placeholder="Nama Barang">
                    </div>
                    <div class="col-12">
                        <label for="Harga" class="form-label">Harga</label>
                        <input type="number" name="harga_barang" class="form-control" id="harga_barang"
                            placeholder="Harga">
                    </div>
                    <div class="col-12">
                        <label for="Stok" class="form-label">Stok</label>
                        <input type="number" name="stok_barang" class="form-control" id="stok_barang"
                            placeholder="Stok">
                    </div>
                    <div class="col-12">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang"
                            placeholder="Deskripsi">
                    </div>
                    <div class="col-12">
                        <label for="Ukuran" class="form-label">Ukuran</label>
                        <input type="text" name="ukuran_barang" class="form-control" id="ukuran_barang"
                            placeholder="Ukuran">
                    </div>
                    <div class="col-12">
                        <label for="Gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar_barang" class="form-control" id="gambar_barang"
                            placeholder="Gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>
<!-- Start Modal Quickview cart -->
<div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-details-gallery-area mb-7">
                                <!-- Start Large Image -->
                                <div class="product-large-image modal-product-image-large swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-1.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-2.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-4.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-5.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="<?= base_url('assets/') ?>images/product/default/home-1/default-6.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Large Image -->
                                <!-- Start Thumbnail Image -->
                                <div
                                    class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                    <div class="swiper-wrapper">
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-1.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-2.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-3.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-4.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-5.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid"
                                                src="<?= base_url('assets/') ?>images/product/default/home-1/default-6.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="gallery-thumb-arrow swiper-button-next"></div>
                                    <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                </div>
                                <!-- End Thumbnail Image -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-details-content-area">
                                <!-- Start  Product Details Text Area-->
                                <div class="product-details-text">
                                    <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                    <div class="price"><del>$70.00</del>$80.00</div>
                                </div> <!-- End  Product Details Text Area-->
                                <!-- Start Product Variable Area -->
                                <div class="product-details-variable">
                                    <!-- Product Variable Single Item -->
                                    <div class="variable-single-item">
                                        <span>Color</span>
                                        <div class="product-variable-color">
                                            <label for="modal-product-color-red">
                                                <input name="modal-product-color" id="modal-product-color-red"
                                                    class="color-select" type="radio" checked>
                                                <span class="product-color-red"></span>
                                            </label>
                                            <label for="modal-product-color-tomato">
                                                <input name="modal-product-color" id="modal-product-color-tomato"
                                                    class="color-select" type="radio">
                                                <span class="product-color-tomato"></span>
                                            </label>
                                            <label for="modal-product-color-green">
                                                <input name="modal-product-color" id="modal-product-color-green"
                                                    class="color-select" type="radio">
                                                <span class="product-color-green"></span>
                                            </label>
                                            <label for="modal-product-color-light-green">
                                                <input name="modal-product-color" id="modal-product-color-light-green"
                                                    class="color-select" type="radio">
                                                <span class="product-color-light-green"></span>
                                            </label>
                                            <label for="modal-product-color-blue">
                                                <input name="modal-product-color" id="modal-product-color-blue"
                                                    class="color-select" type="radio">
                                                <span class="product-color-blue"></span>
                                            </label>
                                            <label for="modal-product-color-light-blue">
                                                <input name="modal-product-color" id="modal-product-color-light-blue"
                                                    class="color-select" type="radio">
                                                <span class="product-color-light-blue"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Product Variable Single Item -->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number">
                                            </div>
                                        </div>

                                        <div class="product-add-to-cart-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div> <!-- End Product Variable Area -->
                                <div class="modal-product-about-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                        laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                        in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                        recusandae</p>
                                </div>
                                <!-- Start  Product Details Social Area-->
                                <div class="modal-product-details-social">
                                    <span class="title">SHARE THIS PRODUCT</span>
                                    <ul>
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>

                                </div> <!-- End  Product Details Social Area-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Quickview cart -->

<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!-- Global Vendor, plugins JS -->
<!-- <script src="/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

<!--Plugins JS-->
<!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="<?= base_url('assets/') ?>js/vendor/vendor.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/plugins.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<!-- Main JS -->
<script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>



</html>