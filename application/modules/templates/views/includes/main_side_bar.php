





    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">

      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->


      <!-- Sidebar content -->
      <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
          <div class="sidebar-user-material-body">
            <div class="card-body text-center">
              <a href="#">
                <img src="<?php echo base_url(); ?>assets/images/admin/admin.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
              </a>
              <!-- <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
              <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span> -->
            </div>
                          
            <div class="sidebar-user-material-footer">
              <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse">

                  <?php if($this->session->userdata('username')): ?>
                  <span class="text-uppercase"><?php echo $this->session->userdata('username') ?></span>
                  <?php endif;?>
                  
              </a>
            </div>
          </div>

          <div class="collapse" id="user-nav">
            <ul class="nav nav-sidebar">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>users/logout" class="nav-link">
                  <i class="icon-switch2"></i>
                  <span> Log out </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
          <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>" class="nav-link">
                <i class="icon-home4"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>companies" class="nav-link">
                <i class="icon-cash4"></i>
                <span>All Companies</span>
              </a>
            </li>

            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-download7"></i> 
                <span> Jobs </span></a>

              <ul class="nav nav-group-sub" data-submenu-title="<?php //echo $this->lang->line('employees');?>">
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>jobs" class="nav-link">
                    <i class="icon-download7"></i> <?php echo "Posted Jobs Only"; ?>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>jobs/categories" class="nav-link">
                  <i class="icon-puzzle3"></i> <?php echo "All Jobs and Categories"; ?>
                  </a>
                </li>
                
              </ul>
            </li>


            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-users4"></i> 
                <span>Meet Others</span></a>

              <ul class="nav nav-group-sub" data-submenu-title="<?php //echo $this->lang->line('employers');?>">
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>workers" class="nav-link">
                    <i class="icon-users2"></i> 
                     See All Workers
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item nav-item-submenu">
              <a href="#" class="nav-link"><i class="icon-file-presentation"></i> 
                <span>Workers in your Category</span></a>

              <ul class="nav nav-group-sub" data-submenu-title="<?php //echo $this->lang->line('reports');?>">
                  <li class="nav-item">
                  <a href="<?php //echo BASE_URL; ?>report" class="nav-link">
                    <i class="icon-add-to-list"></i>
                    Coming Soon
                  </a>
                 </li>
                  <li class="nav-item">
                  <a href="<?php //echo BASE_URL; ?>report" class="nav-link">
                    <i class="icon-add-to-list"></i>
                    Coming Soon
                  </a>
                 </li>
                  <li class="nav-item">
                  <a href="<?php //echo BASE_URL; ?>report/outStanding" class="nav-link">
                    <i class="icon-stack-empty"></i>
                    Coming Soon
                  </a>
                 </li>
              </ul>
            </li>



            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="icon-list-unordered"></i>
                <span>Management</span>
                <span class="badge bg-blue-400 align-self-center ml-auto">Coming soon</span>
              </a>
            </li> -->
            <!-- /main -->

          </ul>
        </div>
        <!-- /main navigation -->

      </div>
      <!-- /sidebar content -->
      
    </div>
    <!-- /main sidebar -->