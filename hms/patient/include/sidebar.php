<?php
	error_reporting(0);
	include('../../include/config.php');
    include('../include/checklogin.php');

	$active_appointment_count = mysqli_num_rows(mysqli_query($con,"select doctors.doctorName as docname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId where appointment.userId='".$_SESSION['id']."'"));
	$medical_history = mysqli_num_rows(mysqli_query($con,"select tblpatient.* from tblpatient join users on users.email=tblpatient.PatientEmail where users.id='" . $_SESSION['id'] . "'"));
?>

<div class="sidebar app-aside navbar-fixed-top" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>			
			<ul class="main-navigation-menu">
				<li class="<?php if($_GET['page'] == "dashboard") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=dashboard">
						<div class="item-content">
							<div class="item-media"><i class="ti-home"></i></div>
							<div class="item-inner">
								<span class="title"> Dashboard </span>
							</div>
						</div>
					</a>
				</li>

				<li class="<?php if($_GET['page'] == "bookAppointment" || $_GET['page'] == "appointment") { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="ti-user"></i></div>
							<div class="item-inner">
								<span class="title"> Appointment </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "bookAppointment") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=bookAppointment"><span class="title"> Book Appointment </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "appointment") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=appointment"><span class="title"> Appointment History &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="badge bg-success border"><?php echo $active_appointment_count; ?></span></span></a>
						</li>			
					</ul>
				</li>
				
				<li class="<?php if($_GET['page'] == "createGroup" || $_GET['page'] == "manageGroup") { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="ti-user"></i></div>
							<div class="item-inner">
								<span class="title"> Group </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">
						<li class="<?php if($_GET['page'] == "createGroup") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=createGroup"><span class="title"> Create Group </span></a>
						</li>	
						<li class="<?php if($_GET['page'] == "manageGroup") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageGroup"><span class="title"> Manage Group </span></a>
						</li>					
					</ul>
				</li>	

				<li class="<?php if($_GET['page'] == "medicalHistory") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=medicalHistory">
						<div class="item-content">
							<div class="item-media"><i class="ti-list"></i></div>
							<div class="item-inner">
								<span class="title"> Medical History</span></span>
							</div>
						</div>
					</a>
				</li>

				<li class="<?php if($_GET['page'] == "search") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=search">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-search"></i></div>
							<div class="item-inner">
								<span class="title"> Search </span>
							</div>
						</div>
					</a>
				</li>

			</ul>
			<!-- end: CORE FEATURES -->
						
		</nav>
	</div>
</div>