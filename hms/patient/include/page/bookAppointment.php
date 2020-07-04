<?php
    session_start();
    // error_reporting(0);
    include('../../include/config.php');
    include('../../include/checklogin.php');
    // check_login();

    if(isset($_POST['submit'])) {
        $specilization=$_POST['Doctorspecialization'];
        $doctorid=$_POST['doctor'];
        $userid=$_SESSION['id'];
        $fees=$_POST['fees'];
        $appdate=$_POST['appdate'];
        $time=$_POST['apptime'];
        $userstatus=1;
        $docstatus=1;
    
        $query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
        if($query) {
            echo "<script>alert('Your appointment successfully booked');</script>";
        }
	}

	 

?>

<style type="text/css">
	input {
		border: none;
		box-sizing: border-box;
		outline: 0;
		padding: .75rem;
		position: relative;
		width: 100%;
	}
	input[type="date"]::-webkit-calendar-picker-indicator {
		background: transparent;
		bottom: 0;
		color: transparent;
		cursor: pointer;
		height: auto;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
		width: auto;
	}

	.dropdown-menu > li > a {
		font-weight: 700;
		padding: 5px 10px;
	}

	.bootstrap-select.btn-group .dropdown-menu li small {
		display: block;
		padding: 0px;
		font-weight: 100;
	}


</style>

<script>
function getdoctor(val) {
	$.ajax({
        type: "POST",
        url: "get_doctor.php",
        data:'specilizationid='+val,
        success: function(data){
			$("#doctor").html(data);
        }
	});
}
</script>	


<script>
// function getfee(val) {
// 	$.ajax({
//         type: "POST",
//         url: "get_doctor.php",
// 		data:'doctor='+val,
// 		dataType: "json",
//         success: function(data){
//             $("#fees").html(data);
//         }
// 	});
// }

function getDocDetails(val) {
	$.ajax({
        type: "POST",
        url: "get_doctor.php",
		data:'doctor='+val,
        success: function(data){
            $("#docDetails").html(data);
        }
	});
}
</script>	

<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">


		<div class="row">
			<div class="col-md-7">								
				<div class="row margin-top-30">
					<div class="col-lg-12 col-md-12">
						<div class="panel panel-white no-radius box-shadow">
							
							<div class="panel-body">
								<p style="color:red;">
									<?php echo htmlentities($_SESSION['msg1']);?>
									<?php echo htmlentities($_SESSION['msg1']="");?>
								</p>	
								<form role="form" name="book" method="post" >

									<div class="form-group">
										<label for="DoctorSpecialization">Doctor Specialization</label>
										<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
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
										<label for="doctor">Doctors</label>
										<select name="doctor" class="form-control" id="doctor" onChange="getDocDetails(this.value);" required="required">
											<option value="">Select Doctor</option>
										</select>
									</div>
								

		<!-- 
									<div class="form-group">
										<label for="consultancyfees">Consultancy Fees</label>
										<select name="fees" class="form-control" id="fees" readonly></select>
									</div> -->
																
									<div class="form-group">
										<label for="AppointmentDate">Date</label>
										<input type="date" class="form-control datepicker" name="appdate" required="required" data-date-format="yyyy-mm-dd">
									</div>
																
									<div class="form-group">
										<label for="Appointmenttime">Time</label>
										<input type="time" class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
									</div>														
																
									<button type="submit" name="submit" class="btn btn-o btn-primary btn-purple">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="docDetails" class="col-md-5">
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(document).ready(function() {
		Main.init();
		FormElements.init();
	});

	//$('.datepicker').datepicker({
	//	format: 'yyyy-mm-dd',
	//	startDate: '-3d'
	//});

	//$('.selectpicker').selectpicker({
	//showSubtext:true
	//});
</script>

