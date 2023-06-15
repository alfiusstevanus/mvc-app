<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-3">
            <button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari nama Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a class="badge text-bg-primary nav-link p-2" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>">detail</a>
                        <a class="badge text-bg-warning nav-link p-2 modalUbah" href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">ubah</a>
                        <a class="badge text-bg-danger nav-link p-2" href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="return confirm('Yakin akan dihapus?')">hapus</a>
                    </li>
                <?php endforeach ?>
            </ul>

        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nama</span>
                        <input type="text" class="form-control" placeholder="Masukan nama" aria-label="nama" aria-describedby="basic-addon1" name="nama" id="nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">NRP</span>
                        <input type="text" class="form-control" placeholder="Masukan nrp" aria-label="nrp" aria-describedby="basic-addon1" name="nrp" id="nrp">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" class="form-control" placeholder="Masukan email" aria-label="email" aria-describedby="basic-addon1" name="email" id="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jurusan">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Lingkungan">Lingkungan</option>
                            <option value="Industri">Industri</option>
                            <option value="Mesin">Mesin</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>