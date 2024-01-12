<div class="checkout-section">
    <div class="container">


        <!-- Start User Details Checkout Form -->
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" id="firstname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" id="lastname">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Street address <span>*</span></label>
                                    <input placeholder="House number and street name" type="text" id="alamat">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Town / City <span>*</span></label>
                                    <input type="text" id="city">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Country <span>*</span></label>
                                    <input type="text" id="country">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Phone<span>*</span></label>
                                    <input type="text" id="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email Address <span>*</span></label>
                                    <input type="text" id="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="default-form-box">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="keterangan"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <?php $i = 1;
                                $cartItems = []; ?>
                                <?php foreach ($cart as $us): ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $us['nama_barang']; ?><strong> ×
                                                    <?= $us['kuantitas']; ?>
                                                </strong>
                                            </td>
                                            <td>
                                                Rp.
                                                <?= $us['total']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php $cartItems[] = ['nama_barang' => $us['nama_barang'], 'kuantitas' => $us['kuantitas'], 'total' => 'Rp.' . $us['total']]; ?>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>
                                            <?php $total = 0; ?>
                                            <?php foreach ($cart as $us): ?>
                                                <?php $total = $total + $us['total']; ?>
                                            <?php endforeach; ?>
                                            Rp.
                                            <?= $total; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>Rp. 40000</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>
                                                <?php $total = 0; ?>
                                                <?php foreach ($cart as $us): ?>
                                                    <?php $total = $total + $us['total']; ?>
                                                <?php endforeach; ?>
                                                Rp.
                                                <?= $total + 40000; ?>
                                            </strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="order_button pt-3">
                                <button class="btn btn-md btn-black-default-hover" type="button"
                                    onclick="kirimPesan()">Lakukan Pembayaran</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
</div><!-- ...:::: End Checkout Section:::... -->

<script>
    function kirimPesan() {
        var firstname = encodeURIComponent(document.getElementById('firstname').value);
        var lastname = encodeURIComponent(document.getElementById('lastname').value);
        var alamat = encodeURIComponent(document.getElementById('alamat').value);
        var city = encodeURIComponent(document.getElementById('city').value);
        var country = encodeURIComponent(document.getElementById('country').value);
        var phone = encodeURIComponent(document.getElementById('phone').value);
        var email = encodeURIComponent(document.getElementById('email').value);
        var keterangan = encodeURIComponent(document.getElementById('keterangan').value);

        var cartItems = <?php echo json_encode($cartItems); ?>;
        var subtotal = cartItems.reduce(function (sum, item) {
            return sum + parseFloat(item.total.replace('Rp. ', '').replace(',', ''));
        }, 0);
        var shipping = 40000;
        var orderTotal = subtotal + shipping;

        var pesan = "Halo, saya ingin Memesan Produk Anda!\n";
        pesan += "Informasi Pengiriman:\n";
        pesan += "Nama: " + firstname + " " + lastname + "\n";
        pesan += "Alamat: " + alamat + "\n";
        pesan += "Kota: " + city + "\n";
        pesan += "Negara: " + country + "\n";
        pesan += "Nomor Telepon: " + phone + "\n";
        pesan += "Email: " + email + "\n";
        pesan += "Keterangan: " + keterangan + "\n\n";

        pesan += "Detail Pesanan:\n";
        cartItems.forEach(function (item) {
            pesan += item.nama_barang + " x " + item.kuantitas + " " + item.total + "\n";
        });

        pesan += "\nCart Subtotal: Rp. " + subtotal.toFixed(2) + "\n";
        pesan += "Shipping: Rp. " + shipping.toFixed(2) + "\n";
        pesan += "Order Total: Rp. " + orderTotal.toFixed(2) + "\n";

        var nomorTujuan = '6282138452454';
        var urlWhatsApp = 'https://wa.me/' + nomorTujuan + '?text=' + encodeURIComponent(pesan);

        window.open(urlWhatsApp, '_blank');
    }
</script>