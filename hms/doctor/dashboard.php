<?php	
	include_once( '../include/config.php' );
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<!--<link rel="stylesheet" href="../assets/css/plugins.css">-->
		<!--<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />-->


	</head>
	<body>
		<div id="app">		
			<?php include( 'include/sidebar.php' ); ?>
			<div class="app-content">	
				<?php include( 'include/header.php' ); ?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						
						<div class="container-fluid container-fullw bg-white">
							
							<?php
							
								switch( $_GET['page'] ) {
									
									case 'dashboard':
										include( 'include/page/dashboard.php' );
										break;

									case 'appointmentHistory':
										include( 'include/page/appointmentHistory.php' );
										break;

									case 'addPatient':
										include( 'include/page/addPatient.php' );
										break;

									case 'managePatient':
										include( 'include/page/managePatient.php' );
										break;

									case 'search':
										include( 'include/page/search.php' );
										break;

									case 'editProfile':
										include( 'include/page/editProfile.php' );
										break;

									case 'changePassword':
										include( 'include/page/changePassword.php' );
										break;
										
										
									case 'addClinic':
										include( 'include/page/addClinic.php' );
										break;
										
									case 'manageClinic':
										include( 'include/page/manageClinic.php' );
										break;
										
										
									case 'createGroup':
										include('include/page/createGroup.php');
										break;

									case 'manageGroup':
										include('include/page/manageGroup.php');
										break;
									
										
										
								}
								
							?>

						</div>
								
					</div>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>

		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- <script src="../vendor/modernizr/modernizr.js"></script> -->
		<!-- <script src="../vendor/jquery-cookie/jquery.cookie.js"></script> -->
		<!-- <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
		<!-- <script src="../vendor/switchery/switchery.min.js"></script> -->
		<!-- <script src="../vendor/maskedinput/jquery.maskedinput.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> -->
		<!-- <script src="../vendor/autosize/autosize.min.js"></script> -->
		<!-- <script src="../vendor/selectFx/classie.js"></script> -->
		<!-- <script src="../vendor/selectFx/selectFx.js"></script> -->
		<!-- <script src="../vendor/select2/select2.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script> -->
		<!-- <script src="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script> -->
		<script src="../assets/js/main.js"></script>
		<!-- <script src="../assets/js/form-elements.js"></script> -->
		<script>
			jQuery(document).ready(function() {
			
				Main.init();
				FormElements.init();
				
			});
		</script>
	</body>
</html>
