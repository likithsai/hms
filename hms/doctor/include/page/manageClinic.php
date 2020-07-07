<!--
	Filename			:	manageClinic.php
	Description			:	Module responsible for managing medicine Stores
	Author				:	B P likith Sai
-->


<?php
	//session_start();
	//include('../../include/config.php');
	//include('../../include/checklogin.php');
?>

<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">

					<?php

						// pagination 
						$limit = 10;
						if(isset($_GET["pn"])) {
							$pn = $_GET["pn"];
						} else {
							$pn = 1;
						}

						$start = ($pn - 1) * $limit;

						$sql=mysqli_query($con,"SELECT * FROM tblpharmamedicines LIMIT $start, $limit");
						$cnt=1;


						while($row=mysqli_fetch_array($sql)) {
					?>

					<div class="panel-group mt-2 mb-0">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title" data-toggle="collapse" href="#collapse<?php echo $cnt;?>">
								<div class="row">
									<div class="col-xs-3 col-sm-7 col-lg-7">
										<b><?php echo $row['medicine_name'] . " (" . $row['medicine_generic_name'] .")"; ?></b>
										<br /><small><u>Category </u> : <?php echo $row['medicine_category']; ?></small>
									</div>
									
									<div class="col-xs-3 col-sm-2 col-lg-2">
										<small><b><u>Quantity </u></b> : <?php echo $row['medicine_quantity']; ?></small><br />
										<small><b><u>Shelf </u></b> : <?php echo $row['medicine_shelf']; ?></small>
									</div>
									
									<div class="col-xs-6 col-sm-3 col-lg-3 text-center">
										<div class="text-center" style="list-style: none; display: flex;">
											<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
											&nbsp;<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Remove</a>
										</div>
									</div>
								</div>
							</h4>
						</div>
							
						<div id="collapse<?php echo $cnt; ?>" class="panel-collapse collapse">
							<div class="panel-body p-0">	  
								<ul class="list-group mb-0">
								  <li class="list-group-item">
									<b><u style="color: #000;">Medicine Description: </u></b>
									<p><?php echo $row['medicine_description']; ?></p>
								  </li>
								  <li class="list-group-item">
									<b><u style="color: #000;">Medicine Expiry Date: </u></b>
									<p><?php echo $row['medicine_expiry_date']; ?></p>
								  </li>
								  <li class="list-group-item">
									<b><u style="color: #000;">Medicine Price: </u></b>
									<p><?php echo $row['medicine_manufacturer_price']; ?></p>
								  </li>
								  <li class="list-group-item">
									<b><u style="color: #000;">Medicine Company: </u></b>
									<p><?php echo $row['medicine_company']; ?></p>
								  </li>
								  <li class="list-group-item">
									<b><u style="color: #000;">Medicine Strength: </u></b>
									<p><?php echo $row['medicine_strength']; ?></p>
								  </li>
								</ul>
							</div>
						</div>
					</div>
					
					<?php 
						$cnt=$cnt+1; 
					}
					
					$count=mysqli_query($con,"SELECT COUNT(*) FROM tblpharmamedicines");
					$row = mysqli_fetch_array($count);   
        			$total_records = $row[0];  
				
					// Number of pages required. 
					$total_pages = ceil($total_records / $limit);   
					$pagLink = "";                         

					if( $total_records >= $limit) {
						echo "<div class=\"text-right\"><ul class=\"pagination\">";
							for ($i = 1; $i <= $total_pages; $i++) { 
								if($i == $pn) {
									echo "<li class='active'><a href='dashboard.php?page=manageMedicines&pn=" . $i . "'>" . $i . "</a></li>";
								} else {
									echo "<li><a href='dashboard.php?page=manageMedicines&pn=" . $i . "'>" . $i . "</a></li>";
								}	
							}
						echo "</ul></div>";
					}
				?>
			</div>
		</div>
	</div>
</div>