<!-- This file performs the operation of adding a new police -->

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
    $address=$_POST['address'];
    $pID=$_POST['pID'];
    $station=$_POST['station'];
   

//    query preparation
    $qry="INSERT INTO `user`(`fname`, `mname`, `lname`, `dob`, `sex`, `nin`, `email`, `pnumber`, `role`, `password`) VALUES ('$fname','$mname','$lname','$dob','$sex', '$pID', '$email', '$pnumber', '2', '$password')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {
      $sql1="SELECT * FROM `user` WHERE `nin`='$pID'";
      $qry1=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($qry1)=='0'){
          header('Location:AddAdministrator.php?fail');
      }
      else
      {
        $res=mysqli_fetch_array($qry1);
        $id=$res['id'];
        
          
      $sql3="INSERT INTO `police`(`userid`, `station`) VALUES ('$id','$station')";
      $qry3=mysqli_query($conn,$sql3);
      if (!$qry3) {
        header('location:../allpolices.php?fail2');
      }
      else
      {
        header('location:../allpolices.php?success');
      }
 
      }
      
 }
}
?>
