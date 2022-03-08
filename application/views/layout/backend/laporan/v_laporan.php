<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">


            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Laporan Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        echo form_open('laporan/lap_bulanan') ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select name="bulan" class="form-control">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        echo form_close() ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Laporan Penjualan Tahunan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        echo form_open('laporan/lap_tahunan') ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        echo form_close() ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>