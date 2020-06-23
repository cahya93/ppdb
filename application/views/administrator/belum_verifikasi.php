<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Calon Siswa</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success" role="alert">
                    <b><?= $this->session->flashdata('flash'); ?></b>
                </div>
            <?php endif; ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Mediator</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($siswa as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['id'] . "/PAN.PPDB/2020"; ?></td>
                            <td><?= $d['nama_siswa']; ?></td>
                            <td><?= $d['jurusan']; ?></td>
                            <td><?= $d['nama_mediator']; ?></td>
                            <td>
                                <a href="<?= base_url('administrator/verifikasi/' . $d['id']); ?>" target="_blank"><button class="btn btn-primary">VERFIKASI</button></a>
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