<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
if(isset($_POST['submit']))
{
	// $txtUser_id = $_POST['txtUser_id'];
	// $txtName = $_POST['txtName'];
	$txtPhone = $_POST['txtPhone'];
	$txtGrievance = $_POST['txtGrievance'];
	$txtEmail = $_POST['txtEmail'];
	// $txtPin_code = $_POST['txtPin_code'];
	$txtState = $_POST['txtState'];
	$txtDistrict = $_POST['txtDistrict'];
	$txtTehsil = $_POST['txtTehsil'];
	$txtdep = $_POST['txtdep'];
}

$con = mysqli_connect('localhost', 'root', '','testing');

// database insert SQL code
$sql = "INSERT INTO `tbl_connect` VALUES ('$txtPhone', '$txtGrievance','$txtdep','$txtEmail', '$txtState', '$txtDistrict', '$txtTehsil')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Grievance Recieved";
}

?>