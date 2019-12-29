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
            <a href="<?=site_url('kependudukan/kelahiran/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></a>
          </div>
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nomor</th>
                <th>Tanggal Surat</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Anak Ke</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Kelahiran</th>
                <th>Tanggal Lahir</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              foreach ($tampil as $a) { ?>
              <tr>
                <td><?=$a['no_surat_kelahiran'] ?></td>
                <td><?=$a['tgl_surat'] ?></td>
                <td><?=$a['nik'] ?></td>
                <td><?=$a['nama'] ?></td>
                <td><?=$a['anak_ke'] ?></td>
                <td><?=$a['jenis_kelamin'] ?></td>
                <td><?=$a['tempat_kelahiran'] ?></td>
                <td><?=$a['tgl_lahir'] ?></td>
                <td><?=$a['nama_ayah'] ?></td>
                <td><?=$a['nama_ibu'] ?></td>
                <td>
                  <a href="<?=site_url('kependudukan/kelahiran/edit/'.$a['no_surat_kelahiran'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
                  <a href="<?=site_url('kependudukan/kelahiran/hapus/'.$a['no_surat_kelahiran'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-trash" onclick="return confirm('Are you sure?')"> Hapus</i></a>
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