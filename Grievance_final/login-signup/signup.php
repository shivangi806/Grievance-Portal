<?php 

if( 
   isset($_POST['Username']) && 
   isset($_POST['First_name'])&&
   isset($_POST['Last_name']) && 
   isset($_POST['Email_ID']) && 
   isset($_POST['State'])&&
   isset($_POST['District']) && 
   isset($_POST['Tehsil']) && 
   isset($_POST['Age'])&& 
   isset($_POST['Password']) 
   )
   {
    include "../db_conn.php";

    $Username = $_POST['Username'];
    $First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
    $Email_ID = $_POST['Email_ID'];
    $State = $_POST['State'];
	$District = $_POST['District'];
    $Tehsil = $_POST['Tehsil'];
    $Age = $_POST['Age'];
	// $My_Grievances = $_POST['My_Grievances'];
    $Password = $_POST['Password'];

    $data = "&Username=".$Username. "&First_name=".$First_name. "&Last_name=".$Last_name." &Email_ID=".$Email_ID. "&State=".$State."&District=".$District." &Tehsil=".$Tehsil. "&Age=".$Age;
    
    // if (empty($Aadhar_ID)) {
    // 	$em = "Aadhar_ID  is required";
    // 	header("Location: ../index.php?error=$em&$data");
	//     exit;
    // }else 
	if(empty($Username)){
    	$em = "Username is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($Password)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
	else if(empty($First_name)){
    	$em = "First_name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($Last_name)){
    	$em = "Last_name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
	else if(empty($Email_ID)){
    	$em = "Email_ID is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($State)){
    	$em = "State is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
	else if(empty($District)){
    	$em = "District is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
	else if(empty($Tehsil)){
    	$em = "Tehsil is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($Age)){
    	$em = "Age is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }
	else {

    	// hashing the password
    	$pass = password_hash($Password, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO user(Username,First_name ,Last_name, Email_ID,State,District,Tehsil,Age ,Password) 
    	        VALUES(?,?,?,?,?,?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$Username, $First_name,$Last_name,$Email_ID,$State,$District,$Tehsil,$Age,$pass]);

    	header("Location: ../index.php?success=Your account has been created successfully");
	    exit;
    }
}else {
	header("Location: ../index.php?error=error");
	exit;
}