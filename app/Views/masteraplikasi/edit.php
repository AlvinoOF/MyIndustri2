<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Aplikasi</h1>

    <form action="/masteraplikasi/update_aplikasi" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="nama_aplikasi" class="col-sm-2 col-form-label">Nama Aplikasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" value="<?= old('nama_aplikasi'); ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="role_aplikasi" class="col-sm-2 col-form-label">Role Aplikasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="role_aplikasi" name="role_aplikasi" value="<?= old('role_aplikasi'); ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <br><br>
    <a href="/masteraplikasi">
        <--- Kembali</a>
            <?= $this->endSection(); ?>