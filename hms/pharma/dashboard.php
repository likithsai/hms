<?php

	session_start();
	include( '../include/config.php' );
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HMS</title>
		
		<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<!--<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />-->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
		
		<!-- map implementation -->
		<link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7.3/leaflet.css" />
		<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7.3/leaflet.js"></script>
	</head>
	<body>
		<div id="app">		
			<?php include( 'include/sidebar.php' );?>
			<div class="app-content">
				<?php include( 'include/header.php' );?>
				<div class="main-content" >
					
							<?php
								switch( $_GET['page'] ) {
									case 'dashboard':
										include( 'include/page/dashboard.php' );
										break;

									case 'addMedicines':
										include( 'include/page/addMedicines.php' );
										break;

									case 'addCustomer':
										include( 'include/page/addCustomer.php' );
										break;

									case 'manageCustomer':
										include( 'include/page/manageCustomer.php' );
										break;

									case 'medicineCategory':
										include( 'include/page/medicineCategory.php' );
										break;

									case 'appointment':
										include( 'include/page/appointment.php' );
										break;

									case 'bookAppointment':
										include( 'include/page/bookAppointment.php' );
										break;

									case 'medicalHistory':
										include( 'include/page/medicalHistory.php' );	
										break;

									case 'editProfile':
										include( 'include/page/editProfile.php' );
										break;

									case 'changePassword':
										include( 'include/page/changePassword.php' );
										break;

									case 'search':
										include( 'include/page/search.php' );	
										break;

									case 'compose':
										include( 'include/page/compose.php' );
										break;

									case 'inbox':
										include( 'include/page/inbox.php' );
										break;

									case 'sentMail':
										include( 'include/page/sentMail.php' );
										break;

									case 'invoice':
										include( 'include/page/invoice.php' );
										break;

									case 'manageMedicines':
										include( 'include/page/manageMedicines.php' );
										break;

									case 'outOfStock':
										include( 'include/page/outOfStock.php' );
										break;

									case 'expired':
										include( 'include/page/expiredMedicines.php' );
										break;

									case 'addManufacturer':
										include( 'include/page/addManufacturer.php' );
										break;

									case 'manageManufacturer':
										include( 'include/page/manageManufacturer.php' );
										break;

									case 'newInvoice':
										include( 'include/page/newInvoice.php' );
										break;
										
									case 'manageInvoice':
										include( 'include/page/manageInvoice.php' );
										break;
										
									case 'addStore':
										include( 'include/page/addStores.php');
										break;
										
									case 'manageStore':
										include( 'include/page/manageStores.php' );
										break;
										
									case 'search':
										include( 'include/page/search.php' );
										break;
								}
							?>
							
					
				</div>
			</div>
		</div>

		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="../assets/js/main.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
</html>
