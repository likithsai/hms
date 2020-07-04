<?php
	include('../include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HMS</title>
		
		<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<!--<link rel="stylesheet" href="../vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">-->
		<link rel="stylesheet" href="../assets/css/styles.css">
		<!--<link rel="stylesheet" href="../assets/css/plugins.css">-->
		<!--<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

		<script src="../vendor/jquery/jquery.min.js"></script>
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					
							<?php
								switch($_GET['page']) {
									case 'dashboard':
										include('include/page/dashboard.php');
										break;

									case 'appointment':
										include('include/page/appointment.php');
										break;

									case 'bookAppointment':
										include('include/page/bookAppointment.php');
										break;

									case 'medicalHistory':
										include('include/page/medicalHistory.php');	
										break;

									case 'editProfile':
										include('include/page/editProfile.php');
										break;

									case 'changePassword':
										include('include/page/changePassword.php');
										break;

									case 'search':
										include('include/page/search.php');	
										break;

									case 'compose':
										include('include/page/compose.php');
										break;

									case 'inbox':
										include('include/page/inbox.php');
										break;

									case 'sentMail':
										include('include/page/sentMail.php');
										break;
								}
							?>
							
					
				</div>
			</div>
			<?php include('include/footer.php');?>
		</div>

		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--<script src="../vendor/ddslick/jquery.ddslick.min.js"></script>-->
		<!--<script src="../vendor/msdropdown/jquery.dd.min.js"></script>-->
		<!--<script src="../vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>-->
		<!-- <script src="../vendor/modernizr/modernizr.js"></script> -->
		<!-- <script src="../vendor/jquery-cookie/jquery.cookie.js"></script> -->
		<!-- <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
		<!-- <script src="../vendor/switchery/switchery.min.js"></script> -->
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- <script src="../vendor/maskedinput/jquery.maskedinput.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> -->
		<!-- <script src="../vendor/autosize/autosize.min.js"></script> -->
		<!-- <script src="../vendor/selectFx/classie.js"></script> -->
		<!-- <script src="../vendor/selectFx/selectFx.js"></script> -->
		<!-- <script src="../vendor/select2/select2.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script> -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="../assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<!--<script src="../assets/js/form-elements.js"></script>-->

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

		<!-- (Optional) Latest compiled and minified JavaScript translation files -->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>-->

		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
