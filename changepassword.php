<!-- This is the file that allows users to change  their passwords -->
<!-- This page views all administrators -->
<?php
  session_start();
  include 'configurations/connection.php';
  $id=$_SESSION['id'];
  // checking if a user is really a system admin

  // including the header
  include 'include/header.php';
  $sql="SELECT * FROM user WHERE 
  id='$id' ";
  $qry=mysqli_query($conn,$sql);


?>
 
<div class="wrapper">
<!-- navbar section -->
<?php
 include 'include/adminnav.php';
 ?>

            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row ">
                  <div class="col-sm-6">
                    <h4 class="m-0 text-olive"><i class="fa fa-key"></i> Change Password</h4>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item text-olive"><a href="admin.php" class="text-olive">Admin</a></li>
                      <li class="breadcrumb-item ">Dashboard</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
    
      
    <section class="content" >
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center bg-olive">
                
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="post" action="configurations/passchange.php">
                  <div class="card-body">
                    <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">Current Password</label>
                        <input type="password" name="opass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                      </div>
                      <div class="form-group col-md-12">
                          <label for="exampleInputPassword1">Confirm New Password</label>
                          <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Connfirm New Password">
                        </div>
              
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit" class="btn bg-olive btn-block" name="save">Change Password</button>
                   
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
           
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
   
        </div><!-- /.container-fluid -->
      </section> 
      <br>
      
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
\
