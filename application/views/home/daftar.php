<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title" style="text-transform: uppercase;">Formulir Pendaftaran Siswa</h4>
        </div>
        <div class="panel-body">
            <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?> -->
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSatu">DATA SISWA #1</a>
                                    </h4>
                                </div>
                                <div id="collapseSatu" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>NISN :</label>
                                            <input class="form-control" type="text" name="nisn" id="nisn" value="<?= set_value('nisn'); ?>" placeholder="Masukan NISN">
                                            <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
                                        </div>
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
                                            <label>Tempat Lahir :</label>
                                            <input class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
                                            <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir :</label>
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="tanggal form-control" value="<?= set_value('tanggal_lahir'); ?>">
                                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama:</label>
                                            <select class="form-control" name="agama_siswa" id="agama_siswa" value="<?= set_value('agama_siswa'); ?>">
                                                <?php foreach ($agama as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('agama_siswa'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Dalam Keluarga:</label>
                                            <select class="form-control" name="status_keluarga" id="status_keluarga" value="<?= set_value('status_keluarga'); ?>">
                                                <?php foreach ($status_keluarga as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('status_keluarga'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Siswa : </label>
                                            <input id="alamat_siswa" name="alamat_siswa" class="form-control" placeholder="Masukan ALamat Siswa" value="<?= set_value('alamat_siswa'); ?>"></input>
                                            <small class="form-text text-danger"><?= form_error('alamat_siswa'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Hp Siswa : </label>
                                            <input class="form-control" type="text" name="hp_siswa" id="hp_siswa" maxlength="12" min="11" placeholder="Masukan No Hp Siswa" value="<?= set_value('hp_siswa'); ?>">
                                            <small class="form-text text-danger"><?= form_error('hp_siswa'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Prestasi -->
                            <div class=" panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseDua">DATA PRESTASI #2</a>
                                    </h4>
                                </div>
                                <div id="collapseDua" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Prestasi 1 : </label>
                                            <input class="form-control" type="text" name="prestasi1" id="prestasi1" value="<?= set_value('prestasi1'); ?>" placeholder="Prestasi Anda">
                                            <select class="form-control" name="tingkat1" id="tingkat1" value="<?= set_value('tingkat1'); ?>">
                                                <?php foreach ($tingkat as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prestasi 2 : </label>
                                            <input class="form-control" type="text" name="prestasi2" id="prestasi2" value="<?= set_value('prestasi2'); ?>" placeholder="Prestasi Anda">
                                            <select class="form-control" name="tingkat2" id="tingkat2" value="<?= set_value('tingkat2'); ?>">
                                                <?php foreach ($tingkat as $d) : ?>
                                                    <option value=" <?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prestasi 3 : </label>
                                            <input class="form-control" type="text" name="prestasi3" id="prestasi3" value="<?= set_value('prestasi3'); ?>" placeholder="Prestasi Anda">
                                            <select class="form-control" name="tingkat3" id="tingkat3" value="<?= set_value('tingkat3'); ?>">
                                                <?php foreach ($tingkat as $d) : ?>
                                                    <option value=" <?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.Batas Accordion per baris -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTiga">DATA ORANG TUA #3</a>
                                    </h4>
                                </div>
                                <div id="collapseTiga" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <!-- /.Data Ayah -->
                                        <div class="form-group">
                                            <label>Nama Ayah : </label>
                                            <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value="<?= set_value('nama_ayah'); ?>" placeholder="Masukan Nama Ayah">
                                            <small class="form-text text-danger"><?= form_error('nama_ayah'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Ayah:</label>
                                            <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" value="<?= set_value('pendidikan_ayah'); ?>">
                                                <?php foreach ($pendidikan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('pendidikan_ayah'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah:</label>
                                            <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?= set_value('pekerjaaan_ayah'); ?>">
                                                <?php foreach ($pekerjaan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Ayah:</label>
                                            <select class="form-control" name="penghasilan_ayah" id="penghasilan_ayah" value="<?= set_value('penghasilan_ayah'); ?>">
                                                <?php foreach ($penghasilan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No.Tlp/Hp Ayah : </label>
                                            <input class="form-control" type="text" name="hp_ayah" id="hp_ayah" maxlength="12" min="11" value="<?= set_value('hp_ayah'); ?>" placeholder="Masukan No Tlp. Ayah yang dapat dihubungi">
                                        </div>
                                        <!-- /.Data Ibu -->

                                        <div class="form-group">
                                            <label>Nama Ibu : </label>
                                            <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Masukan Nama Ibu" value="<?= set_value('nama_ibu'); ?>">
                                            <small class="form-text text-danger"><?= form_error('nama_ibu'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Ibu:</label>
                                            <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" value="<?= set_value('pendidikan_ibu'); ?>">
                                                <?php foreach ($pendidikan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan ibu:</label>
                                            <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu'); ?>">
                                                <?php foreach ($pekerjaan as $d) : ?>
                                                    <option value=" <?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Ibu:</label>
                                            <select class="form-control" name="penghasilan_ibu" id="penghasilan_ibu" value="<?= set_value('penghasilan_ibu'); ?>">
                                                <?php foreach ($penghasilan as $d) : ?>
                                                    <option value=" <?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No.Tlp/Hp ibu : </label>
                                            <input class="form-control" type="text" name="hp_ibu" id="hp_ibu" maxlength="12" min="11" placeholder="Masukan No Tlp. Ibu yang dapat dihubungi" value="<?= set_value('hp_ibu'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.Batas Accordion per baris -->
                            <div class=" panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEmpat">DATA WALI #3</a>
                                    </h4>
                                </div>
                                <div id="collapseEmpat" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Data wali diisi jika memang ada wali, jika tidak ada tidak perlu diisi. Wali adalah selain Ayah dan Ibu yang ikut membantu pendidikan Anda. Pilihan ini bersifat optional.
                                        <div class="form-group">
                                            <label>Nama Wali : </label>
                                            <input class="form-control" type="text" name="nama_wali" id="nama_wali" placeholder="Masukan Nama Wali" value="<?= set_value('nama_wali'); ?>">
                                        </div>
                                        <div class=" form-group">
                                            <label>Pendidikan Wali:</label>
                                            <select class="form-control" name="pendidikan_wali" id="pendidikan_wali" value="<?= set_value('pendidikan_wali'); ?>">
                                                <?php foreach ($pendidikan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Wali:</label>
                                            <select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali" value="<?= set_value('pekerjaan_wali'); ?>">
                                                <?php foreach ($pekerjaan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Penghasilan Wali:</label>
                                            <select class="form-control" name="penghasilan_wali" id="penghasilan_wali" value="<?= set_value('penghasilan_wali'); ?>">
                                                <?php foreach ($penghasilan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No.Tlp/Hp Wali : </label>
                                            <input class="form-control" type="text" name="hp_wali" id="hp_wali" maxlength="12" min="11" placeholder="Masukan No Tlp. Ayah yang dapat dihubungi" value="<?= set_value('hp_wali'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.Batas Accordion per baris -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseLima">DATA SEKOLAH #5</a>
                                    </h4>
                                </div>
                                <div id="collapseLima" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        No HP Wali Kelas SMP tidak wajib di isi jika memang tidak hafal.
                                        <div class="form-group">
                                            <label>Asal Sekolah: </label>
                                            <input class="form-control" type="text" name="nama_sekolah" id="nama_sekolah" placeholder="Masukan Nama Sekolah" value="<?= set_value('nama_sekolah'); ?>">
                                            <small class="form-text text-danger"><?= form_error('nama_sekolah'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Sekolah</label>
                                            <select class="form-control" name="status_sekolah" id="status_sekolah" minlength="3" maxlength="20">
                                                <?php foreach ($status_sekolah as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Sekolah : </label>
                                            <textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control" maxlength="100" minlength="3" rows="3" value="<?= set_value('alamat_sekolah'); ?>" placeholder="Masukan Alamat Sekolah"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lulus: </label>
                                            <input class="form-control" type="text" maxlength="4" minlength="4" name="tahun_lulus" id="tahun_lulus" value="<?= set_value('tahun_lulus'); ?>" placeholder="Masukan Tahun Lulus">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wali Kelas : </label>
                                            <input class="form-control" type="text" maxlength="30" name="nama_wali_kelas" id="nama_wali_kelas" placeholder="Masukan Nama Wali Kelas di SMP" value="<?= set_value('nama_wali_kelas'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>No HP Wali Kelas SMP: </label>
                                            <input class="form-control" type="text" name="hp_wali_kelas" id="hp_wali_kelas" maxlength="12" min="11" placeholder="Masukan No HP Wali Kelas di SMP" value="<?= set_value('hp_wali_kelas'); ?>">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- /.Jurusan dan Mediator -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEnam">JURUSAN DAN MEDIATOR #6</a>
                                    </h4>
                                </div>
                                <div id="collapseEnam" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Pilih Jurusan</label>
                                            <select class="form-control" name="jurusan" id="jurusan" minlength="3">
                                                <?php foreach ($jurusan as $d) : ?>
                                                    <option value="<?= $d; ?>"><?= $d; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mediator : </label>
                                            <input class="form-control" type="text" maxlength="30" name="nama_mediator" id="nama_mediator" placeholder="Masukan Nama Mediator" value="<?= set_value('nama_mediator'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Mediator : </label>
                                            <textarea id="alamat_mediator" name="alamat_mediator" class="form-control" maxlength="100" minlength="3" rows="3" value="<?= set_value('alamat_mediator'); ?>" placeholder="Masukan Alamat Mediator"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.Panel Group accordion Batas Akhir -->
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