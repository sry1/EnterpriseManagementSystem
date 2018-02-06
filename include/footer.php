<footer class="main-footer">
	<?php echo $footerMessage;?>
</footer>
</div>
<!-- /wrapper -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- country name picker -->
<script src="js/bootstrap-formhelpers-countries.js" type="text/javascript"></script>
<!-- Bootstrap Form Helpers -->
<script src="js/bootstrap-formhelpers-countries.en_US.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/min/moment.min.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- sweet alert -->
<script type="text/javascript" src="plugins/sweetalert/sweetalert.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- tinymce -->
<!-- <script src='plugins/tinymce/tinymce.min.js'></script> -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<!--  dropify -->
<script src="plugins/dropify/js/dropify.min.js" charset="utf-8"></script>
<script type="text/javascript">
    // initialize dropify
	$('.dropify').dropify();
	//Date picker
    $('#datepicker_date_of_joining').datepicker({
      autoclose: true
    });
    $('#datepicker_date_of_birth').datepicker({
      autoclose: true
    });
    /*edit_employee_id*/
    $('#edit_employee_id').click(function() {
        $('#auto_generated_id').removeAttr('readonly').val('');
    });
</script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
     var table = $('#display_users_table');
    	table.DataTable({
        "lengthMenu": [
            [5, 10, 20, 50, 100, -1],
            [5, 10, 20, 50, 100, "All"] // change per page values here
        ]
    });
</script>
<!-- print -->
<script src="js/printThis.js" type="text/javascript"></script>
<!-- jquery  validation  plugin-->
<script src="js/jquery.validate.js" type="text/javascript"></script>

<!-- jquery form validation -->
<script src="js/formValidate.js" type="text/javascript"></script>
<!-- jQuery cookie plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<!-- End -->
<!-- password strength check -->
<script src="js/passwordStrength.js" type="text/javascript"></script>
<!-- change Skin color -->
<script type="text/javascript">
  $(document).ready(function (){
    $("#changeSkin").change(function () {
        var skinColor = $(this).val();
        $("body").removeClass().addClass("hold-transition "+skinColor+" sidebar-mini");
        $.cookie('skinColor', skinColor);
    });
  });
</script>
<?php if(isset($_COOKIE['skinColor'])) { ?>
<script type="text/javascript">
      var cookieSkinColor = '<?php echo $_COOKIE['skinColor']; ?>';
     $("#changeSkin").val(cookieSkinColor);
</script>
<?php } ?>
<!-- End -->