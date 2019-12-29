<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
    <?php if ($this->session->flashdata('pesan') <> '') { ?>
    <div class="alert alert-success alert-dismissible">
    <h4><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('pesan'); ?></h4>
    </div> 
    <?php  }
    ?>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Kependudukan</a></li>
              <li><a href="#tab_2" data-toggle="tab">Data Buat KK</a></li>
              <li><a href="#tab_3" data-toggle="tab">Data Penduduk</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"><?php echo $namatable; ?></h3>
                  </div>
                  <div class="box-body">
                    <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>NIK</th>
                        <th>No KK</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Status Kawin</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $no = 1;
                      foreach ($tampil_complete as $a) { ?>
                      <tr>
                        <td><?=$a['nik'] ?></td>
                        <td><?=$a['no_kk'] ?></td>
                        <td><?=$a['nama'] ?></td>
                        <td><?=$a['tempat_lahir'] ?></td>
                        <td><?=$a['tgl_lahir'] ?></td>
                        <td><?=$a['agama'] ?></td>
                        <td><?=$a['status_kawin'] ?></td>
                        <td><?=$a['pendidikan'] ?></td>
                        <td><?=$a['pekerjaan'] ?></td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title"><?php echo $namatable1; ?></h3>
                    </div>
                    <div class="box-body">
                      <table id="myTable2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Agama</th>
                          <th>Status Kawin</th>
                          <th>Pendidikan</th>
                          <th>Pekerjaan</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($tampil_forkk as $a) { ?>
                        <tr>
                          <td><?=$a['nik'] ?></td>
                          <td><?=$a['nama'] ?></td>
                          <td><?=$a['tempat_lahir'] ?></td>
                          <td><?=$a['tgl_lahir'] ?></td>
                          <td><?=$a['agama'] ?></td>
                          <td><?=$a['status_kawin'] ?></td>
                          <td><?=$a['pendidikan'] ?></td>
                          <td><?=$a['pekerjaan'] ?></td>
                          <td>
                            <a href="<?=site_url('kependudukan/kependudukan/buatkk/'.$a['nik'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-plus"> Buat KK</i></a>
                          </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title"><?php echo $namatable2; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="<?=site_url('kependudukan/kependudukan/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></a>
                    </div>
                    <div class="box-body">
                      <table id="myTable3" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Agama</th>
                          <th>Status Kawin</th>
                          <th>Pendidikan</th>
                          <th>Pekerjaan</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($tampil as $a) { ?>
                        <tr>
                          <td><?=$a['nik'] ?></td>
                          <td><?=$a['nama'] ?></td>
                          <td><?=$a['tempat_lahir'] ?></td>
                          <td><?=$a['tgl_lahir'] ?></td>
                          <td><?=$a['agama'] ?></td>
                          <td><?=$a['status_kawin'] ?></td>
                          <td><?=$a['pendidikan'] ?></td>
                          <td><?=$a['pekerjaan'] ?></td>
                          <td>
                            <a href="<?=site_url('kependudukan/kependudukan/edit/'.$a['nik'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="<?=site_url('kependudukan/kependudukan/hapus/'.$a['nik'].'') ?>" class="btn btn-default btn-flat" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"> Hapus</i></a>
                          </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>


    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->


<script type="text/javascript">

$(document).ready(function(){
  $('#myTable').DataTable();
});

$(document).ready(function(){
  $('#myTable2').DataTable();
});

$(document).ready(function(){
  $('#myTable3').DataTable();
});
</script>





