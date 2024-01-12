<div class="product-default-slider-section section-top-gap-100 section-fluid"></div>
<div class="customer-login">

    <div class="container">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                <h3>
                    <?php echo $judul; ?>
                </h3>
                <form action="<?= base_url('Admin/update'); ?>" class="row g-3" method="POST">
                    <input type="hidden" name="id_catalog" value="<?= $catalog['id_catalog']; ?>">
                    <div class="col-12">
                        <label for="Nama" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" value="<?= $catalog['nama_barang']; ?>"
                            class="form-control" id="nama_barang" placeholder="Nama Barang">
                    </div>
                    <div class="col-12">
                        <label for="Harga" class="form-label">Harga</label>
                        <input type="number" name="harga_barang" value="<?= $catalog['harga_barang']; ?>"
                            class="form-control" id="harga_barang" placeholder="Harga">
                    </div>
                    <div class="col-12">
                        <label for="Stok" class="form-label">Stok</label>
                        <input type="number" name="stok_barang" value="<?= $catalog['stok_barang']; ?>"
                            class="form-control" id="stok_barang" placeholder="Stok">
                    </div>
                    <div class="col-12">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi_barang" value="<?= $catalog['deskripsi_barang']; ?>"
                            class="form-control" id="deskripsi_barang" placeholder="Deskripsi">
                    </div>
                    <div class="col-12">
                        <label for="Ukuran" class="form-label">Ukuran</label>
                        <input type="text" name="ukuran_barang" value="<?= $catalog['ukuran_barang']; ?>"
                            class="form-control" id="ukuran_barang" placeholder="Ukuran">
                    </div>
                    <div class="col-12">
                        <label for="Gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar_barang" value="<?= $catalog['gambar_barang']; ?>"
                            class="form-control" id="gambar_barang" placeholder="Gambar">
                    </div>
                    <div class="col-12">
                        <img src="<?= base_url('./assets/images/admin/') . $catalog['gambar_barang']; ?>" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!--login area start-->
    </div>
</div> <!-- ...:::: End Customer Login Section :::... -->

<div class="product-default-slider-section section-top-gap-100 section-fluid"></div>
