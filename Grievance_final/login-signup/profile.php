<?php 
session_start();
include "db_conn.php";
if (!isset($_SESSION['id'])) {
	echo "a";
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        .profile-image {
            display: block;
            margin: 100px auto;
            transition: transform 0.3s;
            position: relative;
        }
        .profile-image:hover {
            transform: scale(1.1); /* Adjust the scale factor as desired */
        }
        h1{
            color:white;
            font-size: 36px; 
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body>
	<div class=" justify-content-center align-items-center vh-100">
		
        <div>
        <a href="home.php">
        <img src="Profileimage.png" alt="" width="350px" class="profile-image">
        </a>    
        </div>
			<h1 class="display-5 ">Hello  &nbsp<?php echo $_SESSION['fname']; ?> !</h1>
    </div>
</body>
</html>