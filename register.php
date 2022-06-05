<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TOPAS | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <style>
      body{
          background-image: url('b3.jpg');
      }
  </style>
</head>




  <!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light bg-olive text-light" style="width:1020;">
    <!-- Left navbar links -->
    <h5>
       
        <a href="index3.html" class="nav-link text-light text-bold"> <img src="logo.png" style="height:25px;"> TOPAS</a>
    </h5>
    <ul class="navbar-nav text-light">
     
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

  
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <body >
  <!-- /.navbar -->
  <div class="">
 <!-- login form section -->
  <div class="row mt-5">
      <div class="col-md-10 mx-auto">
          <div class="card p-3">
            <form action="configurations/registration.php" method="post" class="form-group">
            

                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> NIN</label>
                    <input type="text" name="nin" id="nin" class="form-control" placeholder="Enter NIN">
                </div>
                
                <div class="form-group col-md-6 float-left">
                    <label for="email" class="text-olive">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="pnumber" class="text-olive"> Phone Number</label>
                    <input type="text" name="pnumber" id="pnumber" class="form-control" placeholder="Enter Phonenumber">
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="address" class="text-olive">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
                </div>
                
             
                <div class="form-group col-md-6 float-left">
                    <label for="password1" class="text-olive"> Password</label>
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Enter Password">
                </div>
                
                <div class="form-group col-md-6 float-left">
                    <label for="password2" class="text-olive">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm password">
                </div>
  
                <button type="submit" name="registerme" class="btn bg-olive ">
                    Register 
                </button>
                <a href="index.php" class="btn btn-dark">Login</a>
             </form> 
          </div>

      </div>
  </div>
 

  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="fixed-bottom text-center bg-dark" style="height: 100px;">
    <br>
  <strong>Copyright &copy; 2021/2022 <a href="" class="text-olive">Ezekiel Mtawa</a>.</strong>
  All rights reserved.
  <div class="">
  <h1></h1>
  </div>
</footer>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
