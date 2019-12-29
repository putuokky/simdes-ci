<!-- Main content -->
<section class="content">
  <div class="row">

    <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo $namatable; ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No KK</th>
                <th>NIK</th>
                <th>Status Keluarga</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($tampil_kk as $a) { ?>
              <tr>
                <td><?=$a['no_kk'] ?></td>
                <td><?=$a['nik'] ?></td>
                <td><?=$a['status_keluarga'] ?></td>
                <td>
                  <a href="<?=site_url('kependudukan/kartukeluarga/detail/'.$a['no_kk'].'') ?>" class="btn btn-default btn-flat"><i class="fa fa-file-text"> Detail</i></a>
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