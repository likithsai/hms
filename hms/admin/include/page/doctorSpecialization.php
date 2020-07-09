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




<!-- Create Specialization modal -->
<div class="modal" id="myModal">
	<form role="form" name="dcotorspcl" method="post">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header btn-purple">
				<h4 class="modal-title" style="color: #fff;">Create Specialization</h4>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Enter Specialization Name</label>
						<input type="text" name="doctorspecilization" class="form-control"  placeholder="Enter Doctor Specialization">
					</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">      
				<button type="submit" name="submit" class="btn btn-o btn-primary btn-purple">Add Specialization</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</form>
</div>



<div class="row mb-4">
	<div class="col-md-8 text-left">
	<h1><b>Doctor Specialization</b></h1>
	</div>
	<div class="col-md-4 text-right">
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-o btn-primary btn-purple"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Add Specialization</button>
	</div>
</div>


<div>		
		<?php
				
			if( !empty( $msg ) ) {
				echo "<div class=\"alert alert-success text-center\">";
				echo "<strong>Success! : </strong>" . $msg;
				echo "</div>";
			}
	
		?>
</div>


<div>
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