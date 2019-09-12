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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'user/customer'?>">
            <i class="fas fa-user"></i>
            <span>Customer</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'user/product'?>">
              <i class="fas fa-poll-h"></i>
              <span>Product</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'user/category'?>">
               <i class="fas fa-poll"></i>
               <span>Category</span></a>
             </li>

             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'user/sale'?>">
                <i class="fas fa-funnel-dollar"></i>
                <span>Sale</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'user/sale_item' ?>">
                  <i class="fas fa-archive"></i>
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
                        <a href="#" class="nav-link dropdown-toggle" id="user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "<b>".$this->session->userdata('name'); ?></b></span>
                          <img class="img-profile rounded-circle">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <a class="dropdown-item" href="<?php echo base_url().'user/logout'?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
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
                      <h1 class="h1 mb-0 text-gray-800">New Sale Item</h1>
                      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>  
                    <br/>
                    <form action="<?php echo base_url().'user/sale_item_update' ?>" method="post"> 
                     <div class="form-group"> 
                      <label>Price</label> 
                      <input type="text" name="price" class="form-control"> 
                      <?php echo form_error('price'); ?>
                    </div> 
                    <div class="form-group"> 
                     <label>Subtotal</label> 
                     <input type="number" name="subtotal" class="form-control"> 
                   </div> 
                   <div class="form-group"> 
                     <label>Product ID</label> 
                     <input type="number" name="Product_id" class="form-control"> 
                   </div> 
                   <div class="form-group"> 
                     <label>Sale ID</label> 
                     <input type="number" name="sale_id" class="form-control"> 
                   </div> 
                   <div class="form-group"> 
                     <label>Created at</label> 
                     <input type="date" name="created_at" class="form-control"> 
                   </div> 
                   <div class="form-group"> 
                     <label>Updated at</label> 
                     <input type="date" name="updated_at" class="form-control"> 
                   </div> 
                   <div class="form-group"> 
                     <input type="submit" value="Save" class="btn btn-primary"> 
                   </div>
                 </form>