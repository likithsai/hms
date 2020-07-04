
<div class="sidebar app-aside navbar-fixed-top" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>
			<!-- start: MAIN NAVIGATION MENU
			<div class="navbar-title"><span>Main Navigation</span></div> -->
						
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
				
				
				
				
	<li class="<?php if($_GET['page'] == "addClinic" || $_GET['page'] == "manageClinic" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-calendar"></i></div>
							<div class="item-inner">
								<span class="title"> Clinic</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "addClinic") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=addClinic"><span class="title"> Add Clinic </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageClinic") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageClinic"><span class="title"> Manage Clinic</span></a>
						</li>		
	
					</ul>
				</li>
				
				
				
				
				
				<li class="<?php if($_GET['page'] == "appointmentHistory") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=appointmentHistory">
						<div class="item-content">
							<div class="item-media"><i class="ti-list"></i></div>
							<div class="item-inner">
								<span class="title"> Appointment History</span>
							</div>
						</div>
					</a>
				</li>
							
				<li class="<?php if($_GET['page'] == "addPatient" || $_GET['page'] == "managePatient") { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="ti-user"></i></div>
							<div class="item-inner">
								<span class="title"> Patients </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "addPatient") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=addPatient"><span class="title"> Add Patient</a>
						</li>
									
						<li class="<?php if($_GET['page'] == "managePatient") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=managePatient">
								<span class="title"> Manage Patient &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="badge bg-success border"><?php echo $manage_patient; ?></span></span>
							</a>
						</li>				
					</ul>
				</li>

				<li class="<?php if($_GET['page'] == "search") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=search">
						<div class="item-content">
							<div class="item-media"><i class="ti-search"></i></div>
							<div class="item-inner">
								<span class="title"> Search </span>
							</div>
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</div>