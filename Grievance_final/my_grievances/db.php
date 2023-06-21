<head>
<link rel="stylesheet" type="text/css" href="db.css">
</head>

<?php
session_start();

if (!isset($_SESSION['id'])) {
	echo "a";
}

	// $txtUser_id = $_POST['txtUser_id'];
	// $txtName = $_POST['txtName'];
	$mail = $_SESSION['email'];


$con=mysqli_connect("localhost" , "root","","testing");

if(!$con){
    die("Connection Error");
}

$sql = "SELECT Grievance, Status FROM `tbl_connect` WHERE Email_ID='$mail'";

$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)==0){
	echo "<p style='color: white; text-align: center; font-size: 24px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>No grievance registered!</p>";
}
else{
echo "<table border='2' class='center'>
<caption class='caption'>List of grievances</caption>
<tr class='result'>
<th>Grievances</th>
<th>Status</th>
</tr>";



while($row = mysqli_fetch_array($result)){
echo "<tr class='result'>";
echo "<td>" . $row['Grievance'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "</tr>";
}


echo "</table>";
}

mysqli_close($con);

?>