<?php
session_start();

// Check if the session variable for username is set and the usertype is 'gymnasium'
if (!isset($_SESSION['username']) || $_SESSION['usertype'] != 'gymnasium') {
    // Redirect to the login page or another appropriate page
    header("location: ../ADMINLOGIN/adminloginindex.php");
    exit; // Ensure no further execution of the script
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="editstyle.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <nav id="sidebar">
		<div class="sidebar-header">
			<h3><img src="../ADMINRESERVATION/logo.png.png" class="img-fluid"/><span>Registrar</span></h3>
		</div>
		<ul class="list-unstyled components">
		<li  class="active">
				<a href="index.php" class="dashboard"><i class="material-icons">dashboard</i>
				<span>Home</span></a>
			</li>
	

			<li class="dropdown">
				<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
				class="dropdown-toggle">
				<i class="material-icons">aspect_ratio</i>Profiling</a>
				<ul class="collapse list-unstyled menu" id="homeSubmenu1">
					<li>
						<a href="../ADMINRESERVATION/ManageSched.php">Manage Schedule</a>
					</li>
					<li>
						<a href="../ADMINRESERVATION/managereminders.php">Manage Reminders</a>
					</li>
	  
				</ul>
			</li>
			
		   <li class="">
				<a href="adminreservation.php"><i class="material-icons">date_range</i><span>View Appointment</span></a>
			</li>
		
		   
		   
		</ul>

	   
	</nav>
	 
   <!-------sidebar--design- close----------->
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
		
					 <div class="col-15 col-md-10 col-lg-11 order-1 order-md-5">
						<div class="xp-profilebar text-right">
						   <nav class="navbar p-0">
							  <ul class="nav navbar-nav flex-row ml-auto">
							  
							   
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <img src="../ADMINAPPOINTMENT/8b167af653c2399dd93b952a48740620.jpg" style="width:40px; border-radius:50%;"/>
								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="editprofile.php">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="setting.php">
									 <span class="material-icons">settings</span>
									 Settings
									 </a></li>
									 <li><a href="../ADMINRESERVATION/ADMINLOGOUT/adminlogout.php">
									 <span class="material-icons">logout</span>
									 Logout
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Admin Dashboard</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Appointment</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">System</li>
					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		     
		   <div class="main-content">
			<div class="row">
			   <div class="col-md-12">
				  <div class="table-wrapper">
					
				  <div class="table-title">
					<div class="row">
						<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
						   <h2 class="ml-lg-2">Edit Profile</h2>
						</div>
						 
					</div>
				  </div>

				  

					  <table class="table table-striped table-hover">
						  <thead>
						  <tr>
							  
						  </tr>
						  </thead>
						 
						  <tbody >
							
							<form class="row g-3 needs-validation d-flex justify-content-between" action="../ADMINRESERVATION/php_files/editprofile.php" method="post" novalidate>
								<div class="col-md-4  ">
								  <label for="validationCustom01" class="form-label">Fullname</label>
								  <input type="text" class="form-control" id="name" name="name" value="" required>
								  <label for="validationCustomUsername" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend" required>
					
								</div>
								
								<div class="col-md-1">
									<label for="validationCustom05" class="form-label">Email</label>
									<input type="text" class="form-control" id="email" name="email" required>
									<label for="validationCustom01" class="form-label">Number</label>
									<input type="text" class="form-control" id="number" name="number" required>
								</div>

								<div class="col-md-6">
								  <label for="validationCustom03" class="form-label">Address</label>
								  <input type="text" class="form-control" id="address" name="address" required>
								  <div class="invalid-feedback">
									Please provide a valid city.
								  </div>
								</div>

								
								
								<div class="col-12">
								  <button class="btn btn-danger luh" type="submit">Update</button>
								</div>
							  </form>
						  </tbody>
					  </table>

				  
				  </div>
			   </div>


								  <!----add-modal start--------->
								  
		  
							   <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
								   <div class="modal-dialog" role="document">
									   <div class="modal-content">
										   <div class="modal-header">
											   <h5 class="modal-title">Delete Requirement</h5>
										   </div>
										   <div class="modal-body">
											   <p>Are you sure you want to delete this Records</p>
											   <p class="text-warning"><small>this action Cannot be Undone,</small></p>
										   </div>
										   <div class="modal-footer">
											   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
											   <button type="button" id="deleteBtn" class="btn btn-danger">Delete</button>
										   </div>
									   </div>
								   </div>
							   </div>
   
				  <!----edit-modal end--------->   
				  
			   
			   
			
			</div>
		 </div>
	 
	   <!------main-content-end-----------> 
	 
	
	
	<!----footer-design------------->
	
	<footer class="footer">
	   <div class="container-fluid">
		  <div class="footer-in">
			 <p class="mb-0">Justine Pier M. Anonuevo, Angelo Benedict M. Acuzar</p>
		  </div>
	   </div>
	</footer>
	
	
	
	
 </div>


</div>



<!-------complete html----------->

<script src="adminjava.js"></script>
<script src="addAnnouncement.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3adbdef86b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/
			ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script> 



  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  



  </body>
  
  </html>


