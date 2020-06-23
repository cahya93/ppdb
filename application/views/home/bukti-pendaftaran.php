<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title" style="text-transform: uppercase;">CETAK BUKTI PENDAFTARAN</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <?php echo form_open('cetakformulir/'); ?> -->
                    <form action="<?= base_url('umum/cetakformulir/'); ?>" method="get">

                        <div class="form-group">
                            <label>NISN :</label>
                            <input class="form-control" type="text" name="nisn" maxlength="10" minlength="10" placeholder="Masukan NISN" required="" />
                        </div>
                        <button type="submit" class="btn btn-primary">Cetak</button>
                        <button type="reset" class="btn btn-default">Batal</button>

                    </form>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->