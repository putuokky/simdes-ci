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
  else if (form.nama == "") {
  alert("Nama Kosong!");
  $('input[name="nama"]').focus();
  return (false);
  }
   // tanggal datang
  else if (form.tgldatang == "") {
  alert("Tanggal Datang Kosong!");
  $('input[name="tgldatang"]').focus();
  return (false);
  } 
  // alamat asal
  else if (form.alamatasal == "") {
  alert("Alamat Asal Kosong!");
  $('textarea[name="alamatasal"]').focus();
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
  } // dusun lama
  else if (form.dusunlama == "") {
  alert("Dusun Lama Kosong!");
  $('input[name="dusunlama"]').focus();
  return (false);
  } // kelurahan desa lama
  else if (form.keldesalama == "") {
  alert("Kelurahan/Desa Lama Kosong!");
  $('input[name="keldesalama"]').focus();
  return (false);
  } // kecamatan lama
  else if (form.keclama == "") {
  alert("Kecamatan Lama Kosong!");
  $('input[name="keclama"]').focus();
  return (false);
  } // kabupaten kota lama
  else if (form.kabkotalama == "") {
  alert("Kabupaten/Kota Lama Kosong!");
  $('input[name="kabkotalama"]').focus();
  return (false);
  } // provinsi lama
  else if (form.provlama == "") {
  alert("Provinsi Lama Kosong!");
  $('input[name="provlama"]').focus();
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
        <?php foreach ($update as $a) { ?>
          <form role="form" id="form_submit" method="post" action="<?=site_url('kependudukan/pendudukmasuk/edit_aksi') ?>">
            <div class="form-group">
              <label>No Surat Pendatang</label>
              <input type="text" class="form-control left" value="<?=$a['no_surat_pendatang'] ?>" name="no_surat_pendatang" required="" readonly="">
            </div>

            <div class="form-group">
              <label>Tanggal Surat</label>
              <input type="text" class="form-control" value="<?=$a['tgl_surat'] ?>" id="datepicker" name="tgl_surat" required="" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>NIK</label>
              <input type="text" class="form-control" value="<?=$a['nik'] ?>" name="nik" required="" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$a['nama'] ?>" name="nama" required="">
            </div>

            <!-- <div class="form-group col-xs-6">
              <label>No Surat</label>
              <input type="text" class="form-control" value="<?=$a['no_surat'] ?>" name="nosurat" required="">
            </div> -->

            <div class="form-group col-xs-12">
              <label>Tanggal Datang</label>
              <input type="text" class="form-control" value="<?=$a['tgl_datang'] ?>" id="datepicker2" name="tgldatang" required="">
            </div>

            <div class="form-group">
              <label>Alamat Asal</label>
              <textarea class="form-control" rows="3" name="alamatasal" required=""><?=$a['alamat_asal'] ?></textarea>
            </div>

            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" value="<?=$a['tempat_lahir'] ?>" name="tempat_lahir" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Lahir</label>
              <input type="text" class="form-control" value="<?=$a['tgl_lahir'] ?>" id="datepicker3" name="tanggal_lahir" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Dusun Lama</label>
              <input type="text" class="form-control" value="<?=$a['dusun_lama'] ?>" name="dusunlama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kelurahan/Desa Lama</label>
              <input type="text" class="form-control" value="<?=$a['kelurahan_desa_lama'] ?>" name="keldesalama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kecamatan Lama</label>
              <input type="text" class="form-control" value="<?=$a['kecamatan_lama'] ?>" name="keclama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kabupaten/Kota Lama</label>
              <input type="text" class="form-control" value="<?=$a['kabkota_lama'] ?>" name="kabkotalama" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Provinsi Lama</label>
              <input type="text" class="form-control" value="<?=$a['provinsi_lama'] ?>" name="provlama" required="">
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/pendudukmasuk/')?>" class="btn btn-default">Cancel</a>
              <button type="button" id="btn-submit" name="edit" class="btn btn-info pull-right">Edit</button>
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