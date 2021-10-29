<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Unit</h1>

    <form action="/masterunit/update" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="jenis_unit" class="col-sm-2 col-form-label">Jenis Unit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jenis_unit" name="jenis_unit" value="<?= old('jenis_unit'); ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama_unit" class="col-sm-2 col-form-label">Nama Unit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_unit" name="nama_unit" value="<?= old('nama_unit'); ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <br><br>
    <a href="/masterunit">
        <--- Kembali</a>
            <?= $this->endSection(); ?>