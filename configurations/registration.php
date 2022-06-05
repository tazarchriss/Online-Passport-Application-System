<!-- This file performs the operation of adding a new police -->

<?php
session_start();
require_once('connection.php');

if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $sex=$_POST['sex'];
    $dob=$_POST['dob'];
    $nin=$_POST['nin'];

   

//    query preparation
    $qry="INSERT INTO `user`(`fname`, `mname`, `lname`, `dob`, `sex`, `nin`, `role`) VALUES ('$fname','$mname','$lname','$dob','$sex', '$nin', '5')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {
  
        header('location:../allcitizens.php?success');
      }
 
      }
// For citizen registration
if(isset($_POST['registerme']))
{
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $address=$_POST['address'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $nin=$_POST['nin'];

   if($password1!=$password2){
       header('Location:../register.php?mismatch');

   }

   
   else{
        //    query preparation
    $qry="UPDATE `user` SET  `email`='$email',`pnumber`='$pnumber',`address`='$address',`password`='$password1' WHERE `nin`='$nin' ";
    // query execution 
       $register=mysqli_query($conn,$qry);
      if(!$register){
        die(mysqli_error($conn));
        }
    
        else
        {
            $qry="SELECT * FROM user where nin='$nin' and password='$password1' limit 1 ";

            $login=mysqli_query($conn,$qry);
    
            if(!$login) 
            {
                header('location:../index.php?request=1');
            }
            
            else{
            $rows=mysqli_num_rows($login);
            if($rows==0){
                header('location:../register.php?request=2');
               
            }
            else{
                $res=mysqli_fetch_array($login);
                $id=$res['id'];
                $fname=$res['fname'];
                $mname=$res['mname'];
                $lname=$res['lname'];
                $role=$res['role'];
         
                
                
    
                // session creation
                $_SESSION['id']=$id;
                $_SESSION['fname']=$fname;
                $_SESSION['mname']=$mname;
                $_SESSION['lname']=$lname;
                $_SESSION['role']=$role;
            
              
                header('location:../applicant.php?success');
          }
    

   }

 
      }
    }
}
      

?>
