<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <h3 class="profile-username text-center"><?php echo $data_user->nama; ?></h3>

          <p class="text-muted text-center"><?php echo $data_user->nip; ?></p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-user margin-r-5"></i> Status</strong>

          <p class="text-muted"><?php echo $data_user->level; ?></p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

          <p class="text-muted"><?php echo $data_user->alamat; ?></p>

          <hr>

          <strong><i class="fa fa-phone margin-r-5"></i> Telpon</strong>

          <p class="text-muted"><?php echo $data_user->telpon; ?></p>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <?php if ($this->session->flashdata('pesan') <> '') { ?>
        <div class="alert alert-success alert-dismissible">
          <h4><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('pesan'); ?></h4>
        </div> 
        <?php  }
        ?>
      <div class="nav-tabs-custom">
        
        <div class="tab-content">

            <form class="form-horizontal" method="post" action="<?=site_url('profile/edit_aksi') ?>">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">NIP</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nip" id="inputName" placeholder="NIP" readonly="" value="<?php echo $data_user->nip; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" id="inputEmail" placeholder="Nama" required="" value="<?php echo $data_user->nama; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username"  id="inputName" placeholder="Username" readonly="" value="<?php echo $data_user->username; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="inputName" placeholder="Password" required="" value="<?php echo $data_user->password; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-10">
                  <textarea class="form-control" name="alamat" id="inputExperience" placeholder="Alamat"><?php echo $data_user->alamat; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Telpon</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tlp" id="inputSkills" placeholder="Telpon" value="<?php echo $data_user->telpon; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Edit</button>
                </div>
              </div>
            </form>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->