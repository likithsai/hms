<?php
	require_once( '../include/config.php' );
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HMS</title>
		
		<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />
		<script src="../vendor/jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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
