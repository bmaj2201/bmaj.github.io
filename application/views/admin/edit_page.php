<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_page/') . $page_template['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $page_template['id']; ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="<?= $page_template['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control form-control-user" id="slug" name="slug" value="<?= $page_template['slug']; ?>">
                    <?= form_error('slug', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control form-control-user" id="harga" name="harga" value="<?= $page_template['harga']; ?>">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="version">Version</label>
                    <input type="text" class="form-control form-control-user" id="version" name="version" value="<?= $page_template['version']; ?>">
                    <?= form_error('version', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="included">File Included</label>
                    <input type="text" class="form-control form-control-user" id="included" name="included" value="<?= $page_template['included']; ?>">
                    <?= form_error('included', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="demo">Demo</label>
                    <input type="text" class="form-control form-control-user" id="demo" name="demo" value="<?= $page_template['demo']; ?>">
                    <?= form_error('demo', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control form-control-user" id="url" name="url" value="<?= $page_template['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('/assets/img/page-template/') . $page_template['image']; ?>" class="img-thumbnail" alt="weddingdigital">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">
                                        Pilih Gambar
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/page_template') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>