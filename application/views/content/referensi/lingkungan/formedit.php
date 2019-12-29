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
        <?php foreach ($update as $a) { ?>
          <form role="form" method="post" action="<?=site_url('referensi/lingkungan/edit_aksi') ?>">
            <!-- text input -->
            <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control"  value="<?=$a['kode'] ?>" name="kode" readonly="">
            </div>

            <div class="form-group">
              <label>Lingkungan</label>
              <input type="text" class="form-control" value="<?=$a['lingkungan'] ?>" name="lingkungan" required="">
            </div>

            <div class="form-group">
              <label>Status</label><br>
              <?php if ($a['status_lingkungan']=='Adat') { ?>
                <label><input type="radio" name="status_ling" id="optionsRadios1" value="Adat" checked> Adat</label>
                &nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="status_ling" id="optionsRadios1" value="Dinas"> Dinas</label>
              <?php } else { ?>
                <label><input type="radio" name="status_ling" id="optionsRadios1" value="Adat"> Adat</label>
                &nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="status_ling" id="optionsRadios1" value="Dinas" checked> Dinas</label>
              <?php  } ?>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('referensi/lingkungan')?>" class="btn btn-default">Cancel</a>
              <button type="submit" name="edit" class="btn btn-info pull-right">Edit</button>
            </div>
          </form>
          <?php } ?>
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