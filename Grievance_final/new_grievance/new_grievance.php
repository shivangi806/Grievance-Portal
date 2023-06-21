<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
if(isset($_POST['submit']))
{
	$txtPhone = $_POST['txtPhone'];
	$txtGrievance = $_POST['txtGrievance'];
	$txtEmail = $_POST['txtEmail'];
	$txtState = $_POST['txtState'];
	$txtDistrict = $_POST['txtDistrict'];
	$txtTehsil = $_POST['txtTehsil'];
	$txtdep = $_POST['txtdep'];
}

$con = mysqli_connect('localhost', 'root', '','testing');

// database insert SQL code
$sql = "INSERT INTO `tbl_connect` (Phone,Grievance,Department,Email_ID,State,District,Tehsil) VALUES ('$txtPhone', '$txtGrievance','$txtdep','$txtEmail', '$txtState', '$txtDistrict', '$txtTehsil')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Record submitted successfully !")</script>';
	echo '<script>window.location.href="../login-signup/home.php";</script>';

}

?>