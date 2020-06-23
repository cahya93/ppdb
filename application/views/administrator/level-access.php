<div class="col-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Menu User Management</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <h5>Level : <?= $level['level']; ?></h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Menu</th>
                        <th>Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($menu as $l) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $l['menu']; ?></td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input class="form-check-input" type="checkbox" <?= check_access($level['id'], $l['id']); ?>>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>