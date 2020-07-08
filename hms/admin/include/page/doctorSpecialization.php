<?php
    session_start();
    //include('../../include/config.php');

	$msg = "";
	
    if(isset($_POST['submit'])) {
	
        $sql = mysqli_query($con,"insert into doctorSpecilization(specilization) values('".$_POST['doctorspecilization']."')");
		$msg = "Doctor Specialization added!";
    
	}

    if(isset($_GET['del'])) {
	
		mysqli_query($con,"delete from doctorSpecilization where id = '".$_GET['id']."'");
        $msg = "Data deleted!";
    
	}
?>


<div class="row">
				
		<?php
				
			if( !empty( $msg ) ) {
				echo "<div class=\"alert alert-success\">";
				echo "<strong>Success!</strong>" . $msg;
				echo "</div>";
			}
	
		?>
				
				
		<div class="panel panel-white no-radius" style="border: 1px solid #ccc;">
			<div class="panel-body">
					<form role="form" name="dcotorspcl" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Add New Specialization</label>
						    <input type="text" name="doctorspecilization" class="form-control"  placeholder="Enter Doctor Specialization">
						</div>
                            
                        <button type="submit" name="submit" class="btn btn-o btn-primary btn-purple">Add Specialization</button>
					</form>
			</div>
		</div>

</div>


<div class="row">
	<?php
		$sql=mysqli_query($con,"select * from doctorSpecilization");

        while($row=mysqli_fetch_array($sql)) {
    ?>
			<div class="card col-md-4">
				<div class="card-body">
					<h4 class="card-title"><?php echo $row['specilization']; ?></h4>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['creationDate'];?></h6>
		
					<a href="dashboard.php?page=editDoctorSpecialization&id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i> Edit</a> | 
					<a href="dashboard.php?page=doctorSpecialization&id=<?php echo $row['id']?>&del=delete" onclick="return confirm('Are you sure you want to delete this item?');" style="padding: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
				</div>
			</div>
	
	<?php 
        }
    ?>
</div>