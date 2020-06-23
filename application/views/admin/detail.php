<div class="row">
    <div class="col">
        <h3 class="page-header">Detail Calon Siswa <?= $siswa['nama_siswa']; ?></h3>

        <div class="table-responsive">
            <table class="table table-stdiped table-bordered">
                <tbody>
                    <tr>
                        <td>Nomor Registrasi</td>
                        <td><b><?= $siswa['id']; ?>/PAN.PPDB/2020</b></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>DATA SISWA</b></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td><?= $siswa['nisn']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><?= $siswa['nama_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?= $siswa['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><?= $siswa['tempat_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?= $siswa['tanggal_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Agama Siswa</td>
                        <td><?= $siswa['agama_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>Status Keluarga</td>
                        <td><?= $siswa['status_keluarga']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Siswa</td>
                        <td><?= $siswa['alamat_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>HP</td>
                        <td><?= $siswa['hp_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td><?= $siswa['nama_ayah']; ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan Ayah</td>
                        <td><?= $siswa['pendidikan_ayah']; ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td><?= $siswa['pekerjaan_ayah']; ?></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td>
                        <td><?= $siswa['penghasilan_ayah']; ?></td>
                    </tr>
                    <tr>
                        <td>Tlp/HP Ayah</td>
                        <td><?= $siswa['hp_ayah']; ?></td>
                    </tr>
                    <td>Nama Ibu</td>
                    <td><?= $siswa['nama_ibu']; ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan Ibu</td>
                        <td><?= $siswa['pendidikan_ibu']; ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td><?= $siswa['pekerjaan_ibu']; ?></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ibu</td>
                        <td><?= $siswa['penghasilan_ibu']; ?></td>
                    </tr>
                    <tr>
                        <td>Tlp/HP Ibu</td>
                        <td><?= $siswa['hp_ibu']; ?></td>
                    </tr>
                    <td>Nama Wali</td>
                    <td><?= $siswa['nama_wali']; ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan Wali</td>
                        <td><?= $siswa['pendidikan_wali']; ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Wali</td>
                        <td><?= $siswa['pekerjaan_wali']; ?></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Wali</td>
                        <td><?= $siswa['penghasilan_wali']; ?></td>
                    </tr>
                    <tr>
                        <td>Tlp/HP Wali</td>
                        <td><?= $siswa['hp_wali']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>DATA ASAL SEKOLAH</b></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Nama Sekolah</td>
                        <td><?= $siswa['nama_sekolah']; ?></td>
                    </tr>
                    <tr>
                        <td>Status Sekolah</td>
                        <td><?= $siswa['status_sekolah']; ?></td>
                    </tr>
                    <td>Alamat Sekolah</td>
                    <td><?= $siswa['alamat_sekolah']; ?></td>
                    </tr>
                    </tr>
                    <td>Tahun Lulus</td>
                    <td><?= $siswa['tahun_lulus']; ?></td>
                    </tr>
                    <td>Jurusan</td>
                    <td><?= $siswa['jurusan']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>DATA LAINNYA</b></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Piliihan Jurusan</td>
                        <td><?= $siswa['jurusan']; ?></td>
                    </tr>
                    <tr>
                        <td>Mediator</td>
                        <td><?= $siswa['nama_mediator']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Mediator</td>
                        <td><?= $siswa['alamat_mediator']; ?></td>
                    </tr>
                    <td>Tanggal Pendaftaran</td>
                    <td><?php echo date("d F Y H:i:s", strtotime($siswa['tanggal_pendaftaran'])); ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.col-lg-6 -->
</div>