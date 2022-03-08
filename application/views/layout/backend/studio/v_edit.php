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
                        echo form_open_multipart('studio/edit/' . $studio->id_studio)
                        ?>
                        <div class="form-group">
                            <label for="">Nama Alat</label>
                            <input type="text" class="form-control" name="nama_studio" value="<?= $studio->nama_studio ?>" id="" placeholder="Nama Alat">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Sewa</label>
                            <input type="text" class="form-control" name="harga" value="<?= $studio->harga ?>" id="" placeholder="Harga Sewa">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" id=""> <?= $studio->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="<?= base_url('studio') ?>" class="btn btn-light">Cancel</a>

                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>