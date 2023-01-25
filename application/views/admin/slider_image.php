<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahsliderModal"> Tambah</button>
    </div>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">

        <?php foreach ($hero_image as $hi) : ?>
            <div class="col-lg-4">

                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $hi['nama']; ?></h6>
                    </div>
                    <div class="col-sm text-center">
                        <img src="<?= base_url('wedding-2/images/wedding/wedding-1/') . $hi['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_slider/') . $hi['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-sm btn-warning" onclick="return confirm('apakah anda yakin');" href=" <?= base_url('admin/delete_slider/') . $hi['id']; ?>"><i class="fas fa-edit"></i> Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Basic Card Example -->
    <div class="row">
        <div class="col-lg">
            <?php foreach ($hero_judul as $hj) : ?>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $hj['judul']; ?></h6>
                    </div>
                    <div class="card-body">
                        <?= $hj['paragraph']; ?>
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_judul/') . $hj['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>


</div>

</div>




<!-- Modal tambah about -->
<div class="modal fade" id="tambahsliderModal" tabindex="-1" aria-labelledby="tambahsliderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahsliderModalLabel">Tambah Slider Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/slider_image'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Gambar Slider">
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