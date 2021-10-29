<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Aplikasi</h2>

            <form action="/masteraplikasi/save_aplikasi" method="post" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/masteraplikasi">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>