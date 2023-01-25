<nav class="gla_light_nav gla_transp_nav">

    <div class="container">

        <div class="gla_logo_container clearfix">
            <?php foreach ($logo_web as $lw) : ?>
                <img src="<?= base_url('wedding-2/images/wedding/wedding-1/logo/') . $lw['image']; ?>" alt="<?= $lw['nama']; ?>" class="gla_logo_rev" style="width: 130px;">
            <?php endforeach; ?>

            <?php foreach ($mempelai as $m) : ?>
                <div class="gla_logo_txt">
                    <!-- Logo -->
                    <a href="#" class="gla_logo"><?= $m['nama_pr']; ?> & <?= $m['nama_lk']; ?></a>

                    <!-- Text Logo -->
                    <div class="gla_logo_und"><?= $m['tanggal']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Menu -->
        <div class="gla_main_menu gla_main_menu_mobile">

            <div class="gla_main_menu_icon">
                <i></i><i></i><i></i><i></i>
                <b>Menu</b>
                <b class="gla_main_menu_icon_b">Back</b>
            </div>
        </div>

        <!-- Menu Content -->
        <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="<?= base_url('wedding-2/'); ?>images/wedding/lauren_affonso/14400933225_3b844816c3_k.jpg">
            <!-- Over -->
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
        </div>

        <div class="gla_main_menu_content_menu gla_wht_txt text-right">
            <div class="container">
                <ul>
                    <li class="gla_parent">
                        <a href="<?= base_url('auth'); ?>">Login</a>
                    </li>
                </ul>
                <div class="gla_main_menu_content_menu_copy">

                    <p>© bmaj <?= date('Y'); ?></p>
                    <!-- Social Buttons -->
                    <div class="gla_footer_social">
                        <?php foreach ($social_media as $sm) : ?>
                            <a href="<?= $sm['sosmed']; ?>"><i class="<?= $sm['icon']; ?>"></i></a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <!-- container end -->
        </div>
        <!-- menu content end -->

        <!-- Search Block -->
        <div class="gla_search_block">

            <div class="gla_search_block_link gla_search_parent"><i class="ti ti-search"></i>
                <ul>
                    <li>
                        <form>
                            <input type="text" class="form-control" placeholder="Enter Your Keywords">
                            <button type="submit" class="btn">
                                <i class="ti ti-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Search Block End -->

        <!-- Top Menu -->
        <div class="gla_default_menu">
            <ul>
                <li class="gla_parent"><a href="#">Login</a>
                    <ul>
                        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Top Menu End -->



    </div>
    <!-- container end -->
</nav>

</header>
<!-- Header End -->