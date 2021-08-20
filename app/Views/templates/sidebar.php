<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <!-- sidebar-brand -->
      <div class="sidebar-brand">
        <img src="<?= site_url()?>assets/images/logoSchool.png" alt="" class="img-fluid" style="width: 40px">
        <a href="#" class="px-2 text-dark">LNHS-ES</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      
      <!-- sidebar-header -->
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="<?= site_url()?>assets/images/user.jpg" alt="User picture">
        </div>
        <div class="user-info text-secondary">
          <span class="user-name">
            <strong>John Doe</strong>
          </span>
          <span class="user-role text-dark">Registrar Staff</span>
          <span class="user-status">
            <i class="fa fa-circle text-success"></i>
            <span class="text-dark">Online</span>
          </span>
        </div>
      </div>
      <div class="sidebar-search">
        <div>
          <!-- sidebar-search -->
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text h-100">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-menu  -->
      <div class="py-2 sidebar-menu">
        <ul>
          <!-- dashboard nav link -->
          <li class="sidebar-dropdown active">
            <a href="#">
              <i class="fa fa-tachometer-alt fa-fw"></i>
              <span class="ps-1">Dashboard</span>
            </a>
          </li>

          <!-- enrollment nav link -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-address-card fa-fw"></i>
              <span class="ps-1">Enrollment</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">New Student
                  </a>
                </li>
                <li>
                  <a href="#">Old Student</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- ESC voucher -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-tags fa-fw"></i>
              <span class="ps-1">ESC Voucher</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Request</a>
                </li>
                <li>
                  <a href="#">Accepted</a>
                </li>
                <li>
                  <a href="#">Denied</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Reports -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line fa-fw"></i>
              <span class="ps-1">Reports</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Masterlist</a>
                </li>
                <li>
                  <a href="#">ESC Voucher</a>
                </li>
                <li>
                  <a href="#">Payment</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Account -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-user-cog fa-fw"></i>
              <span class="ps-1">Account</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Request</a>
                </li>
                <li>
                  <a href="#">Activated Account</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

      <div class="py-2 sidebar-menu">
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-sign-out-alt fa-fw"></i>
              <span class="ps-1">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-footer p-3">
      <a href="#">
        <i class="far fa-copyright"></i> <span>2021 LNHS-ES</span>
      </a>
    </div>
  </nav>  
<!-- page-wrapper -->
  <div class="page-content">