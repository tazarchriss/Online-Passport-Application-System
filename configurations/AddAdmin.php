<!-- This is the file that performs the operation of
 adding a new administrator -->
 <?php

require_once('connection.php');

if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $password=$lname;
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $sex=$_POST['sex'];
    $dob=$_POST['dob'];
    $position=$_POST['position'];
    $address=$_POST['address'];
    $empID=$_POST['empID'];
    // $region=$_POST['region'];
   

//    query preparation
    $qry="INSERT INTO `user`(`fname`, `mname`, `lname`, `dob`, `sex`, `nin`, `email`, `pnumber`, `role`, `password`) VALUES ('$fname','$mname','$lname','$dob','$sex', '$empID', '$email', '$pnumber', '1', '$password')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    die(mysqli_error($conn));
    }

    else
    {
      $sql1="SELECT * FROM `user` WHERE `nin`='$empID'";
      $qry1=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($qry1)=='0'){
          header('Location:AddAdministrator.php?fail');
      }
      else
      {
        $res=mysqli_fetch_array($qry1);
        $id=$res['id'];
        
          
      $sql3="INSERT INTO `admin` (`userid`, `position`, `region`, `address`, `status`) VALUES ('$id','$position','none','$address', 'Active')";
      $qry3=mysqli_query($conn,$sql3);
      if (!$qry3) {
        header('location:../administrators.php?fail2');
      }
      else
      {
        header('location:../administrators.php?success');
      }
 
      }
      
 }
}
?>
