<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-5">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $mahasiswa as $mhs) : ?>
                <li class="list-group-item"><?= $mhs['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>