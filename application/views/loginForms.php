<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-5/css/all.css') ?>" rel="stylesheet" type="text/css">
    <link 
    href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>"   rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body style="background-color:rgb(78,115,223)">
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <img src="<?php echo base_url('assets/img/1.jpg') ?>" alt="" width="500px" height="600px">
                      </div>
                      <div class="col-lg-6">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">Login Form</h1>
                              </div>
                              <form class="user" action="<?php echo site_url('user_controller/check_login') ?>" method="post">
                                  <div class="form-group">
                                      <input type="email" class="form-control form-control-user"
                                          id="exampleInputEmail" aria-describedby="emailHelp"
                                          placeholder="Enter Email Address..."
                                          name="email">
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-user"
                                          id="exampleInputPassword" placeholder="Password"
                                          name="password">
                                    </div>
                                  <button class="btn btn-primary btn-user btn-block">
                                      Login
                                    </button>
                                
                                  <hr>
                                  <a href="index.html" class="btn btn-google btn-user btn-block">
                                      <i class="fab fa-google"></i> Login with Google
                                  </a>
                                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                      <i class="fab fa-facebook-f "></i> Login with Facebook
                                  </a>
                              </form>
                              <hr>
                              <div class="text-center">
                                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                              </div>
                              <div class="text-center">
                                  <a class="small" href="<?php echo site_url('login_controller/inscription')?>">Create an Account!</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>

  </div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</div>
</body>
</html>
