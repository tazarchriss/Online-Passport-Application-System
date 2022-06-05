<!-- This file sends the passport request -->
<?php
session_start();

require_once('connection.php');

if (isset($_POST['request'])) {
    $user=$_SESSION['id'];
    $occupation=$_POST['occupation'];
    $martial=$_POST['martial'];
    $children=$_POST['children'];
    $region=$_POST['region'];
    $file=$_FILES['file'];
    // print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if ($fileError===0) {
            if ($fileSize<1000000) {
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='../uploads/'.$fileNameNew;
                //    query preparation
            $qry="INSERT INTO `passport_request`(`applicant`, `occupation`, `martial`, `children`, `region`, `req_status`, `image`) VALUES ('$user', '$occupation', '$martial', '$children', '$region', 'Pending', '$fileNameNew')";
                // query execution 
            $request=mysqli_query($conn,$qry);
            if (!$qry) {
                die(mysqli_error($conn));
            }else {
                move_uploaded_file($fileTmpName,$fileDestination);
                header('location:../request_status.php?success');
              
            }
                
            }else {
                echo "You file is too big !";
            }
        }else {
            echo "There was an error uploading your file !"; 
        }
    }else{
        echo 'you cannot upload files of this type !';
    }
}
?>
