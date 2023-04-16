<?php
ob_start();
@session_start();

?>
<html>
<head>
	<title>Add Users</title>
	<!-- Bootstrap CSS
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
</head>


<body>
	<div class="container">
	<!-- <a href="index.php" class='btn btn-primary btn-sm' role='button' >Go to Home</a> -->
	
	<div class="card-header">
	<?php
       
	   // Check If form submitted, insert form data into users table.
	   if(isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			
			$phone = $_POST['phone'];
			$phone_2 = $_POST['phone_2'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$district = $_POST['district'];
		  //  include database connection file
		     include_once("config.php");
   
		   // // Insert user data into table
		   $res= mysqli_query($mysqli, "SELECT*FROM users WHERE email='$email'");
		   $checkEmailExist=mysqli_num_rows($res);
		   if($checkEmailExist>0){
			//return  print_r( $checkEmailExist);
			//exit;
			$_SESSION['error']="Email for this user exists ";
			return  header('Location:index.php');
		
		   }


		   $result = mysqli_query($mysqli, "INSERT INTO users(name,email,address,phone,phone_2,country,city,district) VALUES('$name','$email','$address','$phone','$phone_2','$country','$city','$district')");
		   if($result){
			// echo "User added successfully . ";
			 $_SESSION['success']="User added successfully ";
			header('Location:index.php');
			
		   }else{
			$_SESSION['error']="User not added ";
			header('Location:index.php');
		   }
		  
	   }
	   ?>
		
  </div>
	<div class="card-body">
	
	<form action="add.php" method="post" name="form1">
	
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row">

<div class="form-group col-md-6">
<label for="firstname">name</label>
  <input type="text" class="form-control" name="name" id="firstname" placeholder="name" value="" required>
</div>


  
<div class="form-group col-md-6">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="" required>
  </div>


<div class="form-group col-md-6">
  <label for="workshop">Address</label>
  <input type="text" class="form-control" name="address" id="address" placeholder="address" value="" required>
</div>


<div class="form-group col-md-6">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" name="phone" id="phone" placeholder="phone" value="" required>
  </div>
<div class="form-group col-md-6">
    <label for="phone">Phone-2</label>
    <input type="number" class="form-control" name="phone_2" id="phone_2" placeholder="phone-2" value="" required>
  </div>

<div class="form-group col-md-6">
<label for="country">Country</label>
<select class="form-control" id="country" name="country" value="" required>
<option>Tanzania</option>
<option>Uganda</option>
<option>kenya</option>
<option>Rwanda</option>
</select>
</div>


<div class="form-group col-md-6">
<label for="city">City</label>
<select class="form-control" id="city" name="city" value="" required>
<option>Dar-es-salaam</option>
<option>Mwanza</option>
<option>Dodoma</option>
<option>Singida</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="district">District</label>
<select class="form-control" id="district" name="district" value="" required>
<option>Temeke</option>
<option>Ilala</option>
<option>Kinondoni</option>
<option>Kigamboni</option>
</select>
</div> 
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class='btn btn-danger btn-sm' data-dismiss="modal">Close</button>
        <button type="submit" name="Submit" value="Add" class='btn btn-success btn-sm' role='button' > Add</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
	

</div>

			
		</div>
		</table>
	</form> 
</div>
</div>

</body>


<?php
session_unset();
?>
</html>

