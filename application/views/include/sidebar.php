<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <?php  
    if ($this->session->userdata('level') != 'Kepala Lurah') {
    ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-television"></i>
        <span>Kependudukan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('kependudukan/kependudukan'); ?>"><i class="fa fa-circle-o"></i> Kependudukan</a></li>
        <li><a href="<?php echo base_url('kependudukan/kartukeluarga'); ?>"><i class="fa fa-circle-o"></i> Kartu Keluarga</a></li>
        <li><a href="<?php echo base_url('kependudukan/kelahiran'); ?>"><i class="fa fa-circle-o"></i> Kelahiran</a></li>
        <li><a href="<?php echo base_url('kependudukan/kematian'); ?>"><i class="fa fa-circle-o"></i> Kematian</a></li>
        <li><a href="<?php echo base_url('kependudukan/pendudukmasuk'); ?>"><i class="fa fa-circle-o"></i> Penduduk Masuk</a></li>
        <li><a href="<?php echo base_url('kependudukan/pendudukkeluar'); ?>"><i class="fa fa-circle-o"></i> Penduduk Keluar</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-plug"></i>
        <span>Referensi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        <!-- <li><a href="<?php echo base_url('referensi/pendidikan'); ?>"><i class="fa fa-circle-o"></i> Pendidikan</a></li>
        <li><a href="<?php echo base_url('referensi/pekerjaan'); ?>"><i class="fa fa-circle-o"></i> Pekerjaan</a></li>
        <li><a href="<?php echo base_url('referensi/agama'); ?>"><i class="fa fa-circle-o"></i> Agama</a></li>
        <li><a href="<?php echo base_url('referensi/penandatangan'); ?>"><i class="fa fa-circle-o"></i> Penanda Tangan</a></li> -->
        <li><a href="<?php echo base_url('referensi/lingkungan'); ?>"><i class="fa fa-circle-o"></i> Lingkungan</a></li>
      </ul>
    </li> 
    <?php } else { } ?>
    <li><a href="<?php echo base_url('laporan'); ?>"><i class="fa fa-folder-o"></i> <span> Laporan</span></a></li>
    <?php 
      if($this->session->userdata('level') == 'Admin'){ 
    ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-gear"></i>
        <span>Pengaturan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('pengaturan/user'); ?>"><i class="fa fa-circle-o"></i> User</a></li>
      </ul>
    </li>
    <?php } else { } ?>   
    <li><a href="<?php echo base_url('login/keluar'); ?>"><i class="fa fa-power-off"></i> <span>Sign Out</span></a></li>
  </ul>
</section>