<?php
session_start();
include '../connection.inc.php';

$state_id =  $_POST['state_data'];
$_SESSION['state_abc']=$state_id;

echo $state_id;

$city = "SELECT DISTINCT city FROM country_state_city WHERE state = '$state_id'";
$city_qry = mysqli_query($conn, $city);


$output = '<option value="">Select State</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="">'.$city_row['city'].'</option>';
}
echo $output;
