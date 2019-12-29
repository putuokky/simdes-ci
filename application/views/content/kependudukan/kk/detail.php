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
            <a href="<?=site_url('kependudukan/kartukeluarga')?>" class="btn btn-default">Kembali</a>
            <h2 align="center" class="box-title">NO. KARTU KELUARGA <br> <?php echo $tampilnokk; ?></h2>
          </div>
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Status Keluarga</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($tampil as $a) { ?>
              <tr>
                <td><?=$no++ ?></td>
                <td><?=$a['nik'] ?></td>
                <td><?=$a['nama'] ?></td>
                <td><?=$a['status_keluarga'] ?></td>
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
