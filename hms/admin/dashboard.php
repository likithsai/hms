<?php
	session_start();
	include('include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="../assets/css/plugins.css">
		<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js'></script>
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
			
			<div class="app-content">	
				<?php include('include/header.php'); ?>
				
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<div class="container-fluid container-fullw bg-white">
						<?php
						
							switch($_GET['page']) {
								
								case 'dashboard':
									include('include/page/dashboard.php');
									break;

								case 'doctorSpecialization':
									include('include/page/doctorSpecialization.php');
									break;

								case 'addDoctor':
									include('include/page/addDoctor.php');
									break;

								case 'manageDoctor':
									include('include/page/manageDoctor.php');
									break;

								case 'manageUser':
									include('include/page/manageUser.php');
									break;

								case 'managePatient':
									include('include/page/managePatient.php');
									break;

								case 'appointmentHistory':
									include('include/page/appointmentHistory.php');
									break;

								case 'generateDataReport':
									include('include/page/generateDataReport.php');
									break;

								case 'generateDataReportDetail':
									include('include/page/generateDataReportDetail.php');
									break;

								case 'search':
									include('include/page/search.php');
									break;

								case 'changePassword':
									include('include/page/changePassword.php');
									break;

								case 'editDoctorSpecialization':
									include('include/page/editDoctorSpecialization.php');
									break;

								case 'editDoctor':
									include('include/page/editDoctor.php');
									break;

								case 'viewPatient':
									include('include/page/viewPatient.php');
									break;

								case 'systemDetails':
									include('include/page/systemDetails.php');	
									break;
									
							}
							
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="../assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="../assets/js/form-elements.js"></script>
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
