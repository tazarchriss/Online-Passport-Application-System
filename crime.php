<?php
    session_start();

    require_once('configurations/connection.php');
    $id=$_GET['id'];

    include 'include/header.php';
    $sql="SELECT * FROM passport_request,user,crime,region
    WHERE passport_request.req_id='$id'
    AND user.id=passport_request.applicant
    AND crime.nin=user.nin
    AND region.reg_id=crime.region";

    $qry=mysqli_query($conn,$sql);
  

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
        <div class="row mb-1">
          <div class="col-sm-6">
            <h6 class="text-olive"><i class="fa fa-file-pdf"></i> Crime Report</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-olive">Home</a></li>
              <li class="breadcrumb-item active">Check Crime</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
       <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card p-2">
        <?php

if (!$sql) {
    die(mysqli_error($conn));
}
else{
    if (mysqli_num_rows($qry)>0) {

        ?>

           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SN</th>
                  <th>Crime Detail</th>
                  <th>date</th>
                  <th>level</th>
                  <th>Region</th>
                </tr>
                </thead>
                <tbody>
                    <?php
        for ($i=1; $i<=mysqli_num_rows($qry); $i++){
        $row=mysqli_fetch_array($qry);
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['detail']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>




        <?php
        

        }

        ?>

        </tbody>

    </table>
    <hr>
    
    <h4 class="text-olive text-center mb-3"><?php echo $row['nin']; ?> has  committed crime so far!</h4>
        
    <?php 
            if ($row['req_status']=='Pending') {
              
        ?>
            <a href="configurations/criminal.php?id=<?php echo  $row['req_id']; ?>" class="bg-olive btn"><i class="fa fa-file-pdf"></i>  Submit Report</a>
        
            <?php
            }
            ?>
      
    <?php
        
    }
    else
    {

        $sql="SELECT * FROM passport_request,user
        WHERE passport_request.req_id='$id'
        AND user.id=passport_request.applicant";
    
        $qry=mysqli_query($conn,$sql); 
        $row=mysqli_fetch_array($qry);   
    ?>

    


        <h4 class="text-olive text-center mb-3"><?php echo $row['nin']; ?> is clean and has not committed any crime so far!</h4>

        <?php 
            if ($row['req_status']=='Pending') {
              
        ?>

        <a href="configurations/innocent.php?id=<?php echo  $row['req_id']; ?>" class="bg-olive btn"><i class="fa fa-file-pdf"></i>  Submit Report</a>
                <?php
            }
            ?>
    <?php
    }
}

?>
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



