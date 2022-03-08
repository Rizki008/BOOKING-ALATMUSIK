<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p></p>
        <h2></h2>
    </div>
</section>
<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">

                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                if ($this->session->flashdata('penuh')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('penuh');
                    echo '</h5></div>';
                } ?>
            </div>

            <div class="col-sm-12">
                <?php echo form_open('boking_alat/update'); ?>
                <table class="table" cellpadding="6" cellspacing="1" style="width:100%">
                    <tr>
                        <th></th>
                        <th>Nama Alat musik</th>
                        <th style="text-align:right">Harga</th>
                        <th>Total Harga</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php
                    foreach ($this->cart->contents() as $items) {
                        $musik = $this->m_home->detail_musik($items['id']);
                    ?>
                        <tr>
                            <td class="image-prod">
                                <img src="<?= base_url('assets/gambar/' . $musik->gambar) ?>" class="img-fluid" alt="Colorlib Template" width="200px" height="150px">
                            </td>
                            <td>
                                <?php echo $items['name']; ?>
                            </td>
                            <td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
                            <td style="text-align:right" hidden>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                            <td class="right"><strong>Rp.<?php echo $this->cart->format_number($this->cart->total(), 0); ?></strong></td>
                            <td class="text-center">
                                <a href="<?= base_url('boking_alat/delete/') . $items['rowid'] ?>" class="genric-btn danger circle"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php } ?>
                    <tr>
                        <td> </td>

                        <td class="right"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <a href="<?= base_url('boking_alat/cekout') ?>" class="btn btn-primary"><i class="fa fa-check-square"></i>Booking</a>
                <?php echo form_close(); ?>
                <br>
            </div>
        </div>
    </div>
</div>