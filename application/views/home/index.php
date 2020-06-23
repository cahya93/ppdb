<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="col-sm-12">
        <div class="jumbotron">
            <h1 class="col-lg-12" style="padding-top:30px;">
                <img src="<?= base_url(); ?>template/home/assets/img/logo (2).png" width="10%" align="center" alt="">
            </h1>
            <h1>
                <?php if ($this->session->flashdata()) : ?>
                    <div class="alert alert-success" role="alert">
                        <b><?= $this->session->flashdata('flash'); ?>.</b></br>Selanjutnya silahkan mengirim foto Akte asli ke admin di nomor <a href="https://wa.me/6285328711673?text=Assamualaikum, saya sudah berhasil mendaftar PPDB Online"><i class="fa fa-whatsapp"></i><span> 085328711673</span></a></p> Untuk pengambilan Beasiswa Sosial"
                    </div>
                <?php endif; ?>
            </h1>
            <h1>Selamat Datang di Halaman PPDB SMK Muh Karangmojo</h1>
            <p style="font-size: 18px;">Halaman ini merupakan resmi Pendaftaran Peserta Didik Baru SMK Muh Karangmojo. Untuk melakukan pendaftaran silahkan klik menu daftar atau jika sudah mendaftar silahkan cetak bukti pendaftarannya melalui menu print. Untuk informasi lebih lanjut bisa menghubungi Panitia PPDB melalui No.Tlp/HP berikut:</p>
            <p><a href="tel:0274391939"><i class="fa fa-phone"></i><span> 0274 391939 (Sekolah)</span></a>
                <p><a href="https://wa.me/6285328711673?text=Assamualaikum, mohon informasi tentang PPDB di SMK Muh Karangmojo"><i class="fa fa-whatsapp"></i><span> 085328711673 (Insanita / Admin)</span></a> /
                    <a href="https://wa.me/6287812941063?text=Assamualaikum, mohon informasi tentang PPDB di SMK Muh Karangmojo"><i class="fa fa-whatsapp"></i><span> 087812941063 (Devi)</span></a></p>
                <p><a href="https://wa.me/6287839839710?text=Assamualaikum, mohon informasi tentang PPDB di SMK Muh Karangmojo"><i class="fa fa-whatsapp"></i><span> 087839839710 (Edi)</span></a> /
                    <a href="https://wa.me/6283840398931?text=Assamualaikum, mohon informasi tentang PPDB di SMK Muh Karangmojo"><i class="fa fa-whatsapp"></i><span> 083840398931 (Eko)</span></a></p>

        </div>
    </section>
</body>

</html>