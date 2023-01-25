<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_social/') . $social_media['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $social_media['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Social Media</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $social_media['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="sosmed">Link Social Media</label>
                    <input type="text" class="form-control form-control-user" id="sosmed" name="sosmed" value="<?= $social_media['sosmed']; ?>">
                    <?= form_error('sosmed', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control form-control-user" id="icon" name="icon" value="<?= $social_media['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <p class="text-right">More Icon ? <a href="https://fontawesome.com/icons?d=gallery&p=2&q=youtube&m=free" target="_blank">Font Awesome Icon</a></p>
                <p class="text-right">Sematkan Whatsapp <a href="https://faq.whatsapp.com/general/chats/how-to-use-click-to-chat/?lang=id" target="_blank">Bantuan WA</a></p>

                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/social_media') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>