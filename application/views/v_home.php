<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/b11.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="50ms">Selamat Datang </h6>
                            <h2 data-animation="fadeInUp" data-delay="70ms">STUDIO CORVIN'S BENDUNGAN<span>STUDIO CORVIN'S BENDUNGAN</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
      <!--   <div class="single-hero-slide d-flex align-items-center justify-content-center"> -->
            <!-- Slide Img -->
           <!--  <div class="slide-img bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/V.jpg);"></div> -->
            <!-- Slide Content -->
        <!--     <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">Colorlib Music <span>Colorlib Music</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/fff.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="50ms">Ekspresikan</h6>
                            <h2 data-animation="fadeInUp" data-delay="70ms">Musikmu dan Gaya Mu <span>Musikmu dan Gaya Mu</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/g.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="50ms">Nantikan Promo</h6>
                            <h2 data-animation="fadeInUp" data-delay="70ms">DI AKHIR TAHUN 2021 !!! <span>DI AKHIR TAHUN 2021 !!!</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <!-- <div class="single-hero-slide d-flex align-items-center justify-content-center"> -->
            <!-- Slide Img --><!-- 
            <div class="slide-img bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/bg40.jpg);"></div> -->
            <!-- Slide Content -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">Colorlib Music <span>Colorlib Music</span></h2>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->
<!-- ##### Latest Albums Area Start ##### -->
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <!-- <p>Paket Sewa Alat Musik dan Booking Studio</p> -->
                    <h2>KATALOG STUDIO CORVINS BENDUNGAN</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>"Menghentikan aliran musik akan seperti menghentikan waktu itu sendiri, luar biasa dan tak terbayangkan."-Aaron Copland <br> "Musik menghasilkan semacam kesenangan yang tidak bisa dilakukan oleh sifat manusia."-Konfusius</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    <?php foreach ($alat_musik as $key => $value) { ?>
                        <div class="single-album">
                            <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="">
                            <div class="album-info">
                                <a href="<?= base_url('home/detail_musik/' . $value->id_musik) ?>">
                                    <h5><?= $value->nama_alat ?></h5>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Latest Albums Area End ##### -->


<!-- ##### Events Area Start ##### -->
<section class="events-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Paket Sewa Alat Musik dan Booking Studio</p>
                    <h2> Music</h2>
                </div>
            </div>
            <?php foreach ($alat_musik as $key => $value) { ?>
                <!-- Single Event Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-event-area mb-30">
                        <div class="event-thumbnail">
                            <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="">
                        </div>
                        <div class="event-text">
                            <h4><?= $value->nama_alat ?></h4>
                            <div class="event-meta-data">
                                <a href="<?= base_url('home/detail_musik/' . $value->id_musik) ?>" class="event-place">Harga</a>
                                <a href="<?= base_url('home/detail_musik/' . $value->id_musik) ?>" class="event-date">Rp. <?= number_format($value->harga, 0) ?></a>
                            </div>
                            <a href="<?= base_url('home/detail_musik/' . $value->id_musik) ?>" class="btn see-more-btn">Diskon | Rp. <?= number_format($value->promo, 0) ?> <br> Menjadi | Rp. <?= number_format($value->harga - $value->promo, 0) ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ##### Featured Artist Area Start ##### -->
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/bg-4.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/bmth.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                                       <div class="section-heading white text-left mb-30">
                        <p>Bring Me The Horizon</p>
                        <h2>"Drown"</h2>
                    </div>
                                      <div class="song-play-area">
                        <div class="song-name">
                            <p>Bring Me The Horizon-Drown</p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/bmth.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Artist Area End ##### -->


<!-- ##### Miscellaneous Area Start ##### -->
<section class="miscellaneous-area section-padding-100-0">
    <div class="container">
        <div class="row">
           
            <div class="col-12 col-lg-4">
                <div class="weeks-top-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                       <!--  <p>See what’s new</p> -->
                        <h2>This week’s top</h2>
                    </div>

                    
                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt1.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>Sam Smith</h6>
                            <p>Underground</p>
                        </div>
                    </div>

                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt2.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>Power Play</h6>
                            <p>In my mind</p>
                        </div>
                    </div>

                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt3.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>Cristinne Smith</h6>
                            <p>My Music</p>
                        </div>
                    </div>

               
                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt4.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>The Music Band</h6>
                            <p>Underground</p>
                        </div>
                    </div>

               
                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt5.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>Creative Lyrics</h6>
                            <p>Songs and stuff</p>
                        </div>
                    </div>

                    
                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt6.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6>The Culture</h6>
                            <p>Pop Songs</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                       <!--  <p>See what’s new</p> -->
                        <h2>New Hits</h2>
                    </div>

                    
                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt7.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Sam Smith</h6>
                                <p>Underground</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>

                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt8.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Power Play</h6>
                                <p>In my mind</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>

                 
                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt9.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Cristinne Smith</h6>
                                <p>My Music</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>

                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt10.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Music Band</h6>
                                <p>Underground</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>

                    
                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt11.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Creative Lyrics</h6>
                                <p>Songs and stuff</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>

                   
                    <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                        <div class="first-part d-flex align-items-center">
                            <div class="thumbnail">
                                <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/wt12.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Culture</h6>
                                <p>Pop Songs</p>
                            </div>
                        </div>
                        <!-- <audio preload="auto" controls>
                            <source src="<?= base_url() ?>one-music-gh-pages/audio/dummy-audio.mp3">
                        </audio> -->
                    </div>
                </div>
            </div>

           
            <div class="col-12 col-lg-4">
                <div class="popular-artists-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        
                        <h2>Popular Artist</h2>
                    </div>

                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa1.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>Sam Smith</p>
                        </div>
                    </div>

                 
                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa2.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>William Parker</p>
                        </div>
                    </div>

                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa3.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>Jessica Walsh</p>
                        </div>
                    </div>

                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa4.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>Tha Stoves</p>
                        </div>
                    </div>

                    
                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa5.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>DJ Ajay</p>
                        </div>
                    </div>

                    
                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa6.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>Radio Vibez</p>
                        </div>
                    </div>

                   
                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                        <div class="thumbnail">
                            <img src="<?= base_url() ?>one-music-gh-pages/img/bg-img/pa7.jpg" alt="">
                        </div>
                        <div class="content-">
                            <p>Music 4u</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> --> --> -->

<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(<?= base_url() ?>one-music-gh-pages/img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>