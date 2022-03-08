<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $title ?></h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                        <?php
                        //notifikasi form kosong
                        echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

                        //notifikasi gagal upload gambar
                        if (isset($error_upload)) {
                            echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                        }
                        echo form_open_multipart('musik/edit/' . $musik->id_musik)
                        ?>
                        <div class="form-group">
                            <label for="">Nama Paket</label>
                            <input type="text" class="form-control" name="nama_alat" value="<?= $musik->nama_alat ?>" id="" placeholder="Nama Paket">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Sewa</label>
                            <input type="text" class="form-control" name="harga" value="<?= $musik->harga ?>" id="" placeholder="Harga Sewa">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe</label>
                            <input type="text" class="form-control" name="tipe" value="<?= $musik->tipe ?>" id="" placeholder="Tipe">
                        </div>
                        <div class="form-group">
                            <label for="">Promo</label>
                            <input type="text" class="form-control" name="promo" value="<?= $musik->promo ?>" id="" placeholder="Promo">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" id=""> <?= $musik->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="<?= base_url('musik') ?>" class="btn btn-light">Cancel</a>

                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>