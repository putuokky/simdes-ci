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
          <form role="form" method="post" action="<?=site_url('kependudukan/kependudukan/edit_aksi') ?>">
            <!-- text input -->
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control"  value="<?=$a['nik'] ?>" name="nik" readonly="">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$a['nama'] ?>" name="nama" required="">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" name="alamat"><?=$a['alamat'] ?></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?=$a['tempat_lahir'] ?>" name="tempat_lahir" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" value="<?=$a['tgl_lahir'] ?>" id="datepicker" name="tanggal_lahir" required="">
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
              <label>Agama</label>
              <select class="form-control select2" name="agama">
                <option selected="selected" value="<?=$a['agama'] ?>"><?=$a['agama'] ?></option>
                <?php foreach ($tampil_agama as $agama) : ?>
                <option value="<?=$agama['agama'] ?>"><?=$agama['agama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Status Kawin</label>
              <select class="form-control select2" name="status_kawin">
                <option selected="selected" value="<?=$a['status_kawin'] ?>"><?=$a['status_kawin'] ?></option>
                <option>BELUM KAWIN</option>
                <option>SUDAH KAWIN</option>
                <option>CERAI</option>
                <option>CERAI MATI</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pendidikan</label>
              <select class="form-control select2" name="pendidikan">
                <option selected="selected" value="<?=$a['pendidikan'] ?>"><?=$a['pendidikan'] ?></option>
                <?php foreach ($tampil_pendidikan as $pendidikan) : ?>
                <option value="<?=$pendidikan['pendidikan'] ?>"><?=$pendidikan['pendidikan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pekerjaan</label>
              <select class="form-control select2" name="pekerjaan">
                <option selected="selected" value="<?=$a['pekerjaan'] ?>"><?=$a['pekerjaan'] ?></option>
                <?php foreach ($tampil_pekerjaan as $pekerjaan) : ?>
                <option value="<?=$pekerjaan['pekerjaan'] ?>"><?=$pekerjaan['pekerjaan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Golongan Darah</label>
              <select class="form-control select2" name="golongan_darah">
                <option selected="selected" value="<?=$a['gol_darah'] ?>"><?=$a['gol_darah'] ?></option>
                <option>O</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Lingkungan/Banjar</label>
                <select class="form-control select2" name="lingkungan">
                <option selected="selected" value="<?=$a['kode'] ?>"><?=$a['lingkungan'] ?></option>
                <?php foreach ($tampil_lingkungan as $lingkungan) : ?>
                <option value="<?=$lingkungan['kode'] ?>"><?=$lingkungan['lingkungan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>No Akta Lahir</label>
              <input type="text" class="form-control" value="<?=$a['no_akta_lahir'] ?>" name="noaktalahir" readonly>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ibu</label>
              <input type="text" class="form-control" value="<?=$a['nama_ibu'] ?>" name="nama_ibu" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ayah</label>
              <input type="text" class="form-control" value="<?=$a['nama_ayah'] ?>" name="nama_ayah" required="">
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kependudukan')?>" class="btn btn-default">Cancel</a>
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

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>