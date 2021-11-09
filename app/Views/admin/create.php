<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah User</h2>

            <form action="/admin/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="ktp" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ktp" name="ktp">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <textarea name="tempat_lahir" class="form-control" id="tempat_lahir"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select id="jenis_kelamin" name="jenis_kelamin">
                            <options value="L">L</options>
                            <options value="P">P</options>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tlp" class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tlp" name="tlp">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="npp" class="col-sm-2 col-form-label">NPP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npp" name="npp">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kontrak" class="col-sm-2 col-form-label">Kontrak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kontrak" name="kontrak">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tgl_mulai" name="tgl_mulai">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tgl_selesai" name="tgl_selesai">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="profil_img" class="col-sm-2 col-form-label">Gambar profil</label>
                    <div class="col-sm-10">
                        <input type="image" class="form-control" id="profil_img" name="profil_img">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/admin">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>