<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">

        <div class="col-lg">
            <?= $this->session->flashdata('pesan'); ?>
            <!-- Default Card Example -->
            <?php foreach ($promo as $p) : ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $p['judul_promo']; ?></h6>
                    </div>

                    <div class="card-body">
                        <label for="slogan" class="font-weight-bold"> Slogan</label>
                        <p class="text-danger"><?= $p['slogan']; ?></p>
                    </div>

                    <div class="col-sm text-center">
                        <img src="<?= base_url('/front-end/assets/img/promo/') . $p['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_promo/') . $p['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <p class="text-danger font-weight-bold">Notes: <a href="#" target="_blank">Dimensi untuk sponsor web Mobile & Desktop harus 1000x1000p</a></p>

</div>