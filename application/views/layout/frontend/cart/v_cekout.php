<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
	<div class="bradcumbContent">
		<p></p>
		<h2><?= $title ?></h2>
	</div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<div class="blog-area section-padding-100">
	<div class="container">
		<!-- title row -->
		<div class="row">
			<div class="col-12 col-lg-12">
				<h4>
					<i class="fa fa-shopping-cart"></i> Pesan Paket.
					<small class="float-right">Date: <?= date('d-m-Y') ?></small>
				</h4>
			</div>
			<!-- /.col -->
		</div><?php
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="fa fa-check text-success"></i>';
					echo $this->session->flashdata('pesan');
					echo '</h5></div>';
				}
				?>
		<?php
		echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
		?>
		<?php
		echo form_open('boking_alat/cekout');
		$no_boking = date('Ymd') . strtoupper(random_string('alnum', 8));
		$tgl1 = date('Y-m-d');
		$tgl2 = date('Y-m-d', strtotime('+30 days', strtotime($tgl1)));

		?>
		<div class="row">
			<!-- accepted payments column -->
			<div class="col-sm-8 invoice-col">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama</label>
							<input name="id_pelanggan" class="form-control" value="<?= $this->session->userdata('nama_pelanggan'); ?>" disabled>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label>No Telpon</label>
							<input name="id_pelanggan" class="form-control" value="<?= $this->session->userdata('no_telpon'); ?>" disabled>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label>Tanggal Boking Alat Musik</label>
							<input name="tanggal_jadwal" id="tanggal" type="date" class="form-control datepicker" required>
							<!--<input name="tgl2" id="tanggal" class="form-control datepicker" required>-->
							<!--<input name="tgl_resepsi" id="tanggal" class="form-control datepicker" required>-->
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label>Jam Boking Alat Musik</label>
							<input name="jam" id="jam" type="time" class="form-control" required>
							<!--<input name="tgl2" id="tanggal" class="form-control datepicker" required>-->
							<!--<input name="tgl_resepsi" id="tanggal" class="form-control datepicker" required>-->
						</div>
					</div>

				</div>
			</div>
			<!-- /.col -->
			<div class="col-4">
				<div class="table-responsive">
					<table class="table">
						<?php
						foreach ($this->cart->contents() as $items) {
							$musik = $this->m_home->detail_musik($items['id']);
						?>
							<tr>
								<th>Nama Paket:</th>
								<th><?php echo $items['name']; ?></th>
							</tr>
							<tr>
								<th>Harga:</th>
								<th>Rp. <?php echo $this->cart->format_number($items['price']); ?></th>
							</tr>
						<?php } ?>
						<tr>
							<th style="width:50%">Subtotal:</th>
							<th>Rp. <?php echo $this->cart->format_number($this->cart->total(), 0); ?></th>
						</tr>
					</table>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<!--simpan transaksi-->
		<input name="no_boking" value="<?= $no_boking ?>" hidden>
		<input name="harga_bayar" value="<?= $this->cart->total() ?>" hidden>
		<!--simpan Rinci transaksi-->
		<?php
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			echo form_hidden('qty' . $i++, $items['qty']);
		}

		?>
		<!-- this row will not appear when printing -->
		<div class="row no-print">
			<div class="col-12">
				<a href="<?= base_url('boking_alat') ?>" class="btn btn-warning "><i class="fa fa-backward"></i> Kembali</a>
				<button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">
					<i class="fa fa-shopping-cart"></i> Pesan
				</button>
			</div>
		</div>
		<?php
		echo form_close();
		?>
	</div>
</div>
