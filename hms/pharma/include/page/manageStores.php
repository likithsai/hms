<!--
	Filename			:	manageStore.php
	Description			:	Module responsible for managing medicine Stores
	Author				:	B P likith Sai
-->


<?php
	session_start();
	//include('../../include/config.php');
	//include('../../include/checklogin.php');
?>


<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">

					<?php

						$sql = mysqli_query($con, "SELECT * FROM tblmap");
						
						while( $row = mysqli_fetch_array($sql) ) {
					?>

					<div class="panel-group mt-2 mb-0">
						<div class="panel">
						  <div class="panel-heading">
							<h4 class="panel-title" data-toggle="collapse" href="#collapse<?php echo $row['map_id'];?>">
								<div class="row">
									<div class="col-xs-3 col-sm-7 col-lg-7">
										<b><?php echo $row['map_name']; ?></b>
										<br /><small><?php echo $row['map_desc']; ?></small>
									</div>
									
									<div class="col-xs-3 col-sm-2 col-lg-2"></div>
									
									<div class="col-xs-6 col-sm-3 col-lg-3 text-center">
										<div class="text-center" style="list-style: none; display: flex;">
											<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
											&nbsp;<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Remove</a>
										</div>
									</div>
								</div>
							</h4>
						  </div>
						</div>
							
						<div id="collapse<?php echo $row['map_id']; ?>" class="panel-collapse collapse">
							<div class="panel-body p-0">	  
								<div class="col-md-12">
									
								</div>
							</div>
						</div>
					</div>
					
					<?php
						}
					?>
			</div>
		</div>
	</div>
</div>