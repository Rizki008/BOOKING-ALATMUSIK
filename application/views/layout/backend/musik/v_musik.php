
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
                        <a href="<?= base_url('musik/add') ?>" type="button" class="btn btn-primary">
                            <i class="ti-music-alt"></i>
                        </a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Nama Paket
                                        </th>
                                        <th>
                                            Harga Booking
                                        </th>
                                        <th>
                                            Tipe
                                        </th>
                                        <th>
                                            Promo
                                        </th>
                                        <th>
                                            Deskripsi
                                        </th>
                                        <th>
                                            Setting
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($alat_musik as $key => $value) { ?>
                                        <tr>
                                            <td class="py-1">
                                                <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="image" />
                                            </td>
                                            <td>
                                                <?= $value->nama_alat ?>
                                            </td>
                                            <td>
                                                <?= $value->harga ?>
                                            </td>
                                            <td>
                                                <?= $value->tipe ?>
                                            </td>
                                            <td>
                                                <?= $value->promo ?>
                                            </td>
                                            <td>
                                                <?= $value->deskripsi ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('musik/edit/' . $value->id_musik) ?>" class="btn btn-warning btn-sm"><i class="ti-reload btn-icon-prepend"></i></a>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_musik ?>"><i class="ti-trash btn-icon-prepend"></i></button>
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


    <!-- /.modal Delete -->
    <?php foreach ($alat_musik as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value->id_musik ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete <?= $value->nama_alat ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('musik/delete/' . $value->id_musik) ?> " class="btn btn-primary">Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>