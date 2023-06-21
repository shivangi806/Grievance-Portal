<?php
session_start();
include 'connection.inc.php';

if(isset($_POST['submit'])){
    $mailid=$_SESSION['mailid'];
    $query = "UPDATE tbl_connect SET Status='CLOSED' WHERE tbl_connect.Email_ID='$mailid'";
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
