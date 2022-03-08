<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/breadcumb3.jpg);">
	<div class="bradcumbContent">
		<p></p>
		<h2></h2>
	</div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12">

				<!-- Single Post Start -->
				<div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
					<!-- Post Thumb -->
					<div class="blog-post-thumb mt-30">
						<a href="#"><img src="<?= base_url('assets/gambar/' . $musik->gambar) ?>" alt=""></a>
						<!-- Post Date -->
					</div>

					<!-- Blog Content -->
					<div class="blog-content">
						<!-- Post Title -->
						<a href="#" class="post-title"><?= $musik->nama_alat ?></a>
						<!-- Post Excerpt -->
						<h5>Rp. <?= number_format($musik->harga - $musik->promo, 0) ?></h5>
						<p><?= $musik->deskripsi ?></p>
						<hr>
						<?php
						echo form_open('boking_alat/add');
						echo form_hidden('id', $musik->id_musik);
						echo form_hidden('price', $musik->harga - $musik->promo);
						echo form_hidden('name', $musik->nama_alat);
						echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
						?>
						<div>
							<input type="number" name="qty" class="form-control" value="1" min="1" hidden>
						</div>
						<div class="at-list">
							<button type="submit" class="btn btn-success mx-30" data-name="<?= $musik->nama_alat; ?>" data-price="<?= $musik->harga - $musik->promo ?>" data-id="<?= $musik->id_musik; ?>">
								<span><i class="icon-cart">Tambahkan</i></span>
							</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- ##### Blog Area End ##### -->
