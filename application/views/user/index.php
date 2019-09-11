  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><h1>POS</h1></div>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      </hr>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-user"></i>
          <span>Customer</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-check-circle"></i>
          <span>Product</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-check-circle"></i>
          <span>Category Product</span></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-check-circle"></i>
          <span>Transaction</span></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-check-circle"></i>
          <span>Detail Transaction</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logged out
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row"> 
  <div class="col-lg-4"> 
    <div class="panel panel-default">
      <div class="panel-heading"> 
        <h3 class="panel-title"><i class="glyphicon glyphicon-random arrow-right"></i> Customers</h3> 
      </div> 
      <div class="panel-body"> 
        <div class="list-group"> 
          <?php foreach($customers as $c){ ?> 
            <a href="#" class="list-group-item"> 
              <i class="glyphicon glyphicon-user"></i> <?php echo $c->name; ?> 
            </a> 
            <?php } ?> </div> 
            <div class="text-right"> 
              <a href="<?php echo base_url().'user/customer' ?>">See for all <i class="glyphicon glyphicon-arrow-right"></i></a> 
            </div> 
          </div> 
        </div> 
      </div> 
      <div class="col-lg-3"> 
        <div class="panel panel-default"> 
          <div class="panel-heading"> 
            <h3 class="panel-title"><i class="glyphicon glyphicon-user o"></i> New Customers</h3> 
          </div> 
          <div class="panel-body"> 
            <div class="list-group"> 
              <?php foreach($products as $p){ ?> <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-user"></i> <?php echo $p->name; ?> 
              </a> 
              <?php } ?> 
            </div> 
            <div class="text-right"> 
              <a href="<?php echo base_url().'admin/kostumer' ?>">See for all <i class="glyphicon glyphicon-arrow-right"></i></a> 
            </div> 
          </div> 
        </div> 
      </div>
            </div>
            </div>
          </div>
        </div>
      </div>