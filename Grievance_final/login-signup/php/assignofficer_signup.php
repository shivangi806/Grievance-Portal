<?php 

if(
   isset($_POST['First_name'])&&
   isset($_POST['Last_name']) && 
   isset($_POST['Email_ID']) && 
   isset($_POST['State'])&&
   isset($_POST['Level'])&&
   isset($_POST['Password']) 
   )
   {
    include "../db_conn.php";
    $First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
    $Email_ID = $_POST['Email_ID'];
    $State = $_POST['State'];
	$Level = $_POST['Level'];
	// $My_Grievances = $_POST['My_Grievances'];
    $Password = $_POST['Password'];

    $data = "&First_name=".$First_name. "&Last_name=".$Last_name." &Email_ID=".$Email_ID. "&State=".$State;
    
    if(empty($Password)){
    	$em = "Password is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }
	else if(empty($First_name)){
    	$em = "First_name is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }else if(empty($Last_name)){
    	$em = "Last_name is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }
	else if(empty($Email_ID)){
    	$em = "Email_ID is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }else if(empty($State)){
    	$em = "Department is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }
	else if(empty($Level)){
    	$em = "Level is required";
    	header("Location: ../assignofficer.php?error=$em&$data");
	    exit;
    }
	else {
		// echo="shivi";
    	// hashing the password
    	// $pass = password_hash($Password, PASSWORD_DEFAULT);
		$check_stmt = $conn->prepare("SELECT * FROM user WHERE Email_ID = ?");
        $check_stmt->bind_param("s", $Email_ID);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        if ($check_result->num_rows > 0) {
            $em = "Email Id already assigned";
            echo "<script>alert('$em');</script>";
            echo "<script>window.location.href='../assignofficer.php?$data';</script>";
            exit;
        }


    	$sql = "INSERT INTO officers(First_name ,Last_name, Email_ID,State,Level,Password) 
    	        VALUES(?,?,?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$First_name,$Last_name,$Email_ID,$State,$Level,$Password]);

    	header("Location: ../assignofficer.php?success=Your account has been created successfully");
	    exit;
    }
}else {
	// echo="shivi";
	header("Location: ../assignofficer.php?error=error");
	exit;
}