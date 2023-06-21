<?php 
session_start();
include "db_conn.php";
if (!isset($_SESSION['id'])) {
	echo "a";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="HOME.css">
	
	
</head>
<body>
    
<aside class="sidebar">
        <div class="sidebar-inner">
            <header class="sidebar-header">
                <button
                        type="button"
                        class="sidebar-burger"
                        onclick="toggleSidebar()"
                        ></button>
                        <!-- <img src="image/user.png" alt="" width="24px" height="24px" stroke-width="9.5"    viewBox="5 5 15 15" color="#ffffff" class="icon" class="user"  > -->
                <span>My Profile</span>
            </header>
            <nav class="sidebar-nav">
                <!-- <button type="button" onclick="window.location.href='add_instructor.html';">
                    <img src="image/feedback.png" alt="" width="24px" height="24px" stroke-width="9.5" viewBox="5 5 15 15" color="#ffffff" class="icon" >
    -->
    <!-- <span>View Feedback</span> -->
	<!-- <h1>View FEEDBACKhhhhhhhhhhhhhhhh</h1>
		</button> --> 
		        <div class="profileimage">
					<center>
					<img src="Profileimage.png" alt="" width="250px">
					</center>
				</div>

				<div class="person-name">
				<center>
				<h1><?php echo $_SESSION['fname']; ?>
				<?php echo $_SESSION['lname']; ?></h1>
				</center>
				</div>
				<br>
				<div class="display-5">
			
		    <p class="display-4 ">𝐄𝐦𝐚𝐢𝐥 𝐈𝐃: &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<?php echo $_SESSION['email']; ?></p>
			<p class="display-4 ">𝐒𝐭𝐚𝐭𝐞: &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['state']; ?></p>
			<p class="display-4 ">𝐃𝐢𝐬𝐭𝐫𝐢𝐜𝐭: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp<?php echo $_SESSION['district']; ?></p>
			<p class="display-4 ">𝐓𝐞𝐡𝐬𝐢𝐥: &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['tehsil']; ?></p>
			<p class="display-4 ">𝐀𝐠𝐞: &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp <?php echo $_SESSION['age']; ?></p>
	        
			
		</div>

            </nav>
            <footer class="sidebar-footer">
			<svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffffff"><path d="M16 12h1.4a.6.6 0 01.6.6v6.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6v-6.8a.6.6 0 01.6-.6H8m8 0V8c0-1.333-.8-4-4-4S8 6.667 8 8v4m8 0H8" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
			<a href="logout.php" class="btn">
				Logout
            </a>
            </footer>
        </div>
    </aside>

	<main>
	   <div class="container">
		<div class="horiz-card">
			<center>
			<a href="http://localhost/my_grievances/db.php" class="btn-2">
				My Grievances
            </a>
			</center>
		</div>
		</div>

		<br>
		<div class="container">
		<div class="horiz-card">
			<center>
			<a href="https://localhost/new_grievance/new_grievance.html" class="btn-2">
				File New Grievance
            </a>
			</center>
		</div>
		</div>

		<br>
		<div class="container">
		<div class="horiz-card">
			<center>
			<a href="form/form.html" class="btn-2">
				Update Profile
            </a>
			</center>
		</div>
		</div>



	</main>

</body>
<script>
    const toggleSidebar = () => document.body.classList.toggle("open");
function sus(){
    window.location.href('C:\Users\SNEHA\Desktop\add_course.html');


}
</script>
</html>