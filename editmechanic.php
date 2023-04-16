<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	

	$name=$_POST['name'];
	$service_type=$_POST['service_type'];
	$service_name=$_POST['service_name'];
	
	$company_name=$_POST['company_name'];
	$phone=$_POST['phone'];
    $phone_2=$_POST['phone_2'];
    $email=$_POST['email'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$district=$_POST['district'];
// checking empty fields

	// update user data
	 $result = mysqli_query($mysqli, "UPDATE mechanic SET name='$name',service_type='$service_type',service_name='$service_name' ,company_name='$company_name' ,phone='$phone',phone_2='$phone_2',country='$country',city='$city' ,district='$district' WHERE mechanic_id=$mechanic_id");

	
	// Redirect to homepage to display updated user in list
	header("Location: mechanic.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mechanic WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$service_type = $user_data['service_type'];
	$service_name = $user_data['service_name'];
	
	$company_name = $user_data['company_name'];
    $phone = $user_data['phone'];
	$phone_2 = $user_data['phone_2'];
    $email = $user_data['email'];
	$country = $user_data['country'];
	$city = $user_data['city'];
	$district = $user_data['district'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
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
            <a href="mechanic.php"><span class="fa fa-wrench"></span> Mechanic</a>
        </li>
         
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



	<!-- <div class="container"> -->
		<a href="mechanic.php" class='btn btn-primary btn-sm' role='button' >Back</a>
	<div class="card-body">
	
	



<form name="update_user" method="post" action="editmechanic.php">

<div class="form-row">




<div class="form-group col-md-6">
	<label for="name">name</label>
  	<input type="text" class="form-control" name="name" id="name" value=" <?php echo $name; ?>">
</div>
<div class="form-group col-md-6">
	
	<label for="ditrict">Service-Type:</label>
  <select class="form-control" id="service_type" value=" <?php echo  $service_type; ?>">
    <option>Brakes and Exhausts</option>
    <option>MOT Servicing</option>
    <option>Tyre Sales and Fitting</option>
    <option>Vehicle Servicing</option>
    
  </select>
</div>



<div class="form-group col-md-6">
	<label for="name">Service-name</label>
  	<input type="text" class="form-control" name="service_name" id="service_name" value=" <?php echo $service_name; ?>">
</div>
<div class="form-group col-md-6">
	<label for="company_name">Company-Name</label>
	<input type="text" class="form-control" name="company_name" id="company_name" value=" <?php echo $company_name; ?>">
</div>


<div class="form-group col-md-6">
	<label for="phone">Phone</label>
	<input type="number" class="form-control" name="phone" id="phone" value=" <?php echo $phone; ?>">
</div>

<div class="form-group col-md-6">
	<label for="phone">Phone-2</label>
	<input type="text" class="form-control" name="phone_2" id="phone_2" value=" <?php echo  $phone_2; ?>">
</div>


<div class="form-group col-md-6">
	<label for="email">Email</label>
  	<input type="email" class="form-control" name="email" id="email" value=" <?php echo $email; ?>">
</div>


<div class="form-group col-md-6">
<label for="country">Country:</label>
	<select class="form-control" id="country" value=" <?php echo  $country; ?>">
    <option>Tanzania</option>
    <option>Burundi</option>
    <option>Uganda</option>
    <option>Kenya</option>
  </select>
</div>

<div class="form-group col-md-6">
	
	<label for="city">City:</label>
  <select class="form-control" id="city" value=" <?php echo  $city; ?>">
    <option>Dar-es-salaam</option>
    <option>Mwanza</option>
    <option>Dodoma</option>
    <option>Singida</option>
  </select>
</div>

<div class="form-group col-md-6">
	
	<label for="ditrict">District:</label>
  <select class="form-control" id="district" value=" <?php echo  $district; ?>">
    <option>Temeke</option>
    <option>Ilala</option>
    <option>Kinondoni</option>
    <option>Kigamboni</option>
  </select>
</div>

</div>
</div>
<div class="text-right">
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td> 
				<td><input type="submit" name="update" value="Update" class='btn btn-success btn-sm' role='button' ></td>
</div>
	</form>

<!-- </div> -->
</body>
</html>
