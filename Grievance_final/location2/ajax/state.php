<?php
session_start();
include '../connection.inc.php';
$country_abc =$_POST['country_id'];
$country_id=trim($country_abc);
// echo $country_id;
$_SESSION['country_abc']=$country_id;


$state = "SELECT DISTINCT state FROM country_state_city WHERE country = '$country_id'";

echo $state;

$state_qry = mysqli_query($conn, $state);
// $output="";
$output = '<option value="">Select District</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="">' . $state_row['state'] . '</option>';
}
echo $output;
