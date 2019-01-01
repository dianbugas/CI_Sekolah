<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data ustadz
                <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> 
    </div> -->
    <?php endif; ?>    

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>ustadz/tambah" class="btn btn-primary">Tambah Data Ustadz</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data Ustadz" name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="row mt-3">
            <div class="col-md-6">
            <h3>Daftar Ustadz</h3>
            <?php if (empty($ustadz)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Ustadz tidak ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($ustadz as $ust) : ?>
                <li class="list-group-item"><?= $ust['nama']; ?>
                <a href="<?= base_url(); ?>/ustadz/hapus/<?= $ust['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                <a href="<?= base_url(); ?>/ustadz/ubah/<?= $ust['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                <a href="<?= base_url(); ?>/ustadz/detail/<?= $ust['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>