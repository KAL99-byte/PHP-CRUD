<?php 
include_once("config.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
</head>



<body>

<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="#" class="logo">T.</a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
              <a href="index.php"><span class="fa fa-user"></span> User</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-wrench"></span> Mechanic</a>
         
        </ul>

        <div class="footer">
        	<p>
					  Copyright @2023 All rights reserved Kalasa 
					</p>
        </div>

              </nav>
              <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="index.php">User</a>
                </li> -->
                
              </ul>
            </div>
</nav>
      
<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>





        <a href="index.php" class='btn btn-primary btn-sm' role='button' >Back</a>
        <div class="card-body">            

    <?php

    if(isset($_GET['id'])){
        $id = $_GET["id"];
        include_once ("config.php");
        $result=mysqli_query($mysqli,"SELECT *FROM users WHERE id=$id");
        $row = mysqli_fetch_array($result);

    ?>
    <div class="container">
        <div class="card-body">
  <div class="row">
 
    <div class="col"><h5>Name:</h5></div>
    <div class="col"><p><?php echo $row["name"]; ?></p></div>
    <div class="col"><h5>E-mail:</h5></div>
    <div class="col"> <p><?php echo $row["email"]; ?></p></div>
    <div class="w-100"></div>
    <div class="col"><h5>Address:</h5></div>
    <div class="col"> <p><?php echo $row["address"]; ?></p></div>
    <div class="col"> <h5>Phone:</h5></div>
    <div class="col">  <p><?php echo $row["phone"]; ?></p></div>
    <div class="w-100"></div>
   
    <div class="col"><h5>Phone_2:</h5></div>
    <div class="col">  <p><?php echo $row["phone_2"]; ?></p></div>
    <div class="col"> <h5>Country:</h5></div>
    <div class="col">   <p><?php echo $row["country"]; ?></p></div>
    <div class="w-100"></div>
    <div class="col"> <h5>City:</h5></div>
    <div class="col">  <p><?php echo $row["city"]; ?></p></div>
    <div class="col"> <h5>District:</h5></div>
    <div class="col">   <p><?php echo $row["district"]; ?></p></div>
   
    
  </div>

    </div>


        
        
    <?php
        }
    ?>

        </div>
    </div> 
</body>
</html>
