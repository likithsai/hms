<div class="sidebar app-aside navbar-fixed-top" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>				
			<ul class="main-navigation-menu">
								
				<li class="<?php if($_GET['page'] == "dashboard") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=dashboard">
						<div class="item-content">
							<div class="item-media"><i class="ti-home"></i></div>
							<div class="item-inner"><span class="title"> Dashboard </span></div>
						</div>
					</a>
				</li>

				<li class="<?php if($_GET['page'] == "doctorSpecialization" || $_GET['page'] == "addDoctor" || $_GET['page'] == "manageDoctor") { echo "active"; } else { echo ""; } ?>" >
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-medkit"></i></div>
							<div class="item-inner">
								<span class="title"> Doctors </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>

					<ul class="sub-menu">
						<li class="<?php if($_GET['page'] == "doctorSpecialization") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=doctorSpecialization"><span class="title"> Doctor Specialization </span></a>
						</li>
										
						<li class="<?php if($_GET['page'] == "addDoctor") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=addDoctor"><span class="title"> Add Doctor</span></a>
						</li>
										
						<li class="<?php if($_GET['page'] == "manageDoctor") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageDoctor"><span class="title"> Manage Doctors </span></a>
						</li>
										
					</ul>
				</li>

				<li class="<?php if($_GET['page'] == "manageUser") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=manageUser">
						<div class="item-content">
							<div class="item-media"><i class="ti-user"></i></div>
							<div class="item-inner">
								<span class="title"> Users </span>
							</div>
						</div>
					</a>
				</li>
									
				<li class="<?php if($_GET['page'] == "managePatient") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=managePatient">
						<div class="item-content">
							<div class="item-media"><i class="ti-user"></i></div>
							<div class="item-inner">
								<span class="title"> Patients </span>
							</div>
						</div>
					</a>
				</li>	

				<li class="<?php if($_GET['page'] == "addStore" || $_GET['page'] == "manageStore" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-home"></i></div>
							<div class="item-inner">
								<span class="title"> Stores</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "addStore") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=addStore"><span class="title"> Add Store </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageStore") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageStore"><span class="title"> Manage Store</span></a>
						</li>		
	
					</ul>
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
				
				
				<li class="<?php if($_GET['page'] == "appointmentHistory") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=appointmentHistory">
						<div class="item-content">
							<div class="item-media"><i class="ti-file"></i></div>
							<div class="item-inner">
								<span class="title"> Appointment History </span>
							</div>
						</div>
					</a>
				</li>
					
				<li class="<?php if($_GET['page'] == "generateDataReport") { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="ti-files"></i></div>
							<div class="item-inner">
								<span class="title"> Reports </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
									
					<ul class="sub-menu">
						<li class="<?php if($_GET['page'] == "generateDataReport") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=generateDataReport">
								<span class="title">B/w dates reports </span>
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
			<!-- end: CORE FEATURES -->
		</nav>
	</div>
</div>