<?php
  session_start();
  require 'configurations/connection.php';
  $id=$_SESSION['id'];
  $sql="SELECT * FROM user WHERE id='$id'";
  $qry=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TOPAS | Citizen</title>

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


  <!-- <style>
      body{
          background-image: url('b3.jpg');
      }
  </style> -->
</head>




  <!-- Navbar -->
  <?php include 'include/citizennav.php'; ?>
  <body >


  <!-- /.navbar -->
<?php
  $sql1="SELECT * FROM user,passport_request WHERE user.id='$id' AND passport_request.applicant=user.id";
  $qry1=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($qry1)>0) {
        $result=mysqli_fetch_array($qry1);
?>
   <div class="row mt-2 ">
      <div class="col-md-10 mx-auto">
          <div class="card p-3">
            <form action="configurations/requestPassport.php" method="post" class="form-group" enctype="multipart/form-data">
            <div class="form-group col-md-2 float-right">
                <img src="uploads/<?php echo $result['image']; ?>" width="100%" height="100px">
                </div>
                <div class="form-group col-md-12 float-left">
                    <label for="nin" class="text-olive"> Full Names of Applicant</label><br>
                    <h5><?php echo $row['fname'].' '.$row['mname'],' '.$row['lname'] ; ?></h5>
                    
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Father's Name</label>
                    <h5><?php echo $row['mname'],' '.$row['lname'] ; ?></h5> 
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Surname</label>
                    <h5><?php echo $row['lname'] ; ?></h5>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="email" class="text-olive">Address</label>
                    <h5><?php echo $row['address']; ?></h5>
                </div>

             
                <div class="form-group col-md-6 float-left">
                    <label for="pnumber" class="text-olive"> Telephone No</label>
                   <h5><?php echo $row['pnumber']; ?></h5>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Occupation\Proffession</label>
                    <h5><?php echo $result['occupation'] ; ?></h5>
                </div>
                <div class="form-group col-md-6 float-right ">
                        <label for="" class="text-olive">Martial Status</label>
                        <br>
                    <label class="text-dark" for="<?php echo $result['martial']; ?>" class="text-olive"><?php echo $result['martial']; ?></label>
                  
                    </div>
                
                <div class="form-group col-md-12 float-left">
                    <label for="address" class="text-olive">Children (if you have):</label>
                    <textarea name="children" class="form-control" disabled><?php echo $result['children']; ?>

                    </textarea>
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

  
             </form> 
          </div>

      </div>
<!-- ./wrapper -->

        
<?php
}
else{
 ?>
  <div class="row mt-2 ">
      <div class="col-md-11 mx-auto">
          <div class="card p-3">
            <form action="configurations/requestPassport.php" method="post" class="form-group" enctype="multipart/form-data">
            <div class="form-group col-md-5 float-right">
                    <label for="nin" class="text-olive"> Image</label>
                    <input type="file" name="file" id="nin" class="" required>
                    <small>Upload you passport size image</small>
                </div>
                <div class="form-group col-md-12 float-left">
                    <label for="nin" class="text-olive"> Full Names of Applicant</label>
                    <input type="text" name="names" id="nin" class="form-control" value="<?php echo $row['fname'].' '.$row['mname'],' '.$row['lname'] ; ?>" disabled>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Father's Name</label>
                    <input type="text" name="fname" id="nin" class="form-control" value="<?php echo $row['mname'],' '.$row['lname'] ; ?>" disabled>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> SURNAME</label>
                    <input type="text" name="sname" id="nin" class="form-control" value="<?php echo $row['lname'] ; ?>" disabled>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="email" class="text-olive">Address</label>
                    <input type="address" name="address" id="email" class="form-control" value="<?php echo $row['address']; ?>" disabled>
                </div>

             
                <div class="form-group col-md-6 float-left">
                    <label for="pnumber" class="text-olive"> Telephone No</label>
                    <input type="text" name="pnumber" id="pnumber" class="form-control" value="<?php echo $row['pnumber']; ?>" disabled>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="nin" class="text-olive"> Occupation\Proffession</label>
                    <input type="text" name="occupation" id="nin" class="form-control" placeholder="Enter Your Occupation">
                </div>
                <div class="form-group col-md-6 float-right ">
                        <label for="" class="text-olive">Martial Status</label>
                        <br>
                        <input type="radio" name="martial" id="Single" value="Single" class="" >
                        <label for="Single" class="text-olive">Single</label>
                       
                        <input type="radio" name="martial" id="Married" value="Married" class="" >
                        <label for="Married" class="text-olive">Married</label>

                        <input type="radio" name="martial" id="Divorced" value="Divorced" class="" >
                        <label for="Divorced" class="text-olive">Divorced</label>
                    </div>
                
                <div class="form-group col-md-12 float-left">
                    <label for="address" class="text-olive">Children (if you have):</label>
                    <textarea name="children" class="form-control" ></textarea>
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

  
                <button type="submit" name="request" class="btn bg-olive btn-block">
                    Submit Application
                </button>
             </form> 
          </div>

      </div>
<!-- ./wrapper -->

<?php } ?>
<footer class=" text-center bg-dark" style="height: 100px;width:100%;">
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
