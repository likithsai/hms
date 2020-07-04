<?php
	include( "../include/config.php" );
?>
	
<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">

		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-white no-radius text-center">
					<div class="panel-body">
						<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
						<h2 class="StepTitle">My Profile</h2>
													
						<p class="links cl-effect-1">
							<a href="dashboard.php?page=editProfile">Update Profile</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="panel panel-white no-radius text-center">
					<div class="panel-body">
						<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
						<h2 class="StepTitle">My Appointments</h2>
												
						<p class="cl-effect-1">
							<a href="dashboard.php?page=appointment">View Appointment History</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="panel panel-white no-radius text-center">
					<div class="panel-body">
						<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
						<h2 class="StepTitle"> Book Appointment</h2>
													
						<p class="links cl-effect-1">
							<a href="dashboard.php?page=bookAppointment">Book Appointment</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>