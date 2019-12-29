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
  // no kk
  if (form.nokk == "") {
  alert("No KK Kosong!");
  $('input[name="nokk"]').focus();
  return (false);
  } 
  // status keluarga
  else if ($('#status_keluarga').val() == "") {
  alert("Status Keluarga Kosong!");
  $('#status_keluarga').focus();
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
          <form role="form" method="post" id="form_submit" action="<?=site_url('kependudukan/kependudukan/buatkk_aksi') ?>">
            <!-- text input -->
            <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control" value="<?=$a['nik'] ?>" name="nik" readonly="">
            </div>

            <div class="form-group">
              <label>No KK</label>
              <input type="number" class="form-control" placeholder="Masukkan Nomor KK" name="nokk" required="">
            </div>

            <div class="form-group">
              <label>Status Keluarga</label>
              <select class="form-control" name="status_keluarga" id="status_keluarga" required="">
                <option selected="selected" value="">- Pilih -</option>
                <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                <option value="ISTRI">ISTRI</option>
                <option value="ANAK">ANAK</option>
                <option value="ORANG TUA">ORANG TUA</option>
                <option value="MERTUA">MERTUA</option>
                <option value="MENANTU">MENANTU</option>
                <option value="CUCU">CUCU</option>
                <option value="FAMILI LAIN">FAMILI LAIN</option>
                <option value="LAINNYA">LAINNYA</option>
              </select>
            </div>

            <!-- <div class="form-group">
              <label>No Urut KK</label>
              <input type="text" class="form-control" placeholder="Masukkan Nomor Urut KK" name="nourutkk" required="">
            </div> -->

            <div class="box-footer">
              <a href="<?=site_url('kependudukan/kependudukan')?>" class="btn btn-default">Cancel</a>
              <button type="button" id="btn-submit" name="edit" class="btn btn-info pull-right">Buat KK</button>
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