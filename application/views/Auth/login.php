
<div class="product-default-slider-section section-top-gap-100 section-fluid"></div>
<div class="customer-login">
    
    <div class="container">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                    <h3>login</h3>
                    <form action="<?= base_url('Admin/') ?>" id="loginForm" >
                        <div class="default-form-box">
                            <label>Username or email <span>*</span></label>
                            <input type="text" id="username" >
                        </div>
                        <div class="default-form-box">
                            <label>Passwords <span>*</span></label>
                            <input type="password" id="password" >
                        </div>
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover mb-4" type="submit" onclick="validateLogin">Login</button>
                            <label class="checkbox-default mb-4" for="offer">
                                <input type="checkbox" id="offer">
                                <span>Remember me</span>
                            </label>
                            <a href="#">Lost your password?</a>

                        </div>
                    </form>
                </div>
            </div>
            <!--login area start-->
    </div>
</div> <!-- ...:::: End Customer Login Section :::... -->

<div class="product-default-slider-section section-top-gap-100 section-fluid"></div>

<script>
        function validateLogin() {
            // Mendapatkan nilai dari input
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Mengganti dengan username dan password yang diinginkan
            var expectedUsername = 'admin';
            var expectedPassword = 'admin123';

            // Memeriksa apakah input sesuai dengan yang diharapkan
            if (username === expectedUsername && password === expectedPassword) {
                // Jika sesuai, arahkan ke halaman admin
                window.location.href = '<?= base_url('Admin/') ?>';
            } else {
                // Jika tidak sesuai, berikan pesan kesalahan atau tindakan lainnya
                alert('Login failed. Please check your username and password.');
            }
        }
    </script>