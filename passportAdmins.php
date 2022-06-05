<?php
  session_start();
  include 'configurations/connection.php';
  
  // checking if a user is really a system admin
  $id=$_SESSION['id'];
  $sql1="SELECT * FROM user,admin 
  WHERE user.id='$id'
  AND admin.userid='$id'
  ";
  $qry1=mysqli_query($conn,$sql1);
  
  $res=mysqli_fetch_array($qry1);

  $reg=$res['region'];
  // including the header
  include 'include/header.php';
  $sql="SELECT * FROM user,admin 
  WHERE user.role='3'
  AND user.id=admin.userid
  AND admin.region='$reg'
    ";
  $qry=mysqli_query($conn,$sql);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
<!-- navbar section -->
<?php
 include 'include/ranav.php';
 ?>
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="text-olive"><i class="fa fa-user-tie"></i> Passport Admininstrators</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-olive">Home</a></li>
              <li class="breadcrumb-item active">Passport Admininstrators</li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
       <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
  
        <!-- Table start -->
        <div class="card mt-2">
          
            <div class="card-header bg-olive">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
          <?php   if (mysqli_num_rows($qry) == 0){


          ?>
          <h6 class="text-center text-danger"> There are no any Passport Admininstrators Registered in Your Region! </h6>

          <?php

          }

          else{?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SN</th>
                  <th>Full Names</th>
                  <th>NIN</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    for ($i=1; $i<=mysqli_num_rows($qry); $i++){
                      $row = mysqli_fetch_array($qry);
                 

                  
                  ?>
            <tr>
              <td>
                <?php echo $i; ?></td>
                <td>
                <?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?>
              </td>
              <td>
                
                <?php echo $row['email']; ?>
              </td>
            
              <td>
              <?php echo $row['pnumber']; ?> 
             </td>
           
              <td>
                  <div class="text-center">
                    <a href="crime.php?id=<?php echo $row['id'];?>" class="text-center badge badge-success">View PA</a>
                     
                  </div>
              </td>
            </tr>
            <?php 
              }
            }
              ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>


