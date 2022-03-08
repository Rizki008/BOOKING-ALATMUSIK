<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
	<div class="bradcumbContent">
				<h2>TRANSAKSI BOOKING</h2>
	</div>
</section>
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12">
				<?php
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i>';
					echo $this->session->flashdata('pesan');
					echo '</h5></div>';
				} ?>


				<div class="card card-primary card-outline card-tabs">
					<div class="card-header p-0 pt-1 border-bottom-0">
						<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Booking</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Pembayaran</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Proses Boking</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-three-telephone-tab" data-toggle="pill" href="#custom-tabs-three-telephone" role="tab" aria-controls="custom-tabs-three-telephone" aria-selected="false">Selesai</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="custom-tabs-three-tabContent">
							<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
								<table class="table">
									<tr>
										<th>No Boking</th>
										<th>Tanggal Boking</th>
										<th>Tanggal Jadwal Boking</th>
										<th>Total Bayar</th>
										<th>Action</th>
									</tr>

									<?php foreach ($belum_bayar as $key => $value) {
									?>
										<tr>
											<td><?= $value->no_boking ?></td>
											<td><?= $value->tgl_boking ?></td>
											<td><?= $value->tanggal_jadwal ?></td>
											<td>
												<b>Rp. <?= number_format($value->harga_bayar, 0) ?></b><br>
												<?php if ($value->status_boking == 0) { ?>
													<span class="badge badge-warning">Menunggu Konfirmasi</span>
												<?php } else { ?>
													<span class="badge badge-success">Sudah Di Konfirmasi</span><br>
													<span class="badge badge-primary">Menunggu Silahkan Bayar</span>
												<?php } ?>
											</td>
											<td>
												<?php if ($value->status_boking == 1) { ?>
													<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_boking) ?>" class="btn btn-primary">Bayar</a>
												<?php } ?>
												<!--<button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#bayar<?= $value->id_boking ?>">Diterima</button>-->
											</td>
										</tr>
									<?php } ?>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
								<table class="table">
									<tr>
										<th>No Pesan</th>
										<th>Tanggal Pesan</th>
										<th>Tanggal Booking</th>
										<th>Total Bayar</th>
										<th>Action</th>
									</tr>
									<?php foreach ($diproses as $key => $value) { ?>
										<tr>
											<td><?= $value->no_boking ?></td>
											<td><?= $value->tgl_boking ?></td>
											<td><?= $value->tanggal_jadwal ?></td>
											<td>
												<b>Rp. <?= number_format($value->harga_bayar, 0) ?></b>
											</td>
											<td>
												<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_boking) ?>" class="btn btn-primary">Bayar</a>
											</td>
										</tr>
									<?php } ?>

								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
								<table class="table">
									<tr>
										<th>No Pesan</th>
										<th>Tanggal Pesan</th>
										<th>Jadwal Boking</th>
										<th>Total Bayar</th>
										<th>Action</th>
									</tr>
									<?php foreach ($dikirim as $key => $value) { ?>
										<tr>
											<td><?= $value->no_boking ?></td>
											<td><?= $value->tgl_boking ?></td>
											<td><?= $value->tanggal_jadwal ?></td>
											<td>
												<b>Rp. <?= number_format($value->harga_bayar, 0) ?></b><br>
												<span class="badge badge-success">Proses Boking</span><br>
											</td>
											<td>
												<button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#diterima<?= $value->id_boking ?>">Selesai Boking</button>
											</td>
										</tr>
									<?php } ?>

								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-three-telephone" role="tabpanel" aria-labelledby="custom-tabs-three-telephone-tab">
								<table class="table">
									<tr>
										<th>No Pesan</th>
										<th>Tanggal Pesan</th>
										<th>Jadwal Boking</th>
										<th>Total Bayar</th>
									</tr>
									<?php foreach ($selesai as $key => $value) { ?>
										<tr>
											<td><?= $value->no_boking ?></td>
											<td><?= $value->tgl_boking ?></td>
											<td><?= $value->tanggal_jadwal ?></td>
											<td>
												<b>Rp. <?= number_format($value->harga_bayar, 0) ?></b><br>
												<span class="badge badge-success">Selesai</span><br>
											</td>
										</tr>
									<?php } ?>

								</table>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php foreach ($dikirim as $key => $value) { ?>
	<div class="modal fade" id="diterima<?= $value->id_boking ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Pesanan Diterima</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Apakah Anda Yakin Telah Selesai Boking?
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('pesanan_saya/diterima/' . $value->id_boking) ?>" class="btn btn-success">Ya</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>