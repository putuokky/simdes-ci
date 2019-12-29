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
          <form role="form" method="post" action="<?=site_url('referensi/penandatangan/edit_aksi') ?>">
            <!-- text input -->
            <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control"  value="<?=$a['kode'] ?>" name="kode" readonly="">
            </div>

            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" value="<?=$a['nip'] ?>" name="nip" required="" readonly="">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$a['nama'] ?>" name="nama" required="">
            </div>

            <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control select2" name="jabatan">
                <option selected="selected" value="<?=$a['jabatan'] ?>"><?=$a['jabatan'] ?></option>
                <option>Kepala Lurah</option>
                <option>Sekretaris</option>
              </select>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('referensi/penandatangan')?>" class="btn btn-default">Cancel</a>
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
