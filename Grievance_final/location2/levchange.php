<?php
session_start();
include 'connection.inc.php';
function decrementLetter($Alphabet) {
    return chr(ord($Alphabet) - 1);
}

if(isset($_POST['submit'])){
    $mailid=$_SESSION['mailid'];
    $leveltochange=$_SESSION['leveltochange'];
    $newlev=chr(ord($leveltochange) - 1);
    if($leveltochange=="1"){
        echo '<script>alert("No superiors!")</script>';
        echo '<script>window.location.href="submit.php";</script>';
    }
    else{
    $query = "UPDATE tbl_connect SET Level='$newlev' WHERE tbl_connect.Email_ID='$mailid'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Error executing query: ' . mysqli_error($conn));
    }
    else{
        // echo '<script type="text/javascript">alert("'.$mailid.'");</script>';
        echo '<script>alert("Record updated successfully !")</script>';
        echo '<script>window.location.href="submit.php";</script>';
    }    
}
}
