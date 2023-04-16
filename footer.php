  
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
     lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [ 'copy', 'excel', 'pdf',
            'pageLength' ]
    } );
 
    // table.buttons().container()
    //     .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
<!-- <script src = "https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src = "https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src = "https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script> -->

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