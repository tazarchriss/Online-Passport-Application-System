<?php
session_start();

require_once('connection.php');
$id=$_GET['id'];
echo $id;


$sql="UPDATE `passport_request` SET `req_status`='Accepted' WHERE `req_id`='$id'";
$qry=mysqli_query($conn,$sql);

if (!$qry) {
    die(mysqli_error($conn));
}
else
{

    $sql1="SELECT * FROM passport,passport_request 
    WHERE passport_request.req_id='$id'
    AND passport.application=passport_request.req_id
    ";
    $qry1=mysqli_query($conn,$sql1);
    
    $res=mysqli_fetch_array($qry1);

    if (mysqli_num_rows($qry1)==0) 
    {
        $created_by=$_SESSION['id'];
        $application=$id;
        $expiry_year= date('Y')+2;
        $passportID='TZ-'.$application.'-'.$created_by.'-'.date('Y');


        $sql="INSERT INTO `passport`(`application`,`passportID`,`created_by`, `issue_date`, `expiry_year`) 
        VALUES ('$application', '$passportID','$created_by', '$issue_date', '$expiry_year')";
        $qry=mysqli_query($conn,$sql);

        if (!$qry) {
            die(mysqli_error($conn));
        }
        else
        {
            header('Location:../CreatedPassports.php?created');
        }
        echo 'no passport';
    }

    else{
        header('Location:../AcceptedApplications.php?updated');
    }

}

?>
