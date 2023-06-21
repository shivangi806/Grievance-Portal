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
</head>
<body>
	<!-- <a href="form/form.html">Update</a> -->
	<div class="d-flex justify-content-center align-items-center vh-100">
		
		<div class="shadow w-450 p-3">
			<!-- <h3 class="display-4 ">𝐇𝐞𝐥𝐥𝐨, <?php echo $_SESSION['id']; ?></h3> -->
			<p class="display-4 ">𝐅𝐢𝐫𝐬𝐭 𝐍𝐚𝐦𝐞 : &nbsp &nbsp<?php echo $_SESSION['fname']; ?></p>
			<hr>
			<p class="display-4 ">𝐋𝐚𝐬𝐭 𝐍𝐚𝐦𝐞: &nbsp &nbsp &nbsp<?php echo $_SESSION['lname']; ?></p>
			<hr>
			<p class="display-4 ">𝐄𝐦𝐚𝐢𝐥 𝐈𝐃: &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<?php echo $_SESSION['email']; ?></p>
			<hr>
			<p class="display-4 ">𝐒𝐭𝐚𝐭𝐞: &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['state']; ?></p>
			<hr>
			<p class="display-4 ">𝐃𝐢𝐬𝐭𝐫𝐢𝐜𝐭: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<?php echo $_SESSION['district']; ?></p>
			<hr>
			<p class="display-4 ">𝐓𝐞𝐡𝐬𝐢𝐥: &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['tehsil']; ?></p>
			<hr>
			<p class="display-4 ">𝐀𝐠𝐞: &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp <?php echo $_SESSION['age']; ?></p>
            <a href="logout.php" class="btn btn-warning">
				Logout
            </a>
			<a href="form/form.html" class="btn btn-dark">
				Update
            </a>
			<br><br>
			<a href="https://localhost/new_grievance/new_grievance.html" class="btn btn-success">
				File New Grievance
            </a>
			<a href="http://localhost/my_grievances/db.php" class="btn btn-dark">
				My Grievances
            </a>
		</div>
		<!-- <div class="shadow w-450 p-3 text-center">
			<h3 class="display-4 ">First Name:<?php echo $_SESSION['fname']; ?></h3>
            <a href="logout.php" class="btn btn-warning">
				Logout
            </a>
		</div>
		<div class="shadow w-450 p-3 text-center">
			<h3 class="display-4 ">Last Name<?php echo $_SESSION['lname']; ?></h3>
            <a href="logout.php" class="btn btn-warning">
				Logout
            </a>
		</div>
		<div class="shadow w-450 p-3 text-center">
			<h3 class="display-4 ">He, <?php echo $_SESSION['fname']; ?></h3>
            <a href="logout.php" class="btn btn-warning">
				Logout
            </a>
		</div> -->
    </div>
</body>
</html>