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
            <a href="<?=site_url('referensi/lingkungan/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></a>
          </div>
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Kode</th>
                <th>Lingkungan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($tampil as $a) { ?>
              <tr>
                <td><?=$a['kode'] ?></td>
                <td><?=$a['lingkungan'] ?></td>
                <td><?=$a['status_lingkungan'] ?></td>
                <td>
                  <a href="<?=site_url('referensi/lingkungan/edit/'.$a['kode'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
                  <a href="<?=site_url('referensi/lingkungan/hapus/'.$a['kode'].'') ?>" class="btn btn-default btn-flat" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"> Hapus</i></a>
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
