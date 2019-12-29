<header class="main-header">
<!-- Logo -->
<a href="<?php echo base_url('home'); ?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b class="glyphicon glyphicon-globe"></b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b><?php echo $brand; ?></b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Control Sidebar Toggle Button -->
      <?php if ($this->session->userdata('username')) { ?>
      <li>
        <a href="<?php echo base_url('profile'); ?>"><i class="fa fa-user"> Profile</i></a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>
</header>