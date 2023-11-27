

 <body class="navbar-top">

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-danger bg-dark navbar-static fixed-top">
  <div class="navbar-brand">
    <a href="<?php echo base_url(); ?>" class="d-inline-block">
      <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="70px" height="100px">
    </a>
  </div>

  <div class="d-md-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
      <i class="icon-tree5"></i>
    </button>
    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
      <i class="icon-paragraph-justify3"></i>
    </button>
  </div>

        <?php if($this->session->userdata('logged_in')): ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
              </a>
            </li>
          </ul>
        <?php endif; ?>

            <!-- If the system is not logged into  this is the main nav bar -->
            <?php if(!$this->session->userdata('logged_in')): ?>
            <ul style="margin-top: 10px;" class="navbar-nav ml-auto">
              <li class="nav-item dropdown dropdown-user">
                <a href="<?php echo base_url(); ?>users/login" class="link text-light">
                  <span>Login Here</span>
                </a>
              </li>
            </ul>
            <?php endif; ?>

            <!-- If someone logs into the system  this is the main nav bar -->
            <?php if($this->session->userdata('logged_in')): ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/images/admin/admin.jpg" class="rounded-circle mr-2" height="34" alt="">

                  <?php if($this->session->userdata('username')): ?>
                  <span class="text-uppercase"><?php echo $this->session->userdata('username') ?></span>
                  <?php endif;?>

                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <a href="<?php echo base_url(); ?>users/logout" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
              </li>
            </ul>
            <?php endif; ?>


  </div>
</div>
<!-- /main navbar -->