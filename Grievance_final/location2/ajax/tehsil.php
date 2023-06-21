<?php
session_start();
include '../connection.inc.php';

$city_id =  $_POST['city_data'];
$_SESSION['city_abc']=$city_id;

// $city = "SELECT DISTINCT city FROM country_state_city";
// $city_qry = mysqli_query($conn, $city);


$output = '<option value="">Select Tehsil</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="">'.$city_row['city'].'</option>';
}
echo $output;


// echo $state_id;
