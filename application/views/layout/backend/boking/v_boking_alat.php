<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<!-- <a href="<?= base_url('studio/add') ?>" type="button" class="btn btn-primary">
                            <i class="ti-home"></i>
                        </a> -->
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											Nama Pelanggan
										</th>
										<th>
											Tanggal Boking
										</th>
										<th>
											Jadwal Boking
										</th>
										<th>
											Jam Boking
										</th>
										<th>
											Harga Sewa
										</th>
										<th>
											Action
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($boking_alat as $key => $value) { ?>
										<tr>
											<td class="py-1">
												<?= $value->nama_pelanggan ?>
											</td>
											<td>
												<?= $value->tgl_boking ?>
											</td>
											<td>
												<?= $value->tanggal_jadwal ?>
											</td>
											<td>
												<?= $value->jam ?>
											</td>
											<td>
												<?= $value->harga_bayar ?>
											</td>
											<td>
												<?php
												if ($value->status_boking == 0) { ?>
													<span class="badge badge-warning">Menunggu Konfirmasi Boking</span><br>
													<a href="<?= base_url('boking/proses/' . $value->id_boking) ?>" type="submit" class="btn btn-primary">Konfirmasi Booking</a>
												<?php } else { ?>
													<span class="badge badge-success">Menunggu Pembayaran</span>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<table class="table table-striped">
								<tbody>
									<?php
									foreach ($pesanan_dikirim as $key => $value) { ?>
										<tr>
											<td class="py-1">
												<?= $value->nama_pelanggan ?>
											</td>
											<td>
												<?= $value->tgl_boking ?>
											</td>
											<td>
												<?= $value->tanggal_jadwal ?>
											</td>
											<td>
												<?= $value->jam ?>
											</td>
											<td>
												<?= $value->harga_bayar ?>
											</td>
											<td>
												<?php
												if ($value->status_boking == 2) { ?>
													<span class="badge badge-warning">Proses Boking</span><br>
												<?php } else { ?>
													<span class="badge badge-success">Menunggu Pembayaran</span>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<table class="table table-striped">
								<tbody>
									<?php
									foreach ($pesanan_selesai as $key => $value) { ?>
										<tr>
											<td class="py-1">
												<?= $value->nama_pelanggan ?>
											</td>
											<td>
												<?= $value->tgl_boking ?>
											</td>
											<td>
												<?= $value->tanggal_jadwal ?>
											</td>
											<td>
												<?= $value->jam ?>
											</td>
											<td>
												<?= $value->harga_bayar ?>
											</td>
											<td>
												<?php
												if ($value->status_boking == 3) { ?>
													<span class="badge badge-success">Selesai</span><br>
												<?php } else { ?>
													<span class="badge badge-success">Menunggu Pembayaran</span>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
