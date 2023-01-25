<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahthanksModal"> Tambah</button>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">

        <?php foreach ($banner_utama as $b_u) : ?>
            <div class="col-lg-3">

                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $b_u['nama']; ?></h6>
                    </div>
                    <div class="col-sm text-center">
                        <img src="<?= base_url('wedding-2/images/wedding/wedding-1/thanks/') . $b_u['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <div class="card-body text-center">
                        <p>Links :<?= $b_u['link']; ?></p>
                    </div>

                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_thanks/') . $b_u['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin');" href=" <?= base_url('admin/delete_thanks/') . $b_u['id']; ?>"><i class="fas fa-trash-alt"></i>Delete</a>
                </div>

            </div>
        <?php endforeach; ?>

    </div>

</div>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Modal tambah media -->
<div class="modal fade" id="tambahthanksModal" tabindex="-1" aria-labelledby="tambahthanksModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahthanksModalLabel">Tambah Gambar Ucapan Terima Kasih</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/thanks'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Ucapan Terima Kasih">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Pilih Gambar</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>