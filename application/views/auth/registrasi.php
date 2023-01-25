<!-- Start Sign In Area -->
<section class="user-area-style log-in-area ptb-100">
    <div class="container">
        <div class="contact-form-action shadow-lg mb-0">
            <div class="section-title">
                <h2>Create An Account!</h2>
            </div>
            <form method="post" action="<?= base_url('auth/registrasi'); ?>">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="password2" placeholder="Confirm Password">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="default-btn two" type="submit">
                            Register Now
                        </button>
                    </div>

                    <div class="col-12">
                        <span class="or">or</span>
                    </div>

                    <div class="col-12">
                        <a href="<?= base_url('auth'); ?>" class="default-btn two">
                            Log In
                        </a>
                        <a href="<?= base_url('/'); ?>" class="default-btn two mt-2">
                            Kembali Ke Website
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Sign In Area -->