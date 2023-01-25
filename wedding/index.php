<!-- Slider -->
<?php foreach ($hero_image as $hi) : ?>
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/') . $hi['image']; ?>" data-stellar-background-ratio="0.8">

        <!-- Over -->
        <div class="gla_over" data-color="#1e1d2d" data-opacity="0.2"></div>


        <div class="container">


            <!-- Slider Texts -->
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                <?= $this->session->flashdata('pesan'); ?>
                <?php foreach ($mempelai as $m) : ?>
                    <div class="gla_flower gla_flower2">
                        <div class="gla_flower2_name_l"><?= $m['nama_pr']; ?> <b><?= $m['save_the_date']; ?></b></div>
                        <div class="gla_flower2_name_r"><?= $m['nama_lk']; ?> <b><?= $m['tanggal']; ?></b></div>
                        <img src="<?= base_url('wedding-2/images/wedding/wedding-1/mempelai/') . $m['image']; ?>" alt="">
                    </div>
                <?php endforeach; ?>


            </div>
            <!-- Slider Texts End -->

        </div>
        <!-- container end -->



        <!-- Slide Down -->
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>


    </div>
<?php endforeach; ?>
<!-- Slider End -->

<!-- Content -->
<section id="gla_content" class="gla_content">


    <!-- section -->
    <section class="gla_section gla_image_bck" data-color="#fafafd">

        <!-- judul dan ucapan dari kedua mempelai -->
        <?php foreach ($hero_judul as $hj) : ?>
            <div class="container text-center">
                <p><img src="<?= base_url('wedding-2/'); ?>images/animations/flower5.gif" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/flower5.gif; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
                <h2><?= $hj['judul']; ?></h2>
                <h3 class="gla_subtitle"><?= $hj['text']; ?></h3>

                <p><?= $hj['paragraph']; ?></p>

            </div>
        <?php endforeach; ?>
        <!-- container end -->

    </section>
    <!-- section end -->


    <!-- section -->
    <?php foreach ($banner_1 as $b_1) : ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/') . $b_1['image']; ?>">

            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>

            <!-- tanggan dan hitung mundur acara -->
            <?php foreach ($mempelai as $m) : ?>
                <div class="container text-center">
                    <p><img src="<?= base_url('wedding-2/'); ?>images/animations/savethedate_wh.gif" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/savethedate_wh.gif" height="150" alt=""></p>
                    <h2><?= $m['tanggal']; ?></h2>
                    <h3 class="gla_subtitle"><?= $m['alamat']; ?></h3>

                    <!-- hitung mundur -->
                    <?php foreach ($hitung_mundur as $hm) : ?>
                        <div class="gla_countdown" data-year="<?= $hm['tahun']; ?>" data-month="<?= $hm['bulan']; ?>" data-day="<?= $hm['hari']; ?>">
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endforeach; ?>
            <!-- container end -->

        </section>
    <?php endforeach; ?>
    <!-- section end -->


    <!-- section -->
    <section class="gla_section">


        <div class="container text-center">
            <?php foreach ($wedding_detail as $wd) : ?>
                <p><img src="<?= base_url('wedding-2/'); ?>images/animations/flower6.gif" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2><?= $wd['judul']; ?></h2>
                <h3 class="gla_subtitle"><?= $wd['text']; ?></h3>
                <p><?= $wd['paragraph']; ?></p>

            <?php endforeach; ?>

            <div class="row text-center">
                <?php foreach ($akad as $a) : ?>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/akad/') . $a['image']; ?>"></div>
                        <h3><?= $a['judul']; ?></h3>
                        <p><?= $a['jam']; ?><br>
                            <?= $a['alamat']; ?><br>
                            <?= $a['no_hp']; ?> </p>
                        <a href="<?= $a['link_maps']; ?>" target="_blank" class="btn">View Map</a>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
        <!-- container end -->

    </section>
    <!-- section end -->


    <!-- section -->
    <?php foreach ($hero_image as $hi) : ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/') . $hi['image']; ?>">

            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>

            <div class="container text-center">
                <p><img src="<?= base_url('wedding-2/'); ?>images/animations/rsvp_wh.gif" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/rsvp_wh.gif" height="200" alt=""></p>

                <div class="row">
                    <div class="col-md-8 col-md-push-2">

                        <?= $this->session->flashdata('pesan'); ?>

                        <form action="<?= base_url('wedding/index'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama*</label>
                                    <input type="text" name="nama" id="nama" class="form-control form-opacity">
                                </div>
                                <div class="col-md-6">
                                    <label>Alamat*</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control form-opacity">
                                </div>
                                <center>
                                    <div class="col-md-6">
                                        <label for="hadir_tidak">Apa anda akan hadir?</label>

                                        <input type="radio" name="hadir_tidak" id="hadir_tidak" value="Iya, Aku akan datang">
                                        <span>Iya, Aku akan datang</span><br>
                                        <input type="radio" name="hadir_tidak" id="hadir_tidak" value="Maaf, Aku tidak bisa hadir">
                                        <span>Maaf, Aku tidak bisa hadir</span>
                                    </div>
                                </center>
                                <div class="col-md-12">
                                    <label>Ucapkan Selamat Kepada Mempelai</label>
                                    <textarea name="ucapan" id="ucapan" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn submit" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- container end -->

        </section>
    <?php endforeach; ?>
    <!-- section end -->


    <!-- section -->
    <section class="gla_section gla_image_bck" data-color="#fff">


        <div class="container text-center">

            <h2>Dhegez & Arum</h2>

            <!-- filters -->
            <div class="button-group filter-button-group">
                <a data-filter="*">Show All</a>
                <a data-filter=".groomsmen">Album Foto</a>
               
            </div>
            <!-- filters end -->

            <!-- grid -->
            <div class="gla_portfolio_no_padding grid">

                <!-- pihak perempuan -->
                <?php foreach ($perempuan as $pr) : ?>
                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="<?= base_url('wedding-2/images/wedding/wedding-1/perempuan/') . $pr['image']; ?>" class="lightbox">
                                <img src="<?= base_url('wedding-2/images/wedding/wedding-1/perempuan/') . $pr['image']; ?>" alt="">
                            </a>

                            <a href="#" class="gla_shop_item_title">
                                <?= $pr['nama']; ?>
                            </a>

                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- pihak laki-laki -->
                <?php foreach ($laki as $lk) : ?>
                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="<?= base_url('wedding-2/images/wedding/wedding-1/laki-laki/') . $lk['image']; ?>" class="lightbox">
                                <img src="<?= base_url('wedding-2/images/wedding/wedding-1/laki-laki/') . $lk['image']; ?>" alt="">
                            </a>

                            <a href="#" class="gla_shop_item_title">
                                <?= $lk['nama']; ?>
                            </a>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- grid end -->



        </div>
        <!-- container end -->

    </section>
    <!-- section end -->







    <!-- section -->
    <?php foreach ($banner_utama as $b_u) : ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/thanks/') . $b_u['image']; ?>">

            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            <!-- animasi menggunakan gambar gif -->
            <div class="container text-center">
                <p><img src="<?= base_url('wedding-2/'); ?>images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/thnyou_wh.gif"></p>
                <h3><?= $b_u['link']; ?></h3>



            </div>
            <!-- container end -->

        </section>
    <?php endforeach; ?>
    <!-- section end -->


</section>
<!-- Content End -->