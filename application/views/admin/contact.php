<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahcontactModal"> Tambah</button>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <!-- Content Row -->
    <div class="row">

        <!-- Border Bottom Utilities -->
        <?php foreach ($contact as $c) : ?>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $c['judul']; ?></h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapseCardExample">
                        <div class="card-body text-center">
                            <iframe src="<?= $c['embed_maps']; ?>" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <label class="font-weight-bold" for="motto">Motto</label>
                            <p class="mb-4"><?= $c['motto']; ?> </p>

                            <label class="font-weight-bold" for="pin_maps">Pin Maps</label>
                            <p class="mb-4"><?= $c['pin_maps']; ?> </p>

                            <label class="font-weight-bold" for="telp">Telp</label>
                            <p class="mb-4"> Telp : <?= $c['telp']; ?> </p>

                            <label class="font-weight-bold" for="email">Email</label>
                            <p class="mb-4"> Email : <?= $c['email']; ?> </p>

                            <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_contact/') . $c['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin');" href=" <?= base_url('admin/delete_contact/') . $c['id']; ?>"><i class="fas fa-trash-alt"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>



<!-- Modal tambah contact -->
<div class="modal fade" id="tambahcontactModal" tabindex="-1" aria-labelledby="tambahcontactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahcontactModalLabel">Tambah contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/contact'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pin_maps" name="pin_maps" placeholder="Pin Maps">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" id="embed_maps" name="embed_maps" rows="10" cols="10"></textarea>
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