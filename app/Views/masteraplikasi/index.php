<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mt-3 mb-4 text-gray-800">Daftar Aplikasi</h1>

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Daftar Aplikasi</h4>
                        <div class="d-flex my-xl-auto right-content">
                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                <a href="<?= base_url('/masteraplikasi/create'); ?>" class="btn btn-success"><i class="mdi mdi-plus"></i>Tambah Aplikasi</a>
                            </div>
                            <div class="mb-3 mb-xl-0">
                                <button type="button" class="btn btn-primary"><i class="mdi mdi-refresh"></i> Refresh</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Apps</th>
                                    <th scope="col">Nama Aplikasi</th>
                                    <th scope="col">Link Aplikasi</th>
                                    <th scope="col">Status Aplikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                <?php foreach ($tbl_apps as $apps) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $apps['id_apps']; ?></td>
                                        <td><?= $apps['nama_apps']; ?></td>
                                        <td><?= $apps['link_apps']; ?></td>
                                        <td><?= $apps['status_apps']; ?></td>
                                        <td>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>

<!-- Internal Data tables -->
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.dataTables.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/responsive.dataTables.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jszip.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/pdfmake.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/vfs_fonts.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/main/'); ?>js/table-data.js"></script>