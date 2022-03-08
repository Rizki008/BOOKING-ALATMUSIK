<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
                        <small class="float-right">Bulan: <?= $bulan ?> / Tahun: <?= $tahun ?></small>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Paket</th>
                                        <th>No Boking</th>
                                        <th>Tanggal Boking</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    $grand_total = 0;
                                    foreach ($laporan as $key => $value) {
                                        $grand_total = $grand_total + $value->jumlah_bayar;
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_alat ?></td>
                                            <td><?= $value->no_boking ?></td>
                                            <td><?= $value->tgl_boking ?></td>
                                            <td>Rp.<?= number_format($value->jumlah_bayar, 0) ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?> </h3>
                            </table>
                        </div>
                        <div class="row no-print">
                            <div class="col-12">
                                <button class="btn btn-default" onclick="window.print()"><i class="ti-printer btn-icon-append"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>