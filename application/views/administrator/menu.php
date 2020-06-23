<div class="col-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menu Management</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <h2><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">Add New Menu</a></h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($menu as $m) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>administrator/editMenu/<?= $m['id']; ?>" target="_blank"><i class="fa fa-edit fa-fw" alt="data" title="Edit Data Siswa"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-trash fa-fw" alt="verifikasi" title="Verifikasi"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.card -->
</div>
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('administrator/menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu...">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->