
<!--
	Filename			:	sidebar.php
	Description			:	Module responsible for handling sidebar operations.
	Author				:	B P likith Sai
-->

<?php
	require_once( '../include/config.php' );
?>

<div class="sidebar app-aside navbar-fixed-top" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>			
			<ul class="main-navigation-menu">
				<li class="<?php if($_GET['page'] == "dashboard") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=dashboard">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-tachometer"></i></div>
							<div class="item-inner">
								<span class="title"> Dashboard </span>
							</div>
						</div>
					</a>
				</li>



				<li class="<?php if($_GET['page'] == "createGroup" || $_GET['page'] == "manageGroup" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-calendar"></i></div>
							<div class="item-inner">
								<span class="title"> Group</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "createGroup") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=createGroup"><span class="title"> Create Group </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageGroup") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageGroup"><span class="title"> Manage Customer</span></a>
						</li>		
	
					</ul>
				</li>
			</ul>
			<!-- end: CORE FEATURES -->
						
		</nav>
	</div>
</div>