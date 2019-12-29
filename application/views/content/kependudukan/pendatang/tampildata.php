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
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo $namatable; ?></h3>
          </div>
          <!-- /.box-header -->
          <div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=site_url('kependudukan/pendudukmasuk/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></a>
          </div>
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nomor</th>
                <th>Tanggal Surat</th>
                <th>NIK</th>
                <th>Nama</th>
                <!-- <th>No Surat</th> -->
                <th>Tanggal Datang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Dusun Lama</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              foreach ($tampil as $a) { ?>
              <tr>
                <td><?=$a['no_surat_pendatang'] ?></td>
                <td><?=$a['tgl_surat'] ?></td>
                <td><?=$a['nik'] ?></td>
                <td><?=$a['nama'] ?></td>
                <!-- <td><?=$a['no_surat'] ?></td> -->
                <td><?=$a['tgl_datang'] ?></td>
                <td><?=$a['tempat_lahir'] ?></td>
                <td><?=$a['tgl_lahir'] ?></td>
                <td><?=$a['dusun_lama'] ?></td>
                <td>
                  <a href="<?=site_url('kependudukan/pendudukmasuk/edit/'.$a['no_surat_pendatang'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
                  <a href="<?=site_url('kependudukan/pendudukmasuk/hapus/'.$a['no_surat_pendatang'].'') ?>" class="btn btn-default btn-flat" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"> Hapus</i></a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
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
</script>