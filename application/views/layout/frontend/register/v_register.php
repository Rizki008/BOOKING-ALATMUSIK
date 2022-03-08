<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p></p>
        <h2>Login</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    <h3>Welcome Back</h3>
                    <!-- Login Form -->
                    <div class="login-form">
                        <?php
                        echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sukses</h5>';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }

                        echo form_open('pelanggan/register');
                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" value="<?= set_value('nama_pelanggan') ?>" class=" form-control" id="exampleInputEmail1" aria-describedby="Nama Pelanggan" placeholder="Nama Pelanggan">
                            <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Telpon</label>
                            <input type="text" name="no_telpon" value="<?= set_value('no_telpon') ?>" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon">
                            <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" value="<?= set_value('email') ?>" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail">
                            <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>" id=" exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="ulangi_password" class="form-control" value="<?= set_value('ulangi_password') ?>" id=" exampleInputPassword1" placeholder="Ulangi Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= set_value('alamat') ?>" id=" exampleInputPassword1" placeholder="Alamat">
                        </div>
                        <button type="submit" class="btn oneMusic-btn mt-30">Register</button>
                        <?php echo form_close() ?>

                        <a href="<?= base_url('pelanggan/login') ?>" class="text-center">Sudah Punya Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Login Area End ##### -->