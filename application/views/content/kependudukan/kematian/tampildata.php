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
              <li class="active"><a href="#tab_1" data-toggle="tab">Info Kematian</a></li>
              <li><a href="#tab_2" data-toggle="tab">Update Data Kematian</a></li>
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
                        <th>Nomor</th>
                        <th>Tanggal Surat</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Meninggal</th>
                        <th>Tanggal Meninggal</th>
                        <th>Penyebab</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php 
                      foreach ($tampil as $a) { ?>
                      <tr>
                        <td><?=$a['no_surat_kematian'] ?></td>
                        <td><?=$a['tgl_surat'] ?></td>
                        <td><?=$a['nik'] ?></td>
                        <td><?=$a['nama'] ?></td>
                        <td><?=$a['tempat_meninggal'] ?></td>
                        <td><?=$a['tgl_meninggal'] ?></td>
                        <td><?=$a['penyebab'] ?></td>
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
                          <th>Alamat</th>
                          <th>Lingkungan</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($tampil_penduduk as $penduduk) { ?>
                        <tr>
                          <td><?=$penduduk['nik'] ?></td>
                          <td><?=$penduduk['nama'] ?></td>
                          <td><?=$penduduk['alamat'] ?></td>
                          <td><?=$penduduk['lingkungan'] ?></td>
                          <td>
                            <a href="<?=site_url('kependudukan/kematian/edit/'.$penduduk['nik'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
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
</script>



