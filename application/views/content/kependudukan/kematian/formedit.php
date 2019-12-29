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
  
  // tempat meninggal
  if (form.tempat_mati == "") {
  alert("Tempat Meninggal Kosong!");
  $('input[name="tempat_mati"]').focus();
  return (false);
  } 
  // tanggal meninggal
  else if (form.tgl_mati == "") {
  alert("Tanggal Meninggal Kosong!");
  $('input[name="tgl_mati"]').focus();
  return (false);
  } 
  // alamat
  else if (form.penyebab == "") {
  alert("Penyebab Kosong!");
  $('textarea[name="penyebab"]').focus();
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
          <form role="form" id="form_submit" method="post" action="<?=site_url('kependudukan/kematian/edit_aksi') ?>">
            <!-- text input -->
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control"  value="<?=$penduduk['nik'] ?>" name="nik" readonly="">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$penduduk['nama'] ?>" name="nama" required="" readonly="">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" name="alamat" readonly=""><?=$penduduk['alamat'] ?></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label>Lingkungan/Banjar</label>
                <select class="form-control select2" name="lingkungan">
                <option selected="selected" value="<?=$penduduk['kode'] ?>"><?=$penduduk['lingkungan'] ?></option>                
              </select>
            </div>

            <!-- <div class="form-group">
              <label>No Surat Kematian</label>
              <input type="text" class="form-control" placeholder="Masukkan No Surat Kematian" name="no_surat_mati" required="">
            </div> -->

            <!-- <div class="form-group">
              <label>Tanggal Surat</label>
              <input type="text" class="form-control" placeholder="YYY/MM/DD" id="datepicker" name="tgl_surat" required="">
            </div> -->

            <div class="form-group col-xs-6">
              <label>Tempat Meninggal</label>
              <input type="text" class="form-control" placeholder="Masukkan Tempat Meninggal (Rumah Sakit, Posyandu, Puskesmas, dll)" name="tempat_mati" required="">
            </div>

            <div class="form-group">
              <label>Tanggal Meninggal</label>
              <input type="text" class="form-control" placeholder="YYY-MM-DD" id="datepicker2" name="tgl_mati" required="">
            </div>

            <div class="form-group">
              <label>Penyebab</label>
              <textarea class="form-control" rows="3" name="penyebab" placeholder="Masukkan Penyebab Meninggal" required=""></textarea>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kematian')?>" class="btn btn-default">Cancel</a>
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