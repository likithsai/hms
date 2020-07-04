<?php
	session_start();
	include( "../include/config.php" );

	$error = "";
	
	if( isset( $_POST['submit'] ) ) {
		
		$ret = mysqli_query( $con, "SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'" );
		$num = mysqli_fetch_array( $ret );
	
		if( $num > 0 ) {
			
			$extra = "dashboard.php?page=dashboard";
			$_SESSION['login'] = $_POST['username'];
			$_SESSION['id'] = $num['id'];
			$host = $_SERVER['HTTP_HOST'];
			$uip = $_SERVER['REMOTE_ADDR'];
			$status = 1;
			
			// For stroing log if user login successfull
			$log = mysqli_query( $con, "INSERT INTO userlog(uid,username,userip,status) VALUES('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')" );
			$uri = rtrim( dirname( $_SERVER['PHP_SELF'] ), '/\\' );
			header( "location:http://$host$uri/$extra" );
			exit();
			
		} else {
	
			$error = "Wrong Username and Password!";
		
		}
		
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<!-- <link rel="stylesheet" href="../assets/css/plugins.css"> -->
		<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login">
		<div class="container">
			<?php
				
				
				if( !empty( $error ) ) {
				
					echo "<div class=\"alert alert-danger text-center my-3\">";
					echo "<strong>Error: </strong>" . $error . "";
					echo "</div>";
				
				}
			
			?>

			<div class="row justify-content-center my-5">
				<div class="col-lg-6 text-left">
					<img src="../assets/images/logo.png" width="250" class="my-3" />
					<p class="mx-auto text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique ante magna, nec iaculis elit commodo et. Cras at fringilla enim. Quisque tincidunt, nunc vitae commodo consequat, ipsum metus pretium nisl, et auctor dui libero ac nisi. </p>
				</div>

				<div class="col-lg-4 text-center">
					<div class="card my-3">
							<div class="card-header text-left text-center"><i class="fa fa-lock" aria-hidden="true"></i> Login</div>
							<div class="card-body">
							
								<form class="form-login" method="post">
									<div class="row">
										<div class="form-group text-left col-xs-12 col-md-12">
											<label class="control-label font-weight-bold">Username: </label>
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
									</div>

									<div class="row">
										<div class="form-group text-left col-xs-12 col-md-12">
											<label class="control-label font-weight-bold">Password : </label>
											<input type="password" class="form-control password" name="password" placeholder="Password">
										</div>
									</div>

									<div class="row">
										<div class="form-group text-left col-xs-12 col-md-12">
											<button type="submit" class="btn btn-info" name="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</button>
											<button type="reset" class="btn btn-warning"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
										</div>
									</div>
								</form>
							</div>

							<div class="card-footer">Dont have an account? <a href="registration.php">Create Account</a></div>
					</div>
				</div>
			</div>
		</div>


		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../assets/js/login.js"></script>
		
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->
</html>