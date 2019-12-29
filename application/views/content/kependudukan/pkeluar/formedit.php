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
  // tanggal pindah
  if (form.tglpindah == "") {
  alert("Tanggal Pindah Kosong!");
  $('input[name="tglpindah"]').focus();
  return (false);
  } // alamat tujuan
  else if (form.alamattujuan == "") {
  alert("Alamat Tujuan Kosong!");
  $('textarea[name="alamattujuan"]').focus();
  return (false);
  } 
  // dusun baru
  else if (form.dusunbaru == "") {
  alert("Dusun Baru Kosong!");
  $('input[name="dusunbaru"]').focus();
  return (false);
  } 
  // Kelurahan/desa baru
  else if (form.keldesabaru == "") {
  alert("Kelurahan/Desa Baru Kosong!");
  $('input[name="keldesabaru"]').focus();
  return (false);
  } // kecamatan baru
  else if (form.kecbaru == "") {
  alert("Kecamatan Baru Kosong!");
  $('input[name="kecbaru"]').focus();
  return (false);
  } 
  // Kabupaten/kota baru
  else if (form.kabkotabaru == "") {
  alert("Kabupaten/Kota Baru Kosong!");
  $('input[name="kabkotabaru"]').focus();
  return (false);
  }
  // provinsi baru
  else if (form.provbaru == "") {
  alert("Provinsi Kosong!");
  $('input[name="provbaru"]').focus();
  return (false);
  }
   // keterangan
  else if (form.keterangan == "") {
  alert("Keterangan Kosong!");
  $('textarea[name="keterangan"]').focus();
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
        <?php foreach ($update as $penduduk) { ?>
          <form role="form" method="post" id="form_submit" action="<?=site_url('kependudukan/pendudukkeluar/edit_aksi') ?>">
            <!-- text input -->

            <!-- <div class="form-group">
              <label>No Surat Keluar</label>
              <input type="text" class="form-control" placeholder="Masukkan No Surat Keluar" name="nosuratkeluar" required="">
            </div> -->

            <!-- <div class="form-group">
              <label>Tanggal Surat</label>
              <input type="text" class="form-control" placeholder="YYY/MM/DD" id="datepicker" name="tgl_surat" required="">
            </div> -->

            <div class="form-group col-xs-6">
              <label>NIK</label>
              <input type="text" class="form-control"  value="<?=$penduduk['nik'] ?>" name="nik" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$penduduk['nama'] ?>" name="nama" required="" readonly="">
            </div>

            <div class="form-group col-xs-6">
              <label>Tanggal Pindah</label>
              <input type="text" class="form-control" placeholder="YYY/MM/DD" id="datepicker2" name="tglpindah" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Lingkungan/Banjar</label>
                <select class="form-control select2" name="lingkungan">
                <option selected="selected" value="<?=$penduduk['kode'] ?>"><?=$penduduk['lingkungan'] ?></option>                
              </select>
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" name="alamat" readonly=""><?=$penduduk['alamat'] ?></textarea>
            </div>

           <!--  <div class="form-group col-xs-6">
              <label>No Surat</label>
              <input type="text" class="form-control" placeholder="Masukkan No Surat" name="nosurat" required="">
            </div> -->

            <div class="form-group">
              <label>Alamat Tujuan</label>
              <textarea class="form-control" rows="3" name="alamattujuan" placeholder="Masukkan Alamat Tujuan"></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label>Dusun Baru</label>
              <input type="text" class="form-control" placeholder="Masukkan Dusun Baru" name="dusunbaru" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kelurahan/Desa Baru</label>
              <input type="text" class="form-control" placeholder="Masukkan Kelurahan/Desa Baru" name="keldesabaru" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kecamatan Baru</label>
              <input type="text" class="form-control" placeholder="Masukkan Kecamatan Baru" name="kecbaru" required="">
            </div>

            <div class="form-group col-xs-6">
              <label>Kabupaten/Kota Baru</label>
              <input type="text" class="form-control" placeholder="Masukkan Kabupaten/Kota Baru" name="kabkotabaru" required="">
            </div>

            <div class="form-group">
              <label>Provinsi Baru</label>
              <input type="text" class="form-control" placeholder="Masukkan Provinsi Baru" name="provbaru" required="">
            </div>

            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" rows="3" name="keterangan" placeholder="Keterangan Penduduk Keluar" required=""></textarea>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/pendudukkeluar')?>" class="btn btn-default">Cancel</a>
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