<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
            </div>
            <form method="POST" action="<?= base_url('admin/edit_laki/') . $laki['id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $laki['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Pihak Laki-laki</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $laki['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('/wedding-2/images/wedding/wedding-1/laki-laki/') . $laki['image']; ?>" class="img-thumbnail" alt="">
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
                <p class="text-right text-danger mt-3">Usahakan mengambil gambar/foto yang bagus <a href="#" target="_blank"></a></p>

                <a class="btn btn-sm btn-info text-decoration-none" href="<?= base_url('admin/laki') ?>"> Kembali</a>
                <button type="submit" class="btn btn-sm btn-success my-3">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>