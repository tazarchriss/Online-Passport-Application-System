<!-- This is  the page for registering Administrators -->
<?php
  session_start();
  include 'configurations/connection.php';
  
  // checking if a user is really a system admin

  // including the header
  include 'include/header.php';

?>
 
<div class="wrapper">
<!-- navbar section -->
<?php
 include 'include/adminnav.php';
 ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="text-olive text-left"><i class="fa fa-user-tie"></i> Register Admininstrator</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-olive">Home</a></li>
              <li class="breadcrumb-item active">Manage Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <!-- login form section -->
  <div class="row ">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header bg-olive"></div>
            <div class="card-body p-3">

                <form action="configurations/addAdmin.php" method="post" >
              
               <div class="row">
                    <div class=" col-md-6 mr-auto">
                        <label for="fname" class="text-olive"> First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name">
                    </div>
                    
                    <div class="form-group col-md-6 ">
                        <label for="password" class="text-olive">Middle Name</label>
                        <input type="text" name="mname" id="password" class="form-control" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="text" class="text-olive"> Last Name</label>
                        <input type="text" name="lname" id="email" class="form-control" placeholder="Enter Last Name">
                    </div>
                    
                    <div class="form-group col-md-6 float-left">
                        <label for="password" class="text-olive">Date Of Birth</label>
                        <input type="date" name="dob" id="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="email" class="text-olive"> Employee ID</label>
                        <input type="text" name="empID" id="email" class="form-control" placeholder="Enter Employee ID">
                    </div>
                    
                    <div class="form-group col-md-6 float-left">
                        <label for="password" class="text-olive">Email</label>
                        <input type="email" name="email" id="password" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="email" class="text-olive"> Phone Number</label>
                        <input type="text" name="pnumber" id="email" class="form-control" placeholder="Enter Phonenumber">
                    </div>
                    
                    <div class="form-group col-md-6 float-left">
                        <label for="password" class="text-olive">Address</label>
                        <input type="text" name="address" id="password" class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="form-group col-md-6 float-right">
                        <label for="email" class="text-olive"> Role</label>
                       <select name="position" class="form-control bg-olive">
                           <option value="system">System </option>
                           <option value="regional">Regional </option>
                           <option value="passport">Passport </option>
                           
                       </select>
                    </div>
                    
                    <div class="form-group col-md-6 ">
                        <label for="" class="text-olive">sex</label>
                        <br>
                        <input type="radio" name="sex" id="male" value="Male" class="" >
                        <label for="male" class="text-olive">Male</label>
                       
                        <input type="radio" name="sex" id="female" value="Female" class="" >
                        <label for="female" class="text-olive">Female</label>
                    </div>
</div>
                    <br>
            
                    <br>
      
                    <button type="submit" class="btn bg-olive btn-block" name="register">
                        Register Administrator
                    </button>
                 </form> 
            </div>
          
        </div>

    </div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer bg-dark text-center">
    <br>
    <strong>Copyright &copy; 2021/2022 <a href="" class="text-olive">Ezekiel Mtawa</a>.</strong>
    All rights reserved.
    <div class="">
    <h1></h1>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
