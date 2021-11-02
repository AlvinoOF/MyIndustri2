<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Aplikasi</h2>

            <form action="/masteraplikasi/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="nama_apps" class="col-sm-2 col-form-label">Nama Aplikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_apps" name="nama_apps" value="<?= old('nama_apps'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="link_apps" class="col-sm-2 col-form-label">Link Aplikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_apps" name="link_apps" value="<?= old('link_apps'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status_apps" class="col-sm-2 col-form-label">Status Aplikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status_apps" name="status_apps" value="<?= old('status_apps'); ?>">
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