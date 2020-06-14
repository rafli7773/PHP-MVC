<div class="container mt-3">
    <div class="row">
        <div class="col-md-6"><?php Flasher::flash() ?></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tampilModalTambah" data-toggle="modal" data-target="#formModal">
                Tambah Data Siswa
            </button></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari siswa.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Siswa</li>
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item"><?= $siswa['nama']; ?>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-primary ml-2 float-right">Detail</a>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-danger ml-2 float-right hapus">Hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge badge-success ml-2 float-right tampilModalUbah" data-target="#formModal" data-toggle="modal" data-id="<?= $siswa['id']; ?>">Ubah
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nik">No Induk</label>
                        <input type="number" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option>None</option>
                            <option>RPL</option>
                            <option>TPM</option>
                            <option>KI</option>
                            <option>TKR</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>