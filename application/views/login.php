<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>POS - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">POS APPLICATION</h1>
                    <?php 
                        if(isset($_GET['pesan'])){ 
                          if($_GET['pesan'] == "gagal"){ 
                            echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>"; 
                              }else if($_GET['pesan'] == "logout"){ 
                       echo "<div class='alert alert-danger'>Anda telah logout.</div>";
                      }else if($_GET['pesan'] == "belumlogin"){ 
                   echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
                     }
                    }
                        ?>
                  </div>
                  <form method="post" action="<?php echo base_url().'welcome/login' ?>">
          <div class="form-group">
            <input type="text" name="email" placeholder="Enter Email Address..." class="form-control">
            <?php echo form_error('email'); ?>
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
            <?php echo form_error('password'); ?>
          </div> 
          <div class="form-group">
          
            <input type="submit" value="Login" class="btn btn-primary btn-block">
          </div>
        </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
