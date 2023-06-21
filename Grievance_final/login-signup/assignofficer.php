<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-500">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/assignofficer_signup.php" 
    	      method="post">
    		<h4 class="display-4  fs-1">Assign Officer</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <!-- <div class="mb-11">
		    <label class="form-label">Aadhar_ID*</label>
		    <input type="text" 
		           class="form-control"
		           name="Aadhar_ID"
		           value="<?php echo (isset($_GET['Aadhar_ID']))?$_GET['Aadhar_ID']:"" ?>">
		  </div> -->
                <!-- <br> -->
		  <!-- <div class="mb-11">
		    <label class="form-label">Username*</label>
		    <input type="text" 
		           class="form-control"
		           name="Username"
		           value="<?php echo (isset($_GET['Username']))?$_GET['Username']:"" ?>">
		  </div> -->
          <!-- <br> -->
          <div class="mb-11">
		    <label class="form-label">First_name*</label>
		    <input type="text" 
		           class="form-control"
		           name="First_name"
		           value="<?php echo (isset($_GET['First_name']))?$_GET['First_name']:"" ?>"
				   placeholder="Enter first name">
		  </div>
                <br>
		  <div class="mb-11">
		    <label class="form-label">Last_name*</label>
		    <input type="text" 
		           class="form-control"
		           name="Last_name"
		           value="<?php echo (isset($_GET['Last_name']))?$_GET['Last_name']:"" ?>"
				   placeholder="Enter last name">
		  </div>
          <br>
          <div class="mb-11">
		    <label class="form-label">Email_ID*</label>
		    <input type="text" 
		           class="form-control"
		           name="Email_ID"
		           value="<?php echo (isset($_GET['Email_ID']))?$_GET['Email_ID']:"" ?>"
				   placeholder="Create email ID of officer">
		  </div>
                <br>
           
				<div class="mb-11">
  <label class="form-label">Department*</label>
  <select class="form-select" name="State">
    <option value="">Select department</option>
    <option value="Water" <?php if(isset($_GET['State']) && $_GET['State']=="Water") echo "selected"; ?>>Water</option>
    <option value="Electricity" <?php if(isset($_GET['State']) && $_GET['State']=="Electricity") echo "selected"; ?>>Electricity</option>
	<option value="Infrastructure" <?php if(isset($_GET['State']) && $_GET['State']=="Infrastructure") echo "selected"; ?>>Infrastructure</option>
	<option value="Education" <?php if(isset($_GET['State']) && $_GET['State']=="Education") echo "selected"; ?>>Education</option>
	<option value="Health" <?php if(isset($_GET['State']) && $_GET['State']=="Health") echo "selected"; ?>>Health and Sanitation</option>
	<option value="Others" <?php if(isset($_GET['State']) && $_GET['State']=="Others") echo "selected"; ?>>Others</option>
  </select>
</div>

		  <!-- <div class="mb-11">
		    <label class="form-label">Department*</label>
		    <input type="text" 
		           class="form-control"
		           name="State"
		           value="<?php echo (isset($_GET['State']))?$_GET['State']:"" ?>"
				   placeholder="Enter department of officer">
		  </div> -->
          <br>
		  <div class="mb-11">
  <label class="form-label">Level*</label>
  <select class="form-select" name="Level">
    <option value="">Select Level</option>
    <option value="1" <?php if(isset($_GET['Level']) && $_GET['Level']=="1") echo "selected"; ?>>1</option>
    <option value="2" <?php if(isset($_GET['Level']) && $_GET['Level']=="2") echo "selected"; ?>>2</option>
	<option value="3" <?php if(isset($_GET['Level']) && $_GET['Level']=="3") echo "selected"; ?>>3</option>
  </select>
</div>
<br>
          <!-- <div class="mb-11">
		    <label class="form-label">District*</label>
		    <input type="text" 
		           class="form-control"
		           name="District"
		           value="<?php echo (isset($_GET['District']))?$_GET['District']:"" ?>">
		  </div>
                <br>
		  <div class="mb-11">
		    <label class="form-label">Tehsil*</label>
		    <input type="text" 
		           class="form-control"
		           name="Tehsil"
		           value="<?php echo (isset($_GET['Tehsil']))?$_GET['Tehsil']:"" ?>">
		  </div>
          <br>
          <div class="mb-11">
		    <label class="form-label">Age*</label>
		    <input type="text" 
		           class="form-control"
		           name="Age"
		           value="<?php echo (isset($_GET['Age']))?$_GET['Age']:"" ?>">
		  </div>
                <br> -->
		  <div class="mb-11">
		    <label class="form-label">Password*</label>
		    <input type="password" 
		           class="form-control"
		           name="Password"
				   placeholder="Create a strong password upto 10 characters">
		  </div>
		  <br>
		  <button type="submit" class="btn btn-primary">Sign Up</button>
		  <a href="Superadmin.html" class="link-secondary">Logout</a>

		</form>
    </div>
</body>
</html