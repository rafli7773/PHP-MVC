<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-center" style="width: 18rem;">
                <h3>Detail Siswa </h3>
                <div class="card-body">
                    <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nik']; ?></h6>
                    <p class="card-text"><?= $data['siswa']['kelas']; ?></p>
                    <p class="card-text"><?= $data['siswa']['jurusan']; ?></p>
                    <a href="<?= BASEURL; ?>/siswa" class="card-link"> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>