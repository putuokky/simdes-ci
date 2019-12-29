<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo $namatable; ?></h3>
          </div>
          <!-- /.box-header -->
          <div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=site_url('referensi/pekerjaan/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah</i></a>
          </div>
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Kode</th>
                <th>Pekerjaan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($tampil as $a) { ?>
              <tr>
                <td><?=$a['kode'] ?></td>
                <td><?=$a['pekerjaan'] ?></td>
                <td>
                  <a href="<?=site_url('referensi/pekerjaan/edit/'.$a['kode'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"> Edit</i></a>
                  <a href="<?=site_url('referensi/pekerjaan/hapus/'.$a['kode'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-trash"> Hapus</i></a>
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