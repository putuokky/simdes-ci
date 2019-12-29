<!-- Main content -->
<section class="content">
  <div class="row">
    <!--  column -->
    <div class="col-lg-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $namatable; ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form role="form" method="post" action="<?=site_url('referensi/lingkungan/tambah_aksi') ?>">
            <!-- text input -->
            <!-- <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" placeholder="Masukkan Data" name="kode" readonly="">
            </div> -->

            <div class="form-group">
              <label>Lingkungan</label>
              <input type="text" class="form-control" placeholder="Masukkan Data" name="lingkungan" required="">
            </div>

            <div class="form-group">
              <label>Status</label><br>
              <label><input type="radio" name="status_ling" id="optionsRadios1" value="Adat" checked> Adat</label>
              &nbsp;&nbsp;&nbsp;
              <label><input type="radio" name="status_ling" id="optionsRadios1" value="Dinas"> Dinas</label>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('referensi/lingkungan')?>" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-info pull-right">Tambah</button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
