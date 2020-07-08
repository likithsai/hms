<?php
	session_start();
	//include('../../include/config.php');

	$msg = "";

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
		$docfees = $_POST['docfees'];
		$doccontactno = $_POST['doccontact'];
		$docemail = $_POST['docemail'];
		$password = md5($_POST['npass']);
		$sql = mysqli_query($con,"insert into doctors(specilization,doctorName,address,docFees,contactno,docEmail,password, profile_pic) values('$docspecialization','$docname','$docaddress','$docfees','$doccontactno','$docemail','$password','$imgContent')");
	
		if($sql) {
		
			$msg = "Doctor Added successfully!";
			
		}
		
	}
?>


<script type="text/javascript">
	function valid() {
	    if(document.adddoc.npass.value!= document.adddoc.cfpass.value) {
			alert("Password and Confirm Password Field do not match  !!");
			document.adddoc.cfpass.focus();
			return false;
		}
		return true;
	}
</script>

<script>
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
        

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
				<?php
				
					if( !empty( $msg ) ) {
						echo "<div class=\"alert alert-success\">";
						echo "<strong>Success!</strong>" . $msg;
						echo "</div>";
					}
	
				?>
				
			    <div class="panel no-radius box-shadow panel-white" style="border: 1px solid #ccc;">
                    <div class="panel-body">
                        <form role="form" name="adddoc" method="post" onSubmit="return valid();" enctype="multipart/form-data">
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

                            <div class="form-group">
								<label for="fess">Doctor Consultancy Fees</label>
					            <input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
							</div>
	
                            <div class="form-group">
								<label for="fess">Doctor Contact no</label>
					            <input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
							</div>

                            <div class="form-group">
								<label for="fess">Doctor Email</label>
                                <input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required="true" onBlur="checkemailAvailability()">
                                <span id="email-availability-status"></span>
                            </div>
                
							<div class="form-group">
								<label for="exampleInputPassword1">Profile Pic</label>
					            <input type="file" name="image" class="form-control"  placeholder="Upload File" required="required">
							</div>

                            <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
					            <input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
							</div>
														
                            <div class="form-group">
								<label for="exampleInputPassword2">Confirm Password</label>
								<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
							</div>
														
							<button type="submit" name="submit" id="submit" class="col-md-12 col-sm-12 btn btn-o btn-primary btn-purple">Submit</button>
						</form>
					</div>
				</div>
            </div>
		</div>
    </div>
</div>