<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahtestimonialModal"> Tambah</button>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">

        <!-- Border Bottom Utilities -->
        <?php foreach ($testimonial as $t) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $t['nama']; ?></h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapseCardExample">
                        <div class="card-body text-center">
                            <div class="col-sm text-center">
                                <img src="<?= base_url('/front-end/assets/img/testimonial/') . $t['image']; ?>" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <label class="font-weight-bold" for="no_hp">Nomor HP</label>
                            <p class="mb-4"><?= $t['no_hp']; ?> </p>

                            <label class="font-weight-bold" for="email">Email</label>
                            <p class="mb-4"><?= $t['email']; ?> </p>

                            <label class="font-weight-bold" for="pekerjaan">Pekerjaan</label>
                            <p class="mb-4"><?= $t['pekerjaan']; ?> </p>

                            <label class="font-weight-bold" for="desk">Deskripsi</label>
                            <p class="mb-4"><?= $t['desk']; ?> </p>

                            <label class="font-weight-bold" for="desk">Dibuat</label>
                            <p class="mb-4"><?= date('l jS F Y | h : m : s', $t['created_at']); ?> </p>

                            <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_testimonial/') . $t['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin');" href=" <?= base_url('admin/delete_testimonial/') . $t['id']; ?>"><i class="fas fa-trash-alt"></i>Delete</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>

</div>



<!-- Modal tambah cv -->
<div class="modal fade" id="tambahtestimonialModal" tabindex="-1" aria-labelledby="tambahtestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahtestimonialModalLabel">Tambah Testimonial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/testimonial'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Deskripsi" name="desk" id="desk" cols="10" rows="10"></textarea>
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