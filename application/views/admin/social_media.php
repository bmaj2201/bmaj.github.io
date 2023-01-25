<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahsocialModal"> Tambah</button>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <!-- Content Row -->
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
                            <a class="btn btn-sm btn-primary" href=" <?= base_url('admin/edit_social/') . $sm['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin');" href=" <?= base_url('admin/delete_social/') . $sm['id']; ?>"><i class="fas fa-trash-alt"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>



<!-- Modal tambah contact -->
<div class="modal fade" id="tambahsocialModal" tabindex="-1" aria-labelledby="tambahsocialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahsocialModalLabel">Tambah Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/social_media'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Sosmed">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Link Sosmed">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
                    </div>
                    <p class="text-right">More Icon ? <a href="https://fontawesome.com/icons?d=gallery&p=2&q=youtube&m=free" target="_blank">Font Awesome Icon</a></p>
                    <p class="text-right">Sematkan Whatsapp <a href="https://faq.whatsapp.com/general/chats/how-to-use-click-to-chat/?lang=id" target="_blank">Bantuan WA</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>