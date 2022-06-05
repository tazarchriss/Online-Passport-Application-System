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
 include 'include/pnav.php';
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="text-olive text-left"><i class="fa fa-file"></i> Register Crime</h5>
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

                  <form action="Configurations/add_crime.php"  method="POST" class="form-group">
            
              <div class="row">        
                    <div class="form-group col-md-6 float-left">
                        <label for="email" class="text-olive">Criminal's Nin</label>
                        <input type="text" name="nin" id="email" class="form-control" placeholder="Enter Criminal Nin">
                    </div>
                    
                    <div class="form-group col-md-12 float-left">
                        <label for="password" class="text-olive">Crime Detail</label>
                        <textarea name="detail" id="" class="form-control" rows="5">
                        </textarea>
                        
                    </div>
                    <div class="form-group col-md-6 float-left">
                    <label for="level" class="text-olive"> Crime level</label>
                    <select name="level" id="" class="form-control bg-olive" required>
                
                        <option value="1" >Level 1</option>
                        <option value="2" >Level 2</option>
                        <option value="3" >Level 3</option>
                        <option value="4" >Level 4</option>
                        <option value="5" >Level 5</option>
               
                    </select>
                   
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="grade" class="text-olive"> Crime Grade</label>
                    <select name="grade" id="" class="form-control bg-olive" required>
                
                        <option value="A" >Grade A</option>
                        <option value="B" >Grade B</option>
                        <option value="C" >Grade C</option>
               
                    </select>
                   
                </div>

                    <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Current Region</label>
                    <select name="region" id="" class="form-control bg-olive" required>
                    <?php 

                        $sql12="SELECT * FROM region";
                        $qry12=mysqli_query($conn,$sql12);
                        if (mysqli_num_rows($qry12)!=0) {
                            for ($i=1; $i<=mysqli_num_rows($qry12); $i++){
                                $row = mysqli_fetch_array($qry12);
                            ?>
                        <option value="<?php echo $row['reg_id']; ?>" ><?php echo $row['name']; ?></option>
                    <?php
                        }
                    }

                    ?>
                    </select>
                   
                </div>
                    
                    <br>
            
                    <br>
      
                    <button name="crime" type="submit" class="btn bg-olive btn-block">
                        Register Crime
                    </button>
                    </div> 
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
