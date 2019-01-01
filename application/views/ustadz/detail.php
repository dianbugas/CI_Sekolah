<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text"><?= $ustadz['nrp']; ?></p>
                    <h5 class="card-title"><?= $ustadz['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $ustadz['alamat']; ?></h6>
                    <a href="<?= base_url(); ?>ustadz/" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>