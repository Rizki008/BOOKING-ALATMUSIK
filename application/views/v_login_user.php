<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corvin's Admin</title>
    <link rel="stylesheet" href="<?= base_url() ?>skydash/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>skydash/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>skydash/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>skydash/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>skydash/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?= base_url() ?>skydash/images/logo.svg" alt="logo">
                            </div>
                            <h4>SELAMAT DATANG!</h4>
                            <h6 class="font-weight-light">Silakan isi dengan benar</h6>
                            <?php

                            echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

                            if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Gagal</h5>';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }

                            if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Sukses</h5>';
                                echo $this->session->flashdata('pesan');
                                echo '</div>';
                            }

                            echo form_open('auth/login_user')
                            ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">MASUK</button>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <script src="<?= base_url() ?>skydash/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>skydash/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>skydash/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>skydash/js/template.js"></script>
    <script src="<?= base_url() ?>skydash/js/settings.js"></script>
    <script src="<?= base_url() ?>skydash/js/todolist.js"></script>
</body>

</html>
 -->










<!doctype html>
<html lang="en">
  <head>
    <title>HI!     SELAMAT DATANG </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?= base_url() ?>login-form-20/css/style.css">

    </head>
    <body class="img js-fullheight" style="background-image: url(<?= base_url() ?>login-form-20/images/bmth.jpeg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">HI! SELAMAT DATANG</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center"></h3>
                <?php

                            echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

                            if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Gagal</h5>';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }

                            if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Sukses</h5>';
                                echo $this->session->flashdata('pesan');
                                echo '</div>';
                            }

                            echo form_open('auth/login_user')
                            ?>    
                            <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                <div class="form-group">
                  <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">MASUK</button>
                </div>
              <?php echo form_close() ?>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url() ?>login-form-20/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>login-form-20/js/popper.js"></script>
  <script src="<?= base_url() ?>login-form-20/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>login-form-20/js/main.js"></script>

    </body>
</html>

