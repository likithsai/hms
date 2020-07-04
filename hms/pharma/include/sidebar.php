
<!--
	Filename			:	sidebar.php
	Description			:	Module responsible for handling sidebar operations.
	Author				:	B P likith Sai
-->

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
							<div class="item-media"><i class="fa fa-tachometer"></i></div>
							<div class="item-inner">
								<span class="title"> Dashboard </span>
							</div>
						</div>
					</a>
				</li>

				
				<li class="<?php if($_GET['page'] == "addStore" || $_GET['page'] == "manageStore" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-medkit"></i></div>
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

				<li class="<?php if($_GET['page'] == "addCustomer" || $_GET['page'] == "manageCustomer" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-user"></i></div>
							<div class="item-inner">
								<span class="title"> Customer</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "addCustomer") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=addCustomer"><span class="title"> Add Customer </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageCustomer") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageCustomer"><span class="title"> Manage Customer</span></a>
						</li>		
	
					</ul>
				</li>





				<li class="<?php if($_GET['page'] == "addMedicines" || $_GET['page'] == "manageMedicines" || $_GET['page'] == "medicineCategory" || $_GET['page'] == "outOfStock" || $_GET['page'] == "expired" || $_GET['page'] == "addSupplier" || $_GET['page'] == "manageSupplier" || $_GET['page'] == "addManufacturer" || $_GET['page'] == "manageManufacturer" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-medkit"></i></div>
							<div class="item-inner">
								<span class="title"> Medicines </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "addMedicines") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=addMedicines"><span class="title"> Add Medicines </span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageMedicines") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageMedicines"><span class="title"> Manage Medicines</span></a>
						</li>	

						<li class="<?php if($_GET['page'] == "medicineCategory") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=medicineCategory"><span class="title">Medicines Category</span></a>
						</li>		

						<li class="<?php if($_GET['page'] == "outOfStock") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=outOfStock"><span class="title"> Out Of Stock Medicines</span></a>
						</li>

						<li class="<?php if($_GET['page'] == "expired") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=expired"><span class="title"> Expired Medicines</span></a>
						</li>		

						<li class="<?php if($_GET['page'] == "addManufacturer") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=addManufacturer"><span class="title">Add Manufacturer</span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageManufacturer") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageManufacturer"><span class="title">Manage Manufacturer</span></a>
						</li>	
					</ul>
				</li>


				<li class="<?php if($_GET['page'] == "newInvoice" || $_GET['page'] == "manageInvoice" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-files-o"></i></div>
							<div class="item-inner">
								<span class="title"> Invoice </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "newInvoice") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=newInvoice"><span class="title"> New Invoice</span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageInvoice") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageInvoice"><span class="title"> Manage Invoice</span></a>
						</li>			
					</ul>
				</li>


				<li class="<?php if($_GET['page'] == "newOrders" || $_GET['page'] == "manageOrders" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-shopping-cart"></i></div>
							<div class="item-inner">
								<span class="title"> Orders</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "newOrders") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=newOrders"><span class="title">New Orders</span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "manageOrders") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=manageOrders"><span class="title">Manage Orders</span></a>
						</li>			
					</ul>
				</li>


				<li class="<?php if($_GET['page'] == "salesReport" || $_GET['page'] == "purchaseReport" ) { echo "active"; } else { echo ""; } ?>">
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-calendar"></i></div>
							<div class="item-inner">
								<span class="title"> Report</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
								
					<ul class="sub-menu">			
						<li class="<?php if($_GET['page'] == "salesReport") { echo "active"; } else { echo ""; } ?>">
							<!-- book-appointment.php -->
							<a href="dashboard.php?page=salesReport"><span class="title">Sales</span></a>
						</li>
									
						<li class="<?php if($_GET['page'] == "purchaseReport") { echo "active"; } else { echo ""; } ?>">
							<a href="dashboard.php?page=purchaseReport"><span class="title">Purchase</span></a>
						</li>			
					</ul>
				</li>
				
				
				<li class="<?php if($_GET['page'] == "search") { echo "active"; } else { echo ""; } ?>">
					<a href="dashboard.php?page=search">
						<div class="item-content">
							<div class="item-media"><i class="fa fa-search"></i></div>
							<div class="item-inner">
								<span class="title"> Search</span>
							</div>
						</div>
					</a>
				</li>

			</ul>
			<!-- end: CORE FEATURES -->
						
		</nav>
	</div>
</div>