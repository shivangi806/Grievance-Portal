<?php
    session_start();
    include "../db_conn.php";
    if (!isset($_SESSION['id'])) {
        header("Location: ../login.php");
    }
    $word = $_SESSION['id'];
    $fname= $_GET['fname'];
    $lname= $_GET['lname'];
    $email = $_GET['email'];
    $state = $_GET['state'];
    $district = $_GET['district'];
    $tehsil = $_GET['tehsil'];
    $age = $_GET['age'];
    $sql = "
        UPDATE user set
        First_name = '$fname',
        Last_name = '$lname',
        Email_ID = '$email',
        State = '$state',
        District = '$district',
        Tehsil = '$tehsil',
        Age = '$age'
        WHERE USERNAME = '$word';
    ";
    if($conn->query($sql) == true){
        $_SESSION['fname'] = $fname;
        echo '<script>alert(" Succesfully updated");setTimeout(()=>{window.location.replace("../home.php");},500);</script>';
    }
    else{
        echo '<script>alert(" Some error occured");setTimeout(()=>{window.location.replace("../home.php");},500);</script>';
    }
    $conn->close();
?>