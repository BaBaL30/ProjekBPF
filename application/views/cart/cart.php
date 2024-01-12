<div class="cart-section">
    <!-- Start Cart Table -->
    <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <?php $i = 1; ?>
                                <?php foreach ($catalog as $us): ?>
                                    <tbody>
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove">
                                                    <a href="<?= base_url('Cart/hapus/') . $us['id_cart']; ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.html"><img
                                                        src="<?= base_url('./assets/images/admin/') . $us['gambar_cart']; ?>"
                                                        alt=""></a>
                                            </td>
                                            <td class="product_name">
                                                <?= $us['nama_barang']; ?>
                                            </td>
                                            <td class="product-price">Rp.
                                                <?= $us['harga_cart']; ?>
                                            </td>
                                            <td class="product_quantity"><label>
                                                    <?= $us['kuantitas']; ?>
                                                </label>
                                            <td class="product-price">Rp.
                                            <?= $us['total']; ?>
                                            </td>
                                        </tr> <!-- End Cart Single Item-->
                                    </tbody>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->

    <!-- Start Coupon Start -->
    <div class="coupon_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <?php $total = 0; ?>
                                <?php foreach ($catalog as $us): ?>
                                    <?php $total = $total + $us['total']; ?>
                                <?php endforeach; ?>
                                <p class="cart_amount">
                                    Rp.
                                    <?= $total; ?>
                                </p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount"><span>Flat Rate:</span> Rp. 40000</p>
                            </div>
                            <a href="#">Calculate shipping</a>

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">Rp.
                                    <?= $total + 40000; ?>
                                </p>
                            </div>
                            <div class="checkout_btn">
                                <a href="<?= base_url('cart/checkout/') ?>" class="btn btn-md btn-golden">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Coupon Start -->
</div> <!-- ...:::: End Cart Section:::... -->