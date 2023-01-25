<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_judul/') . $hero_judul['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $hero_judul['id']; ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="<?= $hero_judul['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="text">Text</label>
                    <input type="text" class="form-control form-control-user" id="text" name="text" value="<?= $hero_judul['text']; ?>">
                    <?= form_error('text', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="paragraph">Paragraph</label>
                    <textarea class="form-control" name="paragraph" id="paragraph" cols="10" rows="10">
                    <?= $hero_judul['paragraph']; ?>
                    </textarea>
                    <?= form_error('paragraph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/slider_image') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>