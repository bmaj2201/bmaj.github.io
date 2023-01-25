<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">

        <div class="col-lg-6">
            <?= $this->session->flashdata('pesan'); ?>
            <!-- Default Card Example -->
            <?php foreach ($logo_web as $lw) : ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $lw['nama']; ?></h6>
                    </div>
                    <div class="col-sm text-center">
                        <img src="<?= base_url('/wedding-2/images/wedding/wedding-1/logo/') . $lw['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_logo_web/') . $lw['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <p class="text-danger font-weight-bold">Notes: <a href="#" target="_blank">Dimensi untuk logo web Mobile & Desktop harus 147x30p</a></p>

</div>