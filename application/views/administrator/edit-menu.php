<div class="card card-info col-lg-6">
    <div class="card-header">
        <h3 class="card-title">Edit Menu <?= $menu['menu']; ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="" class="form-horizontal">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Menu</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->