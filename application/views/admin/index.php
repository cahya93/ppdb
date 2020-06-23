 <!-- Small boxes (Stat box) -->
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-primary">
         <div class="inner">
             <h3><?php echo $total_siswa; ?></h3>
             <p>Semua Siswa</p>
         </div>
         <div class="icon">
             <i class="ion ">ALL</i>
         </div>
         <a href="<?= base_url(); ?>admin/pendaftar" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-success">
         <div class="inner">
             <h3><?php echo $total_verifikasi->status_pendaftaran; ?></h3>
             <p>Siswa Diterima</p>
         </div>
         <div class="icon">
             <i class="ion">Fix</i>
         </div>
         <a href="<?= base_url(); ?>admin/diterima" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-warning">
         <div class="inner">
             <h3><?php echo $total_belum_verifikasi->status_pendaftaran; ?></h3>
             <p>Belum Verifikasi</p>
         </div>
         <div class="icon">
             <i class="ion">?</i>
         </div>
         <a href="<?= base_url(); ?>admin/belumdiverifikasi" class="small-box-footer">lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-danger">
         <div class="inner">
             <h3><?php echo $total_belum_ambil_beasiswa->beasiswa; ?></h3>
             <p>Belum Ambil Beasiswa</p>
         </div>
         <div class="icon">
             <i class="fa">$</i>
         </div>
         <a href="<?= base_url(); ?>admin/beasiswa" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-info">
         <div class="inner">
             <h3><?php echo $tkro->jurusan; ?></h3>
             <p>Teknik Kendaraan Ringan Otomotif</p>
         </div>
         <div class="icon">
             <i class="fa">TKRO</i>
         </div>
         <a href="<?= base_url(); ?>admin/tkro" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-danger">
         <div class="inner">
             <h3><?php echo $tbsm->jurusan; ?></h3>
             <p>Teknik dan Bisnis Sepeda Motor</p>
         </div>
         <div class="icon">
             <i class="fa">TBSM</i>
         </div>
         <a href="<?= base_url(); ?>admin/tbsm" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-success">
         <div class="inner">
             <h3><?php echo $akl->jurusan; ?></h3>
             <p>Akuntansi dan Keuangan Lembaga</p>
         </div>
         <div class="icon">
             <i class="fa">AKL</i>
         </div>
         <a href="<?= base_url(); ?>admin/akl" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-secondary">
         <div class="inner">
             <h3><?php echo $otkp->jurusan; ?></h3>
             <p>Otomatisasi dan Tata Kelola Perkantoran</p>
         </div>
         <div class="icon">
             <i class="fa">OTKP</i>
         </div>
         <a href="<?= base_url(); ?>admin/otkp" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <div class="col-lg-3">
     <!-- small box -->
     <div class="small-box bg-warning text-white">
         <div class="inner">
             <h3><?php echo $bdp->jurusan; ?></h3>
             <p>Bisnis Daring dan Pemasaran</p>
         </div>
         <div class="icon">
             <i class="fa">BDP</i>
         </div>
         <a href="<?= base_url(); ?>admin/bdp" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
     </div>
 </div>
 <!-- ./col -->
 </div>