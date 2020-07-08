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

<div class="row">
		<?php
				
		if( !empty( $msg ) ) {
			echo "<div class=\"alert alert-success\">";
			echo "<strong>Success!</strong>" . $msg;
			echo "</div>";
		}
	
		?>
</div>

<div class="row" style="margin-top: 10px;">

		<?php
            $sql=mysqli_query($con, "SELECT * FROM tblmap");

            while($row = mysqli_fetch_array($sql)) {
        ?>
		
			<div class="card col-md-4">
			  <div class="card-body">
				<h3 class="card-title"><?php echo $row['map_name']; ?></h3>
				<p class="card-text" style="margin-top: 20px;"><?php echo $row['map_desc']; ?></p>
				
				<a href="#" class="card-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
				<a href="#" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Remove</a>
			
			  </div>
			</div>
		
		<?php 
            }
        ?>

</div>