<?php
// session_start();
include 'connection.inc.php';
// include 'submit.php';
if (isset($_POST['country']) && isset($_POST['state']) && isset($_POST['city'])) {
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  
  echo "Selected Country: " . $country . "<br>";
  echo "Selected State: " . $state . "<br>";
  echo "Selected City: " . $city . "<br>";
}

$result = mysqli_query($conn,"SELECT Phone, Grievance, Email_ID FROM tbl_connect ");

echo "<table border='1'>
<tr>
<th>Phone</th>
<th>Grievance</th>
<th>Email ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  // if($row['User_ID']==0) continue;
  echo "<tr>";
  
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['Grievance'] . "</td>";
  echo "<td>" . $row['Email_ID'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>