
   <?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mechanic ORDER BY id DESC");

?>

<html>
<head>
    <title>Homepage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css">

    


  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->

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
          <div class="container">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                
                
              </ul>
            </div>
</nav>
      
<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

              
<div class="text-left">
<a class="btn btn-primary" href="index.html" role="button">Home</a>
</div>
<div class="card-body">
<div class="text-right">
<button type="button" class="btn btn-primary  " data-toggle="modal" data-target="#exampleModal">
Add  New Mechanic
</button>
</div>
</div>


<table class="table" id="mydatatable">
  
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
         <a href='viewmechanic.php?id=$user_data[id]' class='badge badge-primary btn-sm' role='button' >view</a>
         </td>
<td>
         <a href='editmechanic.php?id=$user_data[id]'  class='badge badge-success btn-sm' role='button'>Edit</a>
 </td>
 <td>
 <a href='deletemechanic.php?id=$user_data[id]'  class='badge badge-danger btn-sm' role='button'>Delete</a>
 </td>
         </tr>";
         
      
    }

    ?>
   
    </table>



    



    
</body>
</html>
<?php 
include_once("config.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mechanic ORDER BY mechanic_id ASC");
?>

    <?php

    if(isset($_GET['mechanic_id'])){
        $id = $_GET["mechanic_id"];
        include_once ("config.php");
        $result=mysqli_query($mysqli,"SELECT *FROM mechanic WHERE mechanic_id=$mechanic_id");
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
    </div> 
    
    <?php require('addmechanic.php') ?>

    
   
    <script>
//   $(document).ready(function () {
//     $('#mydatatable').DataTable({
//       lengthChange: false,
//      // dom: 'Bfrtip',
//       buttons: [
//             'copy', 'csv', 'excel', 'print'
//         ]
//     });
// });
$(document).ready(function() {
    var table = $('#mydatatable').DataTable( {
      dom: 'Bfrtip',
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
<!-- <script src = "https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src = "https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src = "https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src ="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
</body>
</html>
