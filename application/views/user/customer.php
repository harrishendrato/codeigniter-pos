<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>POS - Customer</title>
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
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
        <a class="nav-link" href="<?php echo base_url().'user/index' ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      </hr>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/customer'?>">
          <i class="fas fa-user"></i>
          <span>Customer</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/product' ?>">
          <i class="fas fa-check-circle"></i>
          <span>Product</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/category_product' ?>">
          <i class="fas fa-check-circle"></i>
          <span>Category Product</span></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/sale' ?>">
          <i class="fas fa-check-circle"></i>
          <span>Sale</span></a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'user/sales_item' ?>">
          <i class="fas fa-check-circle"></i>
          <span>Sale Item</span></a>
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
  <h1 class="h1 mb-0 text-gray-800">Customer</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>  
<br/><br/> 
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Name</th> 
				<th>Address</th> 
				<th>Created at</th> 
				<th>Updated at</th>
				<th></th>
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			$no = 1; 
			foreach($customers as $cts){ 
				?>
				<tr> 
					<td><?php echo $no++; ?></td> 
					<td><?php echo $cts->name ?></td> 
					<td><?php echo $cts->address ?></td> 
					<td><?php echo $cts->created_at ?></td> 
					<td><?php echo $cts->updated_at ?></td>
				<td> 
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().'user/customer_edit/'.$cts->id; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a> 
					<a class="btn btn-danger btn-sm" href="<?php echo base_url().'user/customer_delete/'.$cts->id; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
				</td> 
			</tr> 
			<?php 
		} 
		?> 
	</tbody> 
</table>
<a href="<?php echo base_url().'user/customer_add'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> New Customer</a> 
</div>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> 
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
</body>
</html>