<?php 
session_start();
include "../db_conn.php";
if(isset($_POST['Username']) && 
   isset($_POST['Password'])){
    function validate($data){

      $data = trim($data);

      $data = stripslashes($data);

      $data = htmlspecialchars($data);

      return $data;

   }
    $Username = validate($_POST['Username']);
    $Password = validate($_POST['Password']);

    // $data = "Username=".$Username;
    
    if(empty($Username)){
    	$em = "User name is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($Password)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }
    else{
      
        $sql = "SELECT * FROM user WHERE Username = '$Username' AND Password= '$Password'";
         $stmt = mysqli_query($conn, $sql);
         //  $userr = mysqli_fetch_assoc($stmt);
          if(mysqli_num_rows($stmt)==1){

           $userr = mysqli_fetch_assoc($stmt);
            //  if(password_verify($Password, $userr['Password'])){
           
           
                 $_SESSION['fname'] = $userr['First_name'];
                 $_SESSION['lname'] = $userr['Last_name'];
                 $_SESSION['email'] = $userr['Email_ID'];
                 $_SESSION['state'] = $userr['State'];
                 $_SESSION['district'] = $userr['District'];
                 $_SESSION['tehsil'] = $userr['Tehsil'];
                 $_SESSION['age'] = $userr['Age'];
                 $_SESSION['id'] = $userr['Username'];

               //  echo '<script>alert("Successfully logged in shivi");setTimeout(()=>{window.location.replace("../home.php");},500);</script>';
              //  header("Location: ../home.php");
              header("Location: ../profile.php");
                exit;
            }
             else {
               $em = "Incorect User name or password";
              echo '<script>alert("not logged in");setTimeout(()=>{window.location.replace("../login.php");},500);</script>';
               exit;
            }
      }
}else {
	exit;
}