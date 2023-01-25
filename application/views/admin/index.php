<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h3><?= $title1; ?></h3>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengunjung Hari ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengunjunghariini ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengunjung Online</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengunjungonline ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wifi fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pengunjung</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $totalpengunjung ?> orang</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="sidebar-divider">

    <h3><?= $title5; ?></h3>
    <div class="row">

        <div class="card-body">
            <div class="table-responsive table-hover">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <?= $this->session->flashdata('pesan'); ?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tamu</th>
                            <th>Alamat</th>
                            <th>Hadir/Tidak</th>
                            <th>Makes</th>
                            <th>Ucapan</th>
                        </tr>
                    <tbody>
                        <div hidden>
                            <?= $i = 1; ?>
                        </div>
                        <?php foreach ($rsvp as $rs) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $rs['nama']; ?></td>
                                <td><?= $rs['alamat']; ?></td>
                                <td><?= $rs['hadir_tidak']; ?></td>
                                <td><?= $rs['makes']; ?></td>
                                <td><?= $rs['ucapan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <hr class="sidebar-divider">

    <h3><?= $title3; ?></h3>
    <div class="row">

        <?php foreach ($hero_image as $hi) : ?>
            <div class="col-lg-6">

                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $hi['nama']; ?></h6>
                    </div>
                    <div class="col-sm text-center">
                        <img src="<?= base_url('/wedding-2/images/wedding/wedding-1/') . $hi['image']; ?>" class="img-thumbnail" alt="">
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/slider_image/'); ?>"><i class="far fa-eye"></i> Lihat</a>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($hero_judul as $hj) : ?>
            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $hj['judul']; ?></h6>
                    </div>
                    <div class="card-body">
                        <?= $hj['paragraph']; ?>
                    </div>
                    <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/slider_image/'); ?>"><i class="far fa-eye"></i> Lihat</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <hr class="sidebar-divider">

    <h3><?= $title2; ?></h3>
    <div class="row">

        <!-- Border Bottom Utilities -->
        <?php foreach ($social_media as $sm) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $sm['nama']; ?></h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapseCardExample">
                        <div class="card-body text-center">
                        </div>
                        <div class="card-body border-bottom-primary">
                            <label class="font-weight-bold" for="nama">Nama Social Media</label>
                            <p class="mb-4"><?= $sm['nama']; ?> </p>

                            <label class="font-weight-bold" for="sosmed">Link Sosmed</label>
                            <p class="mb-4"><?= $sm['sosmed']; ?> </p>

                            <label class="font-weight-bold" for="icon">Icon</label>
                            <p class="mb-4"><?= $sm['icon']; ?> </p>
                            <a class="btn btn-sm btn-warning" href=" <?= base_url('admin/social_media'); ?>"><i class="far fa-eye"></i> Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->