<header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                    <?php $keranjang = $this->cart->contents();
                    $jml_item = 0;
                    foreach ($keranjang as $key => $value) {
                        $jml_item = $jml_item + $value['qty'];
                    }
                    ?>
                    <!-- Nav brand -->
                    <a href="<?= base_url('') ?>" class="nav-brand">
                        <H4 class="text-white">CORVIN'S</H4>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="<?= base_url('') ?>">Home</a></li>
                                <li><a href="#">Akun</a>
                                    <ul class="dropdown">
                                        <li><?php if (
                                                $this->session->userdata('email') == ""
                                            ) { ?>
                                                <a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                                    <a class="dropdown-item" href="<?= base_url('pelanggan/login') ?>">Login/Register</a>
                                                </div>
                                            <?php } else { ?>
                                                <a href="#" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama_pelanggan'); ?></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                                    <a class="dropdown-item" href="<?= base_url('pesanan_saya') ?>">Booking
                                                        <span class="badge badge-warning navbar-badge"></span>
                                                    </a>
                                                    <a class="dropdown-item" href="<?= base_url('pelanggan/logout') ?>">Log Out</a>
                                                </div>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Login/Register & Cart Button -->
                            <div class="login-register-cart-button d-flex align-items-center">

                                <!-- Cart Button -->
                                <div class="cart-btn">
                                    <a href="<?= base_url('boking_alat') ?>">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">[<?= $jml_item ?>]</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>