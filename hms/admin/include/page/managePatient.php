<?php
    session_start();
    //include( '../../include/config.php' );
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
            $sql=mysqli_query($con, "SELECT * FROM tblpatient");

            while($row = mysqli_fetch_array($sql)) {
        ?>
		
			<div class="card col-md-4">
				<div class="card-body">
					<h4 class="card-title"><?php echo $row['PatientName']; ?></h4>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['PatientGender']; ?></h6>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['email']; ?></h6>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['PatientContno']; ?></h6>
					
					<a href="dashboard.php?page=viewPatient&viewid=<?php echo $row['ID']; ?>"><i class="fa fa-eye"></i> View Patient</a>
				</div>
			</div>
		
		<?php 
            }
        ?>

</div>