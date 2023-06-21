<head>
<link rel="stylesheet" type="text/css" href="view_grievance.css">
</head>
<?php
session_start();
include 'connection.inc.php';
// Start session


// Retrieve data from session variable
// $_SESSION['city_abc']=$_POST['city'];
$ss= trim($_SESSION['state_abc']);
$cc= trim($_SESSION['city_abc']);
$dep=trim($_SESSION['department1']);
$lev=trim($_SESSION['level1']);
// $dep=$_SESSION['dep'];

echo " <h1> Grievances for: </h1> "."<br>";

// echo "Selected State: ";
// echo $_SESSION['country_abc'];
// echo "<br>";
// echo "Selected District: ";
// echo $ss;
// echo "<br>";
// echo "Selected Tehsil: ";
// echo $cc;
// echo "<br>";
// echo "Officer's Department: ";
// echo $dep;
// echo "<br>";
// echo "Officer's Level: ";
// echo $lev;
// echo "<br>";
// echo "Selected Department: ";
// echo $dep;
// echo "<br>";
echo "<div class='all'>";


echo "<div class='card-admin'>";
echo "Selected State: ";
echo "<br>";
echo $_SESSION['country_abc'];
echo "</div>";


echo "<div class='card-admin'>";
echo "Selected District: ";
echo "<br>";
echo $ss;
echo "</div>";


echo "<div class='card-admin'>";
echo "Selected Tehsil: ";
echo "<br>";
echo $cc;
echo "</div>";


echo "<div class='card-admin'>";
echo "Officer's Department: ";
echo "<br>";
echo $dep;
echo "</div>";

echo "<div class='card-admin'>";
echo "Officer's Level: ";
echo "<br>";
echo $lev;
echo "</div>";


echo "<div class='card-admin'>";
echo "Selected Department: ";
echo "<br>";
echo $dep;
echo "</div>";

echo "</div>";

echo "<div class='grievance-info'>";
$query = "SELECT Phone, Grievance, Email_ID, Level FROM tbl_connect WHERE District='$ss' AND Tehsil='$cc' AND Department='$dep' AND Status='OPEN' AND Level='$lev'" ;

// Next, execute the query and fetch the results
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error executing query: ' . mysqli_error($conn));
}
echo "
<table border='3' class='table'>
<caption class='caption'>List of grievances</caption>
<tr>
<th>Phone</th>
<th>Grievance</th>
<th>Email ID</th>
<th>Level</th>
<th>Action</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
  // if($row['User_ID']==0) continue;
  $_SESSION['mailid']=$row['Email_ID'];
  $_SESSION['leveltochange']=$row['Level'];
  // echo '<script type="text/javascript">alert("'.$row['Email_ID'].'");</script>';
  echo "<tr>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['Grievance'] . "</td>";
  echo "<td>" . $row['Email_ID'] . "</td>";
  echo "<td>" . $row['Level'] . "</td>";
  echo "<td>" . '<form method="POST" action="change.php">
  <input class="btn" type="submit" name="submit" id="submit1" value="Issue resolved">
</form><br><form method="POST" action="levchange.php">
<input class="btn" type="submit" name="submit" id="submit2" value="Report to Superiors">
</form>';
  echo "</tr>";
}
echo "</table></div>";

mysqli_close($conn);

?>
