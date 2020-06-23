<html>

<head>
</head>

<body>
    <link href="<?= base_url(); ?>template/style.css" rel="stylesheet">

    <div style="text-align: center;">
        <img src="<?= base_url(); ?>/template/images/head.PNG" width="100%" height="auto" /><br />
    </div><br />
    <div style="text-align: center;">
        <h3>BUKTI PENDAFTARAN</h3><br />
    </div>
    <table class="items" width="100%" cellpadding="6" border="" align="center">
        <tr>
            <td>Nomor Registrasi</td>
            <td>: <?= $siswa['id']; ?><b>/PAN.PPDB/2020</b></td>
            <<div style="border: 5px solid green; margin: 10px 10px; padding:10px; width: auto; background-color:#FBFBEE; text-align:center">
                <td>
                    <font size="7"><b><?= $siswa['id']; ?></b></font>
                </td>
        </tr>
        <td>
            <font size="7"><b></b></font>
        </td>
        </tr>
        <tr>
            <td colspan="3"><b>DATA SISWA</b></td>
        </tr>
        <tr>
            <td>NISN / NAMA</td>
            <td>: <?= $siswa['nisn']; ?> / <?= $siswa['nama_siswa']; ?> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $siswa['jenis_kelamin']; ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>: <?= $siswa['tempat_lahir']; ?>, <?= date('d F Y', strtotime($siswa['tanggal_lahir'])); ?></td>
        </tr>
        <tr>
            <td>Agama Siswa</td>
            <td>: <?= $siswa['agama_siswa']; ?></td>
        </tr>
        <tr>
            <td>Alamat Siswa</td>
            <td>: <?= $siswa['alamat_siswa']; ?></td>
        </tr>
        <tr>
            <td>HP</td>
            <td>: <?= $siswa['hp_siswa']; ?></td>
        </tr>
        <tr>
            <td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
        </tr>
        <tr>
            <td>Nama / HP Ayah</td>
            <td>: <?= $siswa['nama_ayah']; ?> / <?= $siswa['hp_ayah']; ?></td>
        </tr>
        <tr>
            <td>Nama / HP Ibu</td>
            <td>: <?= $siswa['nama_ibu']; ?> / <?= $siswa['hp_ibu']; ?></td>
        </tr>
        <tr>
            <td>Nama / HP Wali</td>
            <td>: <?= $siswa['nama_wali']; ?> / <?= $siswa['hp_wali']; ?></td>
        </tr>
        <tr>
            <td>HP Wali</td>
            <td>: <?= $siswa['hp_wali']; ?></td>
        </tr>
        <tr>
            <td colspan="3"><b>PILIHAN JURUSAN DAN MEDIATOR</b></td>
        </tr>
        <tr>
            <td>Pilihan Jurusan</td>
        </tr>
        <td>: <?= $siswa['jurusan']; ?></td>
        <tr>
            <td>Mediator</td>
        </tr>
        <td>: <?= $siswa['nama_mediator']; ?></td>
        </tr>
        <tr>
            <td>Alamat Mediator</td>
        </tr>
        <td>: <?= $siswa['alamat_mediator']; ?></td>
        </tr>
        <tr>
            <td colspan="3"><b>DATA ASAL SEKOLAH</b></td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td>: <?= $siswa['nama_sekolah']; ?></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>: <?= $siswa['tahun_lulus']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pendaftaran</td>
            <td>: <?= date('d F Y', strtotime($siswa['tanggal_pendaftaran'])); ?></td>
        </tr>
        </tbody>
    </table>
    <br />
    <div style="text-align: center;">
        <img src="<?= base_url(); ?>/template/images/footer.png" width="100%" height="auto" /><br />
    </div><br />

</html>
<?php
ini_set('display_errors', 'off');
?>