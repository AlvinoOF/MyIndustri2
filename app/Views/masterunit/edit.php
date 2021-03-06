<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Unit</h2>

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

                <div class="row mb-3">
                    <label for="created_by" class="col-sm-2 col-form-label">Dibuat oleh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?= old('created_by'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="updated_by" class="col-sm-2 col-form-label">Diupdate oleh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="updated_by" name="updated_by" value="<?= old('updated_by'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="deleted_by" class="col-sm-2 col-form-label">Dihapus oleh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deleted_by" name="deleted_by" value="<?= old('deleted_by'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/masterunit">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>