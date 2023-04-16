<?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mechanic ORDER BY id DESC");

?>

<?php
require("header.php");
?>

<div class="card" >         

<div class="card-header">
<!-- <div class="text-left">
<a class="btn btn-primary" href="index.html" role="button">Home</a>
</div> -->

<div class="text-right">
<button type="button" class="fa fa-user-plus btn btn-primary " data-toggle="modal" data-target="#exampleModal">
Mechanic
</button>
</div>
</div>

<div class="card-body">
<table class="table table-bordered table-sm" id="mydatatable" >
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Service_Type</th>
      <th scope="col">Service_Name</th>
      <th scope="col">Company_Name</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
 <tbody>
    <?php
    
    $n=0;
    while($user_data = mysqli_fetch_array($result)) {
        $n++;
        echo "<tr>";
        echo "<td>".$n."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['service_type']."</td>";
        echo "<td>".$user_data['service_name']."</td>";
        echo "<td>".$user_data['company_name']."</td>";
        
        echo "<td style='width: 50px;'>
         <a href='viewmechanic.php?id=$user_data[id]' class='  badge badge-primary btn-md fa fa-eye' role='button' > view</a>
         </td>
<td>
         <a href='editmechanic.php?id=$user_data[id]'  class=' fa fa-pencil-square-o badge badge-success btn-md' role='button'> Edit</a>
 </td>
 <td>
 <a href='deletemechanic.php?id=$user_data[id]'  class=' badge badge-danger btn-md fa fa-trash-o ' role='button'> Delete</a>
 </td>
         </tr>";
         
      
    }

    ?>
    </tbody>
   
    </table>

    </div>

    
<?php 
include_once("config.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mechanic ORDER BY mechanic_id ASC");
?>

    <?php

    if(isset($_GET['id'])){
        $id = $_GET["id"];
        include_once ("config.php");
        $result=mysqli_query($mysqli,"SELECT *FROM mechanic WHERE id=$id");
        $row = mysqli_fetch_array($result);

    ?>
    
  <div class="row">
 
    <div class="col"><h5>Name:</h5></div>
    <div class="col"><p><?php echo $row["name"]; ?></p></div>
    <div class="col"><h5>Service_Type:</h5></div>
    <div class="col"> <p><?php echo $row["service_type"]; ?></p></div>
    <div class="w-100"></div>
    <div class="col"><h5>Service_Name:</h5></div>
    <div class="col"> <p><?php echo $row["service_name"]; ?></p></div>
    
    <div class="w-100"></div>
    
    <div class="col"> <h5>Company_Name:</h5></div>
    <div class="col">  <p><?php echo $row["company_name"]; ?></p></div>
    <div class="w-100"></div>

   
    
    </div>
  
        
    <?php
        }
    ?>
 
    </div> 
    
    <?php require('addmechanic.php') ?>

    <?php include_once('footer.php') ?>
</body>
</html>
