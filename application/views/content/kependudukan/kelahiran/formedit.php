<!-- Main content -->
<section class="content">
  <div class="row">
    <!--  column -->
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $namatable; ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <?php foreach ($update as $a) { ?>
          <form role="form" method="post" action="<?=site_url('kependudukan/kelahiran/edit_aksi') ?>">
            <div class="form-group">
              <label>No Surat Kelahiran</label>
              <input type="text" class="form-control left" value="<?=$a['no_surat_kelahiran'] ?>" name="no_surat_lahir" required="" readonly="" >
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Surat</label>
              <input type="text" class="form-control" value="<?=$a['tgl_surat'] ?>" id="datepicker2" name="tgl_surat" required="" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>NIK</label>
              <input type="text" class="form-control" value="<?=$a['nik'] ?>" name="nik" required="" readonly>
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$a['nama'] ?>" name="nama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Anak Ke</label>
              <input type="text" class="form-control" value="<?=$a['anak_ke'] ?>" name="anak_ke" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Jenis Kelamin</label>
              <select class="form-control select2" name="jenis_kelamin">
                <option selected="selected" value="<?=$a['jenis_kelamin'] ?>"><?=$a['jenis_kelamin'] ?></option>
                <option>LAKI-LAKI</option>
                <option>PEREMPUAN</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Tempat Kelahiran</label>
              <input type="text" class="form-control" value="<?=$a['tempat_kelahiran'] ?>" name="tempat_kelahiran" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" value="<?=$a['tgl_lahir'] ?>" id="datepicker" name="tanggal_lahir" required="">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan Data" name="alamat"><?=$a['alamat'] ?></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ibu</label>
              <select class="form-control select2" name="nama_ibu">
                <option selected="selected" value="<?=$a['nama_ibu'] ?>"><?=$a['nama_ibu'] ?></option>
                <?php foreach ($tampil_pendperem as $pendperem) : ?>
                <option value="<?=$pendperem['nama'] ?>"><?=$pendperem['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ayah</label>
              <select class="form-control select2" name="nama_ayah">
                <option selected="selected" value="<?=$a['nama_ayah'] ?>"><?=$a['nama_ayah'] ?></option>
                <?php foreach ($tampil_pendlaki as $pendlaki) : ?>
                <option value="<?=$pendlaki['nama'] ?>"><?=$pendlaki['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kelahiran')?>" class="btn btn-default">Cancel</a>
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

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('#datepicker2').datepicker({                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>