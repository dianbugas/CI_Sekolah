<div class="container">
    <div class="row mt-3">
            <div class="col-md-5">
            <h3>Daftar Ustadz</h3>
            <ul class="list-group">
                <?php foreach( $ustadz as $ust) : ?>
                <li class="list-group-item"><?= $ust['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>