<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
	<div class="bradcumbContent">
		<p></p>
		<h2></h2>
	</div>
</section>
<!-- ##### Breadcumb Area End ##### -->
<div class="blog-area section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Pembayaran</h3>
					</div>
				</div>
				<!-- general form elements -->
				<div class="card card-primary">

					<!-- /.card-header -->
					<!-- form start -->
					<?php
					//notifikasi form kosong
					echo validation_errors('<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');

					//notifikasi gagal upload gambar
					if (isset($error_upload)) {
						echo '<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h5><i class="icon fa fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
					}

					echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_boking); ?>
					<div class="card-body">
						<input hidden type="text" name="total" value="<?= $pesanan->jumlah_bayar ?>">
						<input hidden type="text" name="tgl" value="<?= $pesanan->tgl_boking ?>">
						<div class="form-group">
							<label>Atas Nama</label>
							<input name="atas_nama" class="form-control" placeholder="Atas Nama" required>
						</div>

						<div class="form-group">
							<label>Jumlah Pembayaran</label>
							<input name="jumlah_bayar" class="form-control" placeholder="Jumlah Pembayaran" required>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Bukti Bayar</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" name="bukti_bayar" class="custom-file-input" required>
									<label class="custom-file-label" for="exampleInputFile">Pilih File</label>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<a href="<?= base_url('pesanan_saya') ?>" class="btn btn-warning">Back</a>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
					<?php echo form_close() ?>
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</div>