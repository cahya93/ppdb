<div class="card card-info col-lg-6">
    <div class="card-header ">
        <h3 class="card-title">Verifikasi <b><?= $siswa['nama_siswa']; ?></b></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <form method="post" action="" class="form-horizontal">
        <div class="card-body">
            <h3><b>DATA PRIBADI</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">No. Pendaftaran</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="id" value="<?= $siswa['id']; ?>/PAN.PPDB/2020" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">NISN</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $siswa['nama_siswa']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Verifikasi</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status_pendaftaran" name="status_pendaftaran">
                        <?php foreach ($verifikasi as $d) : ?>
                            <?php if ($d == $siswa['status_pendaftaran']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="verifikasi" class="btn btn-info float-right">Verifikasi</button>

        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->