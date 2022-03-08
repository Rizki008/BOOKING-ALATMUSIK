<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
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
                                            Harga Sewa
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pesanan_diproses as $key => $value) { ?>
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
                                                <?= $value->harga_bayar ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($value->status_boking == 1) { ?>
                                                    <span class="badge badge-warning"> Konfirmasi Pembayaran</span><br>
                                                    <a href="<?= base_url('boking/konfirmasi/' . $value->id_boking) ?>" type="submit" class="btn btn-success">Konfirmasi Booking</a>
                                                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#cek<?= $value->id_boking ?>">Cek Pembayaran</button>
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



    <!--Model-->
    <?php foreach ($pesanan_diproses as $key => $value) { ?>
        <div class="modal fade" id="cek<?= $value->id_boking ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $value->no_boking ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Atas Nama</th>
                                <th>:</th>
                                <td><?= $value->atas_nama ?></td>
                            </tr>
                            <tr>
                                <th>jumlah_bayar</th>
                                <th>:</th>
                                <td><?= $value->jumlah_bayar ?></td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <th>:</th>
                                <td><?= number_format($value->harga_bayar, 0) ?></td>
                            </tr>
                        </table>
                        <img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt="">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>