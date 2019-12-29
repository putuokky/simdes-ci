<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#btn-submit').click(function(e){
       var config = {};
        $('#form_submit').serializeArray().map(function(item) {
            if ( config[item.name] ) {
                if ( typeof(config[item.name]) === "string" ) {
                    config[item.name] = [config[item.name]];
                }
                config[item.name].push(item.value);
            } else {
                config[item.name] = item.value;
            }
        });

        if(validasi_input(config)) {
           $('#form_submit').submit();
        } ;
    })
  });


  function validasi_input(form){
  // nama
  if (form.nama == "") {
  alert("Nama Kosong!");
  $('input[name="nama"]').focus();
  return (false);
  } // anak ke
  if (form.anak_ke == "") {
  alert("Anak Ke Kosong!");
  $('input[name="anak_ke"]').focus();
  return (false);
  } 
  // jenis kelamin
  else if ($('#jenis_kelamin').val() == "") {
  alert("Jenis Kelamin Kosong!");
  $('#jenis_kelamin').focus();
  return (false);
  } 
  // tempat kelahiran
  else if (form.tempat_kelahiran == "") {
  alert("Tempat Kelahiran Kosong!");
  $('input[name="tempat_kelahiran"]').focus();
  return (false);
  } 
  // tanggal lahir
  else if (form.tanggal_lahir == "") {
  alert("Tanggal Lahir Kosong!");
  $('input[name="tanggal_lahir"]').focus();
  return (false);
  } 
  // alamat
  else if (form.alamat == "") {
  alert("Alamat Kosong!");
  $('textarea[name="alamat"]').focus();
  return (false);
  } 
  // nama ayah
  else if ($('#nama_ayah').val() == "") {
  alert("Nama Ayah Kosong!");
  $('#nama_ayah').focus();
  return (false);
  }
  // nama ibu
  else if ($('#nama_ibu').val() == "") {
  alert("Nama Ibu Kosong!");
  $('#nama_ibu').focus();
  return (false);
  }
  // tempat lahir
  else if (form.tempat_lahir == "") {
  alert("Tempat Lahir Kosong!");
  $('input[name="tempat_lahir"]').focus();
  return (false);
  } 
  // agama
  else if ($('#agama').val() == "") {
  alert("Agama Kosong!");
  $('#agama').focus();
  return (false);
  }
  // lingkungan
  else if ($('#lingkungan').val() == "") {
  alert("Lingkungan Kosong!");
  $('#lingkungan').focus();
  return (false);
  }
  return (true);
}
</script>
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
          <form role="form" id="form_submit" method="post" action="<?=site_url('kependudukan/kelahiran/tambah_aksi') ?>">

            <!-- <div class="form-group">
              <label>No Surat Kelahiran</label>
              <input type="text" class="form-control left" placeholder="Masukkan No Surat Kelahiran" name="no_surat_lahir" required="">
            </div> -->

            <!-- <div class="form-group">
              <label>Tanggal Surat</label>
              <input type="text" class="form-control" placeholder="YYYY/MM/DD" id="datepicker2" name="tgl_surat" required="">
            </div> -->

            <!-- <div class="form-group col-xs-6">
              <label>NIK</label>
              <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik" required="">
            </div> -->

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Anak Ke</label>
              <input type="text" class="form-control" placeholder="Masukkan Anak Ke-" name="anak_ke" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="">
                <option value="">- Pilih -</option>
                <option>LAKI-LAKI</option>
                <option>PEREMPUAN</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Tempat Kelahiran</label>
              <input type="text" class="form-control" placeholder="Masukkan Rumah Sakit, Posyandu, Puskesmas, dll" name="tempat_kelahiran" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" placeholder="YYYY/MM/DD" id="datepicker" name="tanggal_lahir" required="">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan Alamat" name="alamat" required=""></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ayah</label>
              <select class="form-control" name="nama_ayah" id="nama_ayah" required="">
                <option value="">- Pilih -</option>
                <?php foreach ($tampil_pendlaki as $pendlaki) : ?>
                <option value="<?=$pendlaki['nama'] ?>"><?=$pendlaki['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ibu</label>
              <select class="form-control" name="nama_ibu" id="nama_ibu" required="">
                <option value="">- Pilih -</option>
                <?php foreach ($tampil_pendperem as $pendperem) : ?>
                <option value="<?=$pendperem['nama'] ?>"><?=$pendperem['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" value="Denpasar" name="tempat_lahir" required="" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>Agama</label>
              <select class="form-control" name="agama" id="agama" required="">
                <option value="">- Pilih -</option>
                <?php foreach ($tampil_agama as $agama) : ?>
                <option value="<?=$agama['agama'] ?>"><?=$agama['agama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- <div class="form-group col-xs-6">
              <label>Status Kawin</label>
              <select class="form-control select2" name="status_kawin">
                <option selected="selected">- Pilih -</option>
                <option>BELUM KAWIN</option>
                <option>KAWIN</option>
                <option>CERAI HIDUP</option>
                <option>CERAI MATI</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pendidikan</label>
              <select class="form-control select2" name="pendidikan">
                <option selected="selected">- Pilih -</option>
                <?php foreach ($tampil_pendidikan as $pendidikan) : ?>
                <option value="<?=$pendidikan['pendidikan'] ?>"><?=$pendidikan['pendidikan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pekerjaan</label>
              <select class="form-control select2" name="pekerjaan">
                <option selected="selected">- Pilih -</option>
                <?php foreach ($tampil_pekerjaan as $pekerjaan) : ?>
                <option value="<?=$pekerjaan['pekerjaan'] ?>"><?=$pekerjaan['pekerjaan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div> -->

            <div class="form-group col-xs-6">
              <label>Golongan Darah</label>
              <select class="form-control select2" name="golongan_darah">
                <option value="" selected="selected">- Pilih -</option>
                <option value="O">O</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Lingkungan/Banjar</label>
              <select class="form-control" name="lingkungan" id="lingkungan" required="">
                <option value="">- Pilih -</option>
                <?php foreach ($tampil_lingkungan as $lingkungan) : ?>
                <option value="<?=$lingkungan['kode'] ?>"><?=$lingkungan['lingkungan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- <div class="form-group col-xs-6">
              <label>No Akta Lahir</label>
              <input type="text" class="form-control" placeholder="No Akta Lahir" name="noaktalahir">
            </div> -->

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kelahiran')?>" class="btn btn-default">Cancel</a>
              <button type="button" id="btn-submit" class="btn btn-info pull-right">Tambah</button>
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