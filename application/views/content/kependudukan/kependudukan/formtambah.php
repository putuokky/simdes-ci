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
  // nik
  if (form.nik == "") {
  alert("NIK Kosong!");
  $('input[name="nik"]').focus();
  return (false);
  } 

  if (form.nik.length != 16) {
      alert("NIK harus 16!");
      $('input[name="nik"]').focus();
  return (false);
  }
  // nama
  else if (form.nama == "") {
  alert("Nama Kosong!");
  $('input[name="nama"]').focus();
  return (false);
  } 
  // alamat
  else if (form.alamat == "") {
  alert("Alamat Kosong!");
  $('textarea[name="alamat"]').focus();
  return (false);
  } 
  // tempat lahir
  else if (form.tempat_lahir == "") {
  alert("Tempat Lahir Kosong!");
  $('input[name="tempat_lahir"]').focus();
  return (false);
  } 
  // tanggal lahir
  else if (form.tanggal_lahir == "") {
  alert("Tanggal Lahir Kosong!");
  $('input[name="tanggal_lahir"]').focus();
  return (false);
  } 
  // jenis kelamin
  else if ($('#jenis_kelamin').val() == "") {
  alert("Jenis Kelamin Kosong!");
  $('#jenis_kelamin').focus();
  return (false);
  }
  // agama
  else if ($('#agama').val() == "") {
  alert("Agama Kosong!");
  $('#agama').focus();
  return (false);
  }
  // status nikah
  else if ($('#status_kawin').val() == "") {
  alert("Status Kawin Kosong!");
  $('#status_kawin').focus();
  return (false);
  }
  // pendidikan
  else if ($('#pendidikan').val() == "") {
  alert("Pendidikan Kosong!");
  $('#pendidikan').focus();
  return (false);
  }
  // pekerjaan
  else if ($('#pekerjaan').val() == "") {
  alert("Pekerjaan Kosong!");
  $('#pekerjaan').focus();
  return (false);
  }
  // lingkungan
  else if ($('#lingkungan').val() == "") {
  alert("Lingkungan Kosong!");
  $('#lingkungan').focus();
  return (false);
  }
  // nama ibu
  else if (form.nama_ibu == "") {
  alert("Nama Ibu Kosong!");
  $('input[name="nama_ibu"]').focus();
  return (false);
  }
  // nama ayah
  else if (form.nama_ayah == "") {
  alert("Nama Ayah Kosong!");
  $('input[name="nama_ayah"]').focus();
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
          <form role="form" id="form_submit" method="post" action="<?=site_url('kependudukan/kependudukan/tambah_aksi') ?>">
            <!-- text input -->
            <!-- <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" placeholder="Masukkan Data" name="kode" readonly="">
            </div> -->

            <div class="form-group">
              <label>NIK</label>
              <input type="number" class="form-control left" maxlength="16" minlength="16" placeholder="Masukkan NIK" name="nik" required="">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan Alamat" name="alamat" required=""></textarea>
            </div>

            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" placeholder="YYYY/MM/DD" id="datepicker" name="tanggal_lahir" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" required="" id="jenis_kelamin">
                <option selected="selected" value="">- Pilih -</option>
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Agama</label>
              <select class="form-control" name="agama" required="" id="agama">
                <option selected="selected" value="">- Pilih -</option>
                <?php foreach ($tampil_agama as $agama) : ?>
                <option value="<?=$agama['agama'] ?>"><?=$agama['agama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Status Kawin</label>
              <select class="form-control" name="status_kawin" required="" id="status_kawin"> 
                <option selected="selected" value="">- Pilih -</option>
                <option>BELUM KAWIN</option>
                <option>KAWIN</option>
                <option>CERAI HIDUP</option>
                <option>CERAI MATI</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pendidikan</label>
              <select class="form-control" name="pendidikan" required="" id="pendidikan">
                <option selected="selected" value="">- Pilih -</option>
                <?php foreach ($tampil_pendidikan as $pendidikan) : ?>
                <option value="<?=$pendidikan['pendidikan'] ?>"><?=$pendidikan['pendidikan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Pekerjaan</label>
              <select class="form-control" name="pekerjaan" required="" id="pekerjaan">
                <option selected="selected" value="">- Pilih -</option>
                <?php foreach ($tampil_pekerjaan as $pekerjaan) : ?>
                <option value="<?=$pekerjaan['pekerjaan'] ?>"><?=$pekerjaan['pekerjaan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Golongan Darah</label>
              <select class="form-control" name="golongan_darah">
                <option selected="selected" value="">- Pilih -</option>
                <option>O</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Lingkungan/Banjar</label>
                <select class="form-control" name="lingkungan" required="" id="lingkungan">
                <option value="">- Pilih -</option>
                <?php foreach ($tampil_lingkungan as $lingkungan) : ?>
                <option value="<?=$lingkungan['kode'] ?>"><?=$lingkungan['lingkungan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ibu</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" name="nama_ibu" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Nama Ayah</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Ayah" name="nama_ayah" required="">
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kependudukan')?>" class="btn btn-default">Cancel</a>
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

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>