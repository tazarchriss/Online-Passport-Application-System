<!-- This is the file that performs the login operation,session creation
 and user redirection -->

 <?php
 session_start();
// including the database
require_once('connection.php');
// start of login function
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $qry="SELECT * FROM user where email='$email' and password='$password' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            header('location:../index.php?request=1');
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:index.php?request=2');
           
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
 
          
            // start of user redirection

            // case user is system admin
            if ($_SESSION['role']=='1') {
                header('Location:../admin.php');
            }
            // case user is regional administrator
            elseif ($_SESSION['role']=='2') {
                header('Location:../ra.php');
            }

            // case user is passport administrator
            elseif ($_SESSION['role']=='3') {
                header('Location:../pa.php');
            }

            // case user is police officer
            elseif ($_SESSION['role']=='4') {
                header('Location:../police.php');
            }

            // case user is a normal citizen
            else {
                header('Location:../applicant.php');
            }
            
        }
           
        }
    }
    ?>
