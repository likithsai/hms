<?php
    session_start();
    //include( '../../include/config.php' );

    $did = intval( $_GET['id'] );// get doctor id
    
	if( isset( $_POST['submit'] ) ) {

		$target_dir = "../../uploads/";
		$target_file = $target_dir . time();
        
		if( !empty( $_FILES["image"]["name"] ) ) {
		
			$fileName = basename( $_FILES["image"]["name"] ); 
			$fileType = pathinfo( $fileName, PATHINFO_EXTENSION );
			
			// Allow certain file formats 
			$allowTypes = array( 'jpg', 'png', 'jpeg', 'gif' ); 
			if( in_array( $fileType, $allowTypes ) ) {
			
				$image = $_FILES['image']['tmp_name']; 
				//$imgContent = addslashes(file_get_contents($image)); 
				
			}
			
        }
        
        $docspecialization = $_POST['Doctorspecialization'];
        $docname = $_POST['docname'];
        $docaddress = $_POST['clinicaddress'];
        $docfees = $_POST['docfees'];
        $doccontactno = $_POST['doccontact'];
        $docemail = $_POST['docemail'];

		if( move_uploaded_file($image, $target_file) ) {
			$sql = mysqli_query($con, "UPDATE doctors SET specilization='$docspecialization', doctorName='$docname', address='$docaddress', docFees='$docfees', contactno='$doccontactno', docEmail='$docemail', profile_pic='$target_file' WHERE id = '$did'");
			if($sql) {
				$msg="Doctor Details updated Successfully";
			}
		}

    }
?>

<div class="row">
	<div class="col-md-12">
		<h5 style="color: green; font-size:18px; "><?php if($msg) { echo htmlentities($msg); } ?></h5>
		<div class="row margin-top-30">
			<div class="col-lg-8 col-md-12">
				<div class="panel panel-white" style="border: 1px solid #ccc;">
					<div class="panel-body">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM doctors WHERE id = '$did'");
                            while( $data = mysqli_fetch_array($sql) ) {
                        ?>

                        <h4><?php echo htmlentities($data['doctorName']);?>'s Profile</h4>
                        <p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creationDate']);?></p>
                        <?php 
                            if($data['updationDate']){
                        ?>
                        <p><b>Profile Last Updation Date: </b><?php echo htmlentities($data['updationDate']);?></p>
                        <?php 
                            } 
                        ?>
                        <hr />
                        
                        <form role="form" name="adddoc" method="post" onSubmit="return valid();" enctype="multipart/form-data">
							<div class="form-group">
							    <label for="DoctorSpecialization">Doctor Specialization</label>
							    <select name="Doctorspecialization" class="form-control" required="required">
					                <option value="<?php echo htmlentities($data['specilization']);?>"><?php echo htmlentities($data['specilization']);?></option>
                                    <?php 
                                        $ret=mysqli_query($con,"SELECT * FROM doctorspecilization");
                                        while($row=mysqli_fetch_array($ret)) {
                                    ?>
									<option value="<?php echo htmlentities($row['specilization']);?>"><?php echo htmlentities($row['specilization']);?></option>
									<?php } ?>
								</select>
							</div>

                            <div class="form-group">
								<label for="doctorname">Doctor Name</label>
	                            <input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
							</div>

                            <div class="form-group">
								<label for="address">Doctor Clinic Address</label>
					            <textarea name="clinicaddress" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
							</div>

                            <div class="form-group">
								<label for="fess">Doctor Consultancy Fees</label>
		                        <input type="text" name="docfees" class="form-control" required="required"  value="<?php echo htmlentities($data['docFees']);?>" >
							</div>
	
                            <div class="form-group">
								<label for="fess">Doctor Contact no</label>
					            <input type="text" name="doccontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
							</div>

                            <div class="form-group">
							    <label for="fess">Doctor Email</label>
					            <input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
							</div>

                            <div class="form-group">
								<label for="exampleInputPassword1">Profile Pic</label><br/>
                                <img width="100" height="100"  src="<?php echo $data['profile_pic']; ?>" /> 
					            <input type="file" name="image" class="form-control"  placeholder="Upload File" required="required">
							</div>
                        
                            <?php } ?>
														
						    <button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
					    </form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
