    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

	<!-- <footer class="footer">
        <div class="container">
            <div class="text-center">Copyright © <?php echo date("Y") ?> Glorious Book Stores
            </div>
        </div>
    </footer>
 -->
</div><!--End wrapper-->
  

  <!-- Bootstrap core JavaScript-->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    
<!-- simplebar js -->
<script src="../assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="../assets/js/app-script.js"></script>

<!-- <script type="text/javascript" src="../assetspublic/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../assetspublic/js/main.js"></script> -->


<!-- Chart js -->
<script src="../assets/plugins/Chart.js/Chart.min.js"></script>
<!-- Index2 js -->
<script src="../assets/js/index2.js"></script>
<script src="../assets/Toast/js/Toast.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="../assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
<script src="../assets/Toast/js/Toast.min.js"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
     <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
<?php 
    if(isset($_SESSION['success'])){
        $message = $_SESSION['success']; ?>
        <script type="text/javascript">
            new Toast({ message: '<?php echo $message; ?>', type: 'success' });
        </script><?php 
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['error'])){
        $message = $_SESSION['error'];?>
    
        <script type="text/javascript">
            new Toast({ message: '<?php echo $message; ?>', type: 'danger' });
        </script><?php 
        unset($_SESSION['error']);
    }  ?>

</body>
</html>
