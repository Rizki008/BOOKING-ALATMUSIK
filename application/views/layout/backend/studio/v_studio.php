<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
                        <a href="<?= base_url('studio/add') ?>" type="button" class="btn btn-primary">
                            <i class="ti-home"></i>
                        </a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Nama Studio
                                        </th>
                                        <th>
                                            Harga Sewa
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
                                    foreach ($alat_studio as $key => $value) { ?>
                                        <tr>
                                            <td class="py-1">
                                                <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="image" />
                                            </td>
                                            <td>
                                                <?= $value->nama_studio ?>
                                            </td>
                                            <td>
                                                <?= $value->harga ?>
                                            </td>
                                            <td>
                                                <?= $value->deskripsi ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('studio/edit/' . $value->id_studio) ?>" class="btn btn-warning btn-sm"><i class="ti-reload btn-icon-prepend"></i></a>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_studio ?>"><i class="ti-trash btn-icon-prepend"></i></button>
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