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
			<div class="row" style="margin-top: 10px;">

				<?php
					$sql=mysqli_query($con, "SELECT * FROM tblpharmamedicines");

					while($row = mysqli_fetch_array($sql)) {
				?>
				
				<div class="card col-md-4">
					<div class="card-body">
						<h4 class="card-title"><i class="fa fa-medkit"> </i> <?php echo $row['medicine_name'] . " (" . $row['medicine_generic_name'] .")"; ?></h4>
						
						
						<p class="card-text text-justify">
							<small class="card-title"><u>Category </u> : <?php echo $row['medicine_category']; ?></small><br />
							<small><b><u>Quantity </u></b> : <?php echo $row['medicine_quantity']; ?></small><br />
							<small><b><u>Shelf </u></b> : <?php echo $row['medicine_shelf']; ?></small>
						</p>

						<a href="#" style="padding: 5px;"><i class="fa fa-edit"></i> Edit</a> | 
						<a href="#" style="padding: 5px;"><i class="fa fa-trash"></i> Delete</a>
					</div>
				</div>
				
				<?php 
					}
				?>

			</div>
		</div>
	</div>
</div>