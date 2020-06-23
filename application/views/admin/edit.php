<div class="card card-info col-lg-6">
    <div class="card-header ">
        <h3 class="card-title">Edit data <b><?= $siswa['nama_siswa']; ?></b></h3>
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
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $siswa['nama_siswa']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <?php foreach ($jk as $d) : ?>
                            <?php if ($d == $siswa['jenis_kelamin']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Agama Siswa</label>
                <div class="col-sm-8">
                    <select class="form-control" id="agama_siswa" name="agama_siswa">
                        <?php foreach ($agama as $d) : ?>
                            <?php if ($d == $siswa['agama_siswa']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Status Keluarga</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status_keluarga" name="status_keluarga">
                        <?php foreach ($status_keluarga as $d) : ?>
                            <?php if ($d == $siswa['status_keluarga']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Alamat Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" value="<?= $siswa['alamat_siswa']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">HP Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp_siswa" name="hp_siswa" value="<?= $siswa['hp_siswa']; ?>">
                </div>
            </div>
            <br />
            <h3><b>DATA PRESTASI</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Prestasi #1</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="prestasi1" name="prestasi1" value="<?= $siswa['prestasi1']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tingkat #1</label>
                <div class="col-sm-8">
                    <select class="form-control" id="tingkat1" name="tingkat1">
                        <?php foreach ($tingkat as $d) : ?>
                            <?php if ($d == $siswa['tingkat1']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Prestasi #2</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="prestasi2" name="prestasi2" value="<?= $siswa['prestasi2']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tingkat #2</label>
                <div class="col-sm-8">
                    <select class="form-control" id="tingkat2" name="tingkat2">
                        <?php foreach ($tingkat as $d) : ?>
                            <?php if ($d == $siswa['tingkat2']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Prestasi #3</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="prestasi3" name="prestasi3" value="<?= $siswa['prestasi3']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tingkat #3</label>
                <div class="col-sm-8">
                    <select class="form-control" id="tingkat3" name="tingkat3">
                        <?php foreach ($tingkat as $d) : ?>
                            <?php if ($d == $siswa['tingkat3']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <br />
            <h3><b>DATA ORANG TUA & WALI</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Ayah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $siswa['nama_ayah']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah">
                        <?php foreach ($pendidikan as $d) : ?>
                            <?php if ($d == $siswa['pendidikan_ayah']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                        <?php foreach ($pekerjaan as $d) : ?>
                            <?php if ($d == $siswa['pekerjaan_ayah']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Penghasilan Ayah</label>
                <div class="col-sm-8">
                    <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah">
                        <?php foreach ($penghasilan as $d) : ?>
                            <?php if ($d == $siswa['penghasilan_ayah']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">HP Ayah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp_ayah" name="hp_ayah" value="<?= $siswa['hp_ayah']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Ibu</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $siswa['nama_ibu']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu">
                        <?php foreach ($pendidikan as $d) : ?>
                            <?php if ($d == $siswa['pendidikan_ibu']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                        <?php foreach ($pekerjaan as $d) : ?>
                            <?php if ($d == $siswa['pekerjaan_ibu']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Penghasilan Ibu</label>
                <div class="col-sm-8">
                    <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu">
                        <?php foreach ($penghasilan as $d) : ?>
                            <?php if ($d == $siswa['penghasilan_ibu']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">HP Ibu</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp_ibu" name="hp_ibu" value="<?= $siswa['hp_ibu']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Wali</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $siswa['nama_wali']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pendidikan Wali</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pendidikan_wali" name="pendidikan_wali">
                        <?php foreach ($pendidikan as $d) : ?>
                            <?php if ($d == $siswa['pendidikan_wali']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                        <?php foreach ($pekerjaan as $d) : ?>
                            <?php if ($d == $siswa['pekerjaan_wali']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Penghasilan Wali</label>
                <div class="col-sm-8">
                    <select class="form-control" id="penghasilan_wali" name="penghasilan_wali">
                        <?php foreach ($penghasilan as $d) : ?>
                            <?php if ($d == $siswa['penghasilan_wali']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">HP Wali</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp_wali" name="hp_wali" value="<?= $siswa['hp_wali']; ?>">
                </div>
            </div>
            <br />
            <h3><b>DATA ASAL SEKOLAH</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Sekolah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $siswa['nama_sekolah']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Status Sekolah</label>
                <div class="col-sm-8">
                    <select class="form-control" id="status_sekolah" name="status_sekolah">
                        <?php foreach ($status_sekolah as $d) : ?>
                            <?php if ($d == $siswa['status_sekolah']) : ?>
                                <option value="<?= $d; ?>" selected><?= $d; ?></option>
                            <?php else : ?>
                                <option value="<?= $d; ?>"><?= $d; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Alamat Sekolah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?= $siswa['alamat_sekolah']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tahun Lulus</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?= $siswa['tahun_lulus']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Wali Kelas</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" value="<?= $siswa['nama_wali_kelas']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">HP Wali Kelas</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp_wali_kelas" name="hp_wali_kelas" value="<?= $siswa['hp_wali_kelas']; ?>">
                </div>
            </div>
            <br />
            <h3><b>DATA JURUSAN & MEDIATOR</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jurusan Yang dipilih</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $siswa['jurusan']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Mediator</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_mediator" name="nama_mediator" value="<?= $siswa['nama_mediator']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Alamat Mediator</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat_mediator" name="alamat_mediator" value="<?= $siswa['alamat_mediator']; ?>" readonly>
                </div>
            </div>
            <br />
            <h3><b>DATA LAINNYA</b></h3>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Status Pendaftaran</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status_pendaftarn" name="status_pendaftarn" value="<?= $siswa['status_pendaftaran']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Tanggal Pendaftaran</label>
                <div class="col-sm-8">
                    <input type="datetime" class="form-control" id="tanggal_pendaftran" name="tanggal_pendaftran" value="<?= $siswa['tanggal_pendaftaran']; ?>" readonly>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
            <button class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->