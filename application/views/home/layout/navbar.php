<div class="container" role="main" style="margin-top: 20px;">
    <div class="row">
        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url(''); ?>"><i class="fa fa-home fa-fw"></i> SMK Muh Karangmojo</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= base_url('umum/isipernyataan'); ?>"><i class="fa fa-edit fa-fw"></i>Surat Pernyataan</a></li>
                        <li><a href="<?= base_url('umum/daftar'); ?>"><i class=" fa fa-edit fa-fw"></i>Daftar</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print fa-fw"></i>Print<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('umum/buktipendaftaran'); ?>">Bukti Pendaftaran</a></li>
                                <!-- <li><a href="#">Kartu Peserta</a></li> -->
                                <!-- <li><a href="<?= base_url('umum/isipernyataan'); ?>">Isi Surat Pernyataan</a></li> -->
                                <li><a href="<?= base_url('umum/suratpernyataan'); ?>">Surat Pernyataan</a></li>

                            </ul>
                        </li>
                        <li><a href="<?= base_url('administrator'); ?>"><i class=" fa fa-user fa-fw"></i>Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>