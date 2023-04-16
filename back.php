
   <?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mechanic ORDER BY id DESC");

?>

 
<?php
require("header.php");
?>

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
