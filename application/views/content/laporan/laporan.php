<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
	<div class="box box-primary">
	<div class="box-header">
	  <h3 class="box-title"><?php echo $namatable; ?></h3>
	</div>

	<div class="box-body">
          <form role="form" method="post" target="_blank" action="<?php echo site_url('laporan/printlaporan'); ?>">

			<!-- Date -->
			<div class="form-group col-md-6">
			<label>Dari Tanggal</label>
			<div class="input-group date">
			<div class="input-group-addon">
			<i class="fa fa-calendar"></i>
			</div>
			<input type="text" placeholder="YYYY-MM-DD" class="form-control pull-right" name="tglMulai" id="datepicker" required="">
			</div>
			<!-- /.input group -->
			</div>
			<!-- /.form group -->

			<!-- Date -->
			<div class="form-group col-md-6">
			<label>Sampai Tanggal</label>
			<div class="input-group date">
			<div class="input-group-addon">
			<i class="fa fa-calendar"></i>
			</div>
			<input type="text" placeholder="YYYY-MM-DD" class="form-control pull-right" name="tglAkhir" id="datepicker2" required="">
			</div>
			<!-- /.input group -->
			</div>
			<!-- /.form group -->


      <?php  
        if($this->session->userdata('level') == 'Kepala Lurah'){
      ?>
			<div class="form-group">
      <label>Jenis Laporan</label>
      <select class="form-control" name="ttd" required="">
      <option selected="" value="1">Semua Laporan</option>
      <option value="2">Kelahiran</option>
      <option value="3">Kematian</option>
      <option value="4">Mutasi Masuk</option>
      <option value="5">Mutasi Keluar</option>
      </select>
      </div>
      <?php } else { } ?>
      
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Cetak Laporan</button>
            </div>
          </form>
        </div>
	<!-- /.box-body -->
	</div>

    </div>
    <!-- /.col -->

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