<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3"><h1>POS</h1></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <span>Dashboard</span></a>
         </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html">
          <span>Customers</span></a>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="index.html">
          <span>Products</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="index.html">
            <span>Categories Products</span></a>
            </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <span>Transaction</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <span>Sales Transaction</span></a>
      </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <div class="row">
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