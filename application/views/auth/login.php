<?php foreach ($hero_image as $hi) : ?>
    <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="<?= base_url('wedding-2/images/wedding/wedding-1/') . $hi['image']; ?>">

        <!-- Over -->
        <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>


        <div class="container text-center">
            <p><img src="<?= base_url('wedding-2/'); ?>images/animations/rsvp_wh.gif" data-bottom-top="@src:<?= base_url('wedding-2/'); ?>images/animations/rsvp_wh.gif" height="200" alt=""></p>

            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <p> <?= $this->session->flashdata('pesan'); ?></p>
                    <form action="<?= base_url('auth'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email*</label>
                                <input type="text" name="email" id="email" class="form-control form-opacity">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label>Password*</label>
                                <input type="password" name="password" id="password" class="form-control form-opacity">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="col-md-12">
                                <input type="submit" class="btn submit" value="Login">
                                <a href="<?= base_url('/'); ?>" class="btn submit"> Back to Wedding</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <!-- container end -->

    </section>
<?php endforeach; ?>