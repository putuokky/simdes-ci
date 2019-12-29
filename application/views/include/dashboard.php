  <!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $jumlah_penduduk; ?></h3>

          <p>Penduduk</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/kependudukan") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $jumlah_kk; ?></h3>

          <p>Kepala Keluarga</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/kartukeluarga") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $jumlah_kelahiran; ?></h3>

          <p>Kelahiran</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-plus"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/kelahiran") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo $jumlah_kematian; ?></h3>

          <p>Kematian</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-times"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/kematian") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-teal-gradient">
        <div class="inner">
          <h3><?php echo $jumlah_mutasimasuk; ?></h3>

          <p>Mutasi Masuk</p>
        </div>
        <div class="icon">
          <i class="fa fa-arrow-circle-left"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/pendudukmasuk") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-light-blue-gradient">
        <div class="inner">
          <h3><?php echo $jumlah_mutasikeluar; ?></h3>

          <p>Mutasi Keluar</p>
        </div>
        <div class="icon">
          <i class="fa fa-arrow-circle-right"></i>
        </div>
        <a href="<?php echo base_url("kependudukan/pendudukkeluar") ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->