<?php
ob_start();
session_start();


// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>
<?php
require("header.php");
?>

<div class = "card">
 
 
<?php if(isset($_SESSION['success']) && !empty($_SESSION['success'])) : ?>
 
     <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><?= $_SESSION['success'] ?></strong> .
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
   <?php elseif(isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong><?= $_SESSION['error'] ?></strong> .
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
  <?php endif ?>
  <div class = "card-header">
              
<!-- <div class="text-left">
<a class="btn btn-primary" href="index.html" role="button">Home</a>
</div> -->
<div class="card-body">
<div class="text-right">
<button type="button" class="fa fa-user-plus btn btn-primary" data-toggle="modal" data-target="#exampleModal">
User
</button>
</div>
</div>
</div>
<div class = "card-body">
<table class="table table-bordered table-sm" id="mydatatable">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
 
    <?php
    
    $n=0;
    while($user_data = mysqli_fetch_array($result)) {
        $n++;
        echo "<tr>";
        echo "<td>".$n."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td>".$user_data['phone']."</td>";
        
        echo "<td style='width: 50px;'>
         <a href='view.php?id=$user_data[id]' class='badge badge-primary btn-md fa fa-eye' role='button' > view</a>
         </td>
<td>
         <a href='edit.php?id=$user_data[id]'  class='fa fa-pencil-square-o badge badge-success btn-md' role='button'> Edit</a>
 </td>
 <td>
 <a href='delete.php?id=$user_data[id]'  class='badge badge-danger btn-md fa fa-trash-o ' role='button'> Delete</a>
 </td>
         </tr>";
         
      
    }

    ?>
   
    </table>

  </div>

    

  </div>

    
</body>
</html>
<?php 
include_once("config.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<body>
    

    <?php

    if(isset($_GET['id'])){
        $id = $_GET["id"];
        include_once ("config.php");
        $result=mysqli_query($mysqli,"SELECT *FROM users WHERE id=$id");
        $row = mysqli_fetch_array($result);

    ?>
    
  <div class="row">
 
    <div class="col"><h5>Name:</h5></div>
    <div class="col"><p><?php echo $row["name"]; ?></p></div>
    <div class="col"><h5>E-mail:</h5></div>
    <div class="col"> <p><?php echo $row["email"]; ?></p></div>
    <div class="w-100"></div>
    <div class="col"><h5>Address:</h5></div>
    <div class="col"> <p><?php echo $row["address"]; ?></p></div>
    
    <div class="w-100"></div>
    
    <div class="col"> <h5>Phone:</h5></div>
    <div class="col">  <p><?php echo $row["phone"]; ?></p></div>
    <div class="w-100"></div>

   
    
    </div>


        
        
    <?php
        }
    ?>

        </div>
    </div> 
    
    <?php 
    session_unset();
    require_once('add.php') 
    
    ?>
    <?php include_once('footer.php') ?> 
</body>
</html>
