<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_contact/') . $contact['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $contact['id']; ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="<?= $contact['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="motto">Slug</label>
                    <input type="text" class="form-control form-control-user" id="motto" name="motto" value="<?= $contact['motto']; ?>">
                    <?= form_error('motto', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pin_maps">Pin Maps</label>
                    <input type="text" class="form-control form-control-user" id="pin_maps" name="pin_maps" value="<?= $contact['pin_maps']; ?>">
                    <?= form_error('pin_maps', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="telp">Telpon</label>
                    <input type="text" class="form-control form-control-user" id="telp" name="telp" value="<?= $contact['telp']; ?>">
                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $contact['email']; ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="embed_maps">Sematkan Maps</label>
                    <textarea class="form-control" name="embed_maps" id="embed_maps" cols="30" rows="10"><?= $contact['embed_maps']; ?></textarea>
                    <?= form_error('embed_maps', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/contact') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>