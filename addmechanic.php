 
	<div class="card-header">
	<?php
       
	   // Check If form submitted, insert form data into users table.
	   if(isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$service_type = $_POST['service_type'];
			$service_name = $_POST['service_name'];
			
			$company_name = $_POST['company_name'];
			$phone = $_POST['phone'];
			$phone_2 = $_POST['phone_2'];
			$email = $_POST['email'];
			$country = $_POST['country'];
            $city = $_POST['city'];
            $district = $_POST['district'];
		  //  include database connection file
		   include_once("config.php");
   
		   // // Insert user data into table
		   $result = mysqli_query($mysqli, "INSERT INTO mechanic(name,service_type,service_name,company_name,phone,phone_2,email,country,city,district) VALUES('$name','$service_type','$service_name','$company_name','$phone','$phone_2','$email','$country','$city','$district')");
		   if($result){
			// echo "User added successfully . ";
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>User added successful</strong> .
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
      header('Location:mechanic.php');
		   }else{
			   echo "User not saved  . ";
		   }
		  
	   }
	   ?>
		
  </div>
	<div class="card-body">
	
	<form action="addmechanic.php" method="post" name="form1">
	
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mechanic form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row">

<div class="form-group col-md-6">
<label for="name">Name</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="name" value="" required>
</div>


  
<div class="form-group col-md-6">
<label for="service_type">Service-Type:</label>
  <select class="form-control" id="service_type" name="service_type" value=" ">
    <option>Brakes and Exhausts</option>
    <option>MOT Servicing</option>
    <option>Tyre Sales and Fitting</option>
    <option>Vehicle Servicing</option>
    
  </select>
  </div>


<div class="form-group col-md-6">
  <label for="service_name">Service_Name</label>
  <input type="text" class="form-control" name="service_name" id="service_name" placeholder="service_name" value="" required>
</div>
<div class="form-group col-md-6">
    <label for="company_name">Company_Name</label>
    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="company-name" value="" required>
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
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="" required>
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
	 
	</form> 
</div>
 

