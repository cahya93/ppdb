<!-- <?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?> -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title" style="text-transform: uppercase;">SURAT PERNYATAAN</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSatu">DATA SISWA</a>
                                    </h4>
                                </div>
                                <div id="collapseSatu" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>NISN :</label>
                                            <input class="form-control" type="text" name="nisn" id="nisn" value="<?= set_value('nisn'); ?>" placeholder="Masukan NISN">
                                            <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
                                            </>
                                            <div class="form-group">
                                                <label>Nama Siswa :</label>
                                                <input class="form-control" placeholder="Nama siswa" id="nama_siswa" name="nama_siswa" value="<?= set_value('nama_siswa'); ?>">
                                                <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label> Jenis Kelamin : </label>
                                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                                                    <?php foreach ($jk as $d) : ?>
                                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>Asal Sekolah: </label>
                                                <input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah" placeholder="Masukan Nama Sekolah" value="<?= set_value('nama_sekolah'); ?>">
                                                <small class="form-text text-danger"><?= form_error('nama_sekolah'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>No. Hp Siswa : </label>
                                                <input class="form-control" type="text" name="hp_siswa" id="hp_siswa" maxlength="12" min="11" placeholder="Masukan No Hp Siswa" value="<?= set_value('hp_siswa'); ?>">
                                                <small class="form-text text-danger"><?= form_error('hp_siswa'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Batas -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTiga">DATA PENANGGUNGJAWAB</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTiga" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <!-- /.Data Ayah -->
                                            <div class="form-group">
                                                <label>Nama : </label>
                                                <input class="form-control" type="text" name="nama_pernyataan" id="nama_pernyataan" maxlength="30" minlength="3" placeholder="Masukan Nama Anda" required="" value="<?= set_value('nama_pernyataan'); ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label> Jenis Kelamin : </label>
                                                <select class="form-control" name="jenis_kelamin_pernyataan" id="jenis_kelamin_pernyataan" value="<?= set_value('jenis_kelamin_pernyataan'); ?>">
                                                    <?php foreach ($jk as $d) : ?>
                                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat : </label>
                                                <input id="alamat_pernyataan" name="alamat_pernyataan" class="form-control" placeholder="Masukan ALamat Siswa" value="<?= set_value('alamat_pernyataan'); ?>"></input>
                                                <small class="form-text text-danger"><?= form_error('alamat_pernyataan'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan :</label>
                                                <select class="form-control" name="pekerjaan_pernyataan" id="pekerjaan_pernyataan" required="">
                                                    <?php foreach ($pekerjaan as $d) : ?>
                                                        <option value="<?= $d; ?>"><?= $d; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>No.Tlp/Hp : </label>
                                                <input class="form-control" type="text" name="hp_pernyataan" id="hp_pernyataan" maxlength="12" min="11" placeholder="Masukan No Tlp. yang dapat dihubungi" value="<?= set_value('hp_pernyataan'); ?>" onkeypress="return Angkasaja(event)" required="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
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