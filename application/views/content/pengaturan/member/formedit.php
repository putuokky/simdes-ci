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
          <form role="form" method="post" action="<?=site_url('pengaturan/user/edit_aksi') ?>">
            <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" value="<?=$a['kode'] ?>" name="kode" readonly="" >
            </div>

            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" value="<?=$a['nip'] ?>" name="nip" readonly="" >
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" value="<?=$a['nama'] ?>" name="nama" required="">
            </div>

            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" value="<?=$a['username'] ?>" name="username" required="" readonly="" >
            </div>

            <div class="form-group">
              <label>Level</label>
              <select class="form-control select2" name="level">
                <option selected="selected" value="<?=$a['level'] ?>"><?=$a['level'] ?></option>
                <option>Admin</option>
                <option>Pegawai</option>
                <option>Kepala Lurah</option>
              </select>
            </div>

            <div class="box-footer">
              <a href="<?=site_url('pengaturan/user')?>" class="btn btn-default">Cancel</a>
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
      format: 'yyyy/mm/dd'
    });

    $('#datepicker2').datepicker({                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
      autoclose: true,
      format: 'yyyy/mm/dd'
    });

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>