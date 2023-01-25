<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_logo_web/') . $logo_web['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $logo_web['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Logo</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $logo_web['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('/wedding-2/images/wedding/wedding-1/logo/') . $logo_web['image']; ?>" class="img-thumbnail" alt="">
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
                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/logo_web') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>

                <p class="text-danger font-weight-bold">Notes: <a href="#" target="_blank">Dimensi untuk logo web Mobile & Desktop harus 147x30p</a></p>
            </form>
        </div>
    </div>
</div>