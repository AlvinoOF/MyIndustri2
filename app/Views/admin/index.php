<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mt-3 mb-4 text-gray-800">User List</h1>

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">User List</h4>
                        <div class="d-flex my-xl-auto right-content">
                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                <a href="<?= base_url('/admin/create'); ?>" class="btn btn-success"><i class="mdi mdi-plus"></i>Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x:auto;">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">KTP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NPP</th>
                                    <th scope="col">Kontrak</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tbl_user->getResult() as $user) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $user->ktp; ?></td>
                                        <td><?= $user->nama; ?></td>
                                        <td><?= $user->tempat_lahir; ?></td>
                                        <td><?= $user->tgl_lahir; ?></td>
                                        <td><?= $user->jenis_kelamin; ?></td>
                                        <td><?= $user->alamat; ?></td>
                                        <td><?= $user->tlp; ?></td>
                                        <td><?= $user->email; ?></td>
                                        <td><?= $user->npp; ?></td>
                                        <td><?= $user->kontrak; ?></td>
                                        <td><?= $user->role; ?></td>
                                        <td><?= $user->tgl_mulai; ?></td>
                                        <td><?= $user->tgl_selesai; ?></td>
                                        <td><?= $user->jabatan; ?></td>
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