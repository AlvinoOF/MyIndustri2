<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Aplikasi</h1>

    <form action="/masterappsrole/update" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="id_apps_role" class="col-sm-2 col-form-label"><b>ID Role</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_apps_role" value=" <?= $tbl_apps_role[0]->id_apps_role; ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="role" name="role" value="<?= old('role'); ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" value="<?= old('status'); ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <br><br>
    <a href="/masterappsrole">
        <--- Kembali</a>
            <?= $this->endSection(); ?>