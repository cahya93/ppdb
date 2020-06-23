<html>

<head>
</head>

<body>
    <style>
        body {
            font-family: sans-serif;
            font-size: 11pt;
            background: transparent url(\'bgbarcode.png\') repeat-y scroll left top;
        }

        h5,
        p {
            margin: 0pt;
        }

        table.items {
            font-size: 11pt;
            border-collapse: collapse;

        }

        td {
            vertical-align: top;
        }

        table thead td {
            background-color: #EEEEEE;
            text-align: center;
        }

        table tfoot td {
            background-color: #AAFFEE;
            text-align: center;
        }

        .barcode {
            padding: 1.5mm;
            margin: 0;
            vertical-align: top;
            color: #000000;
        }

        .barcodecell {
            text-align: center;
            vertical-align: middle;
            padding: 0;
        }
    </style>

    <div style="text-align: center;">
        <img src="<?= base_url(); ?>/template/images/head.PNG" width="100%" height="auto" /><br />
    </div><br />
    <div style="text-align: center;">
        <h2>SURAT PERNYATAAN</h2><br />
    </div>
    <table class="items" width="100%" cellpadding="3" align="center">
        <tbody>
            <tr>
                <td colspan="3"><b>Yang bertanda tangan dibawah ini :</b></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $siswa['nama_pernyataan']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td colspan="2">: <?= $siswa['jenis_kelamin_pernyataan']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td colspan="2">:
                    <?= $siswa['alamat_pernyataan']; ?>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: <?= $siswa['pekerjaan_pernyataan']; ?></td>
            </tr>
            <tr>
                <td>HP</td>
                <td>: <?= $siswa['hp_pernyataan']; ?></td>
            </tr>
            <tr>
                <td colspan="3"><b>Adalah orang tua / wali murid dari anak :</b></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>: <?= $siswa['nisn']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $siswa['nama_siswa']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $siswa['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>: <?= $siswa['nama_sekolah']; ?></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <?= $siswa['hp_siswa']; ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <b>Menyatakan bahwa saya siap mendaftarkan anak tersebut di atas menjadi siswa di SMK Muhammaadiyah Karangmojo Gunungkidul Tahun Pelajaran 2020-2021, dan apabila saya tidak jadi mendaftarkan menjadi siswa SMK Muhammadiyah Karangmojo saya bersedia mengembalikan dana beasiswa yang telah saya terima sebesar Rp.600.000,- (enam ratus ribu rupiah).</b>
            <tr>
                <td colspan="3">
                    <b>Demikian pernyataan ini kami buat agar dapat digunakan sebagaimana mestinya.<b>
            </tr>
            </td>
            </tr>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Karangmojo, <?php echo date('d F Y'); ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Yang membuat pernyataan,</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>.</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td><?= $siswa['nama_pernyataan']; ?></td>
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