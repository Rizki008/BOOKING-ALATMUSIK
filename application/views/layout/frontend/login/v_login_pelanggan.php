<!--##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
	<div class="bradcumbContent">
		<!--  <p>See what’s new</p> -->
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

						echo form_open('pelanggan/login');
						?>

						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" value="<?= set_value('email') ?>" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail">
							<small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" value="<?= set_value('password') ?>" id=" exampleInputPassword1" placeholder="Password">
						</div>
						<button type="submit" class="btn oneMusic-btn mt-30">Login</button>
						<?php echo form_close() ?>

						<a href="<?= base_url('pelanggan/register') ?>" class="text-center">Belum Punya Akun? Silahkan Register Terlebih Dahulu!!!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ##### Login Area End #####
