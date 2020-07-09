<?php
    session_start();
    //include( '../../include/config.php' );

	$msg = "";

    if( isset( $_GET['del'] ) ) {
	
		mysqli_query( $con, "delete from doctors where id = '".$_GET['id']."'" );
        $msg = "data deleted !!";
	
	}





	// form submit
	if(isset($_POST['submit'])) {	
	
		if(!empty($_FILES["image"]["name"])) { 
		
			$fileName = basename($_FILES["image"]["name"]); 
			$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
			
			// Allow certain file formats 
			$allowTypes = array('jpg','png','jpeg','gif'); 
			if(in_array($fileType, $allowTypes)){ 
			
				$image = $_FILES['image']['tmp_name']; 
				$imgContent = addslashes(file_get_contents($image)); 
				
			}
			
		}

		$docspecialization = $_POST['Doctorspecialization'];
		$docname = $_POST['docname'];
		$docaddress = $_POST['clinicaddress'];
		//$docfees = $_POST['docfees'];
		$doccontactno = $_POST['doccontact'];
		$docemail = $_POST['docemail'];
		$password = md5($_POST['npass']);
		$sql = mysqli_query($con, "insert into doctors(specilization,doctorName,address,docFees,contactno,docEmail,password, profile_pic) values('$docspecialization','$docname','$docaddress','1000','$doccontactno','$docemail','$password','$imgContent')");
	
		if($sql) {
		
			$msg = "Doctor Added successfully!";
			
		} else {
			$msg = mysqli_query($con);
		}
		
	}
?>


<script>
	function valid() {
	    if(document.adddoc.npass.value!= document.adddoc.cfpass.value) {
			alert("Password and Confirm Password Field do not match  !!");
			document.adddoc.cfpass.focus();
			return false;
		}
		return true;
	}

	function checkemailAvailability() {
		$("#loaderIcon").show();
		
		jQuery.ajax({
		    url: "check_availability.php",
			data:'emailid='+$("#docemail").val(),
			type: "POST",
            
            success: function(data) {
				$("#email-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error:function () {}
		});
	}
</script>



<!-- Create Specialization modal -->
<div class="modal" id="myModal">
	<form role="form" name="adddoc" method="post" onSubmit="return valid();" enctype="multipart/form-data">
		<div class="modal-dialog" style="margin: 100px auto;">
			
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header btn-purple">
					<h4 class="modal-title" style="color: #fff;">Create Doctor</h4>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					
					<div class="form-group">
						<label for="DoctorSpecialization">Doctor Specialization</label>
						<select name="Doctorspecialization" class="form-control" required="true">
							<option value="">Select Specialization</option>
							<?php 
								$ret=mysqli_query($con,"select * from doctorspecilization");
								while($row=mysqli_fetch_array($ret)) {
							?>
							<option value="<?php echo htmlentities($row['specilization']);?>"><?php echo htmlentities($row['specilization']);?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="doctorname">Doctor Name</label>
						<input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name" required="true">
					</div>

					<div class="form-group">
						<label for="address">Doctor Clinic Address</label>
						<textarea name="clinicaddress" class="form-control"  placeholder="Enter Doctor Clinic Address" required="true"></textarea>
					</div>

					<!-- <div class="form-group">
						<label for="fess">Doctor Consultancy Fees</label>
						<input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
					</div> -->
		
					<div class="col-md-12 p-0">
						<div class="form-group col-md-6 pl-0">
							<label for="fess">Doctor Contact no</label>
							<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
						</div>

						<div class="form-group col-md-6 p-0">
							<label for="fess">Doctor Email</label>
							<input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required="true" onBlur="checkemailAvailability()">
							<span id="email-availability-status"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">Profile Pic</label>
						<input type="file" name="image" class="form-control"  placeholder="Upload File" required="required">
					</div>

					<div class="col-md-12 p-0">
						<div class="form-group col-md-6 pl-0">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
						</div>
																
						<div class="form-group col-md-6 p-0">
							<label for="exampleInputPassword2">Confirm Password</label>
							<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
						</div>
					</div>
				</div>
			

				<!-- Modal footer -->
				<div class="modal-footer">      
					<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary btn-purple">Add Doctor</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</form>
</div>



<div class="row mb-4">
	<div class="col-md-8 text-left">
	<h1><b>Doctors</b></h1>
	</div>
	<div class="col-md-4 text-right">
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-o btn-primary btn-purple"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Add Doctors</button>
	</div>
</div>



<div>
		<?php
				
		if( !empty( $msg ) ) {
			echo "<div class=\"alert alert-success\">";
			echo "<strong>Success!</strong>" . $msg;
			echo "</div>";
		}
	
		?>
</div>

<div class="mt-1">

		<?php
            $sql=mysqli_query($con, "SELECT * FROM doctors") or die(mysqli_error());

            while($row = mysqli_fetch_array($sql)) {
        ?>
		
			<div class="card col-md-4">
				<div class="card-body">
					<h4 class="card-title"><?php echo $row['doctorName']; ?></h4>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['specilization'];?></h6>
			 
					<a href="dashboard.php?page=editDoctor&id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i> Edit</a> | 
					<a href="dashboard.php?page=manageDoctor&id=<?php echo $row['id']?>&del=delete" onclick="return confirm('Are you sure you want to delete this item?');" style="padding: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
				</div>
			</div>
		
		<?php 
            }
        ?>

</div>
