<?php
    session_start();
    //include('../../include/config.php');
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
		
			<div class="card col-md-12" style="margin-bottom:10px;">
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




<div class="row">
	<div class="col-md-12">
	    <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
		<table class="table table-hover table-striped" id="sample-table-1">
			<thead>
				<tr>
					<th class="text-center btn-purple" style="color: white;">#</th>
					<th class="text-center btn-purple" class="hidden-xs" style="color: white;">Doctor Name</th>
					<th class="text-center btn-purple" style="color: white;">Patient Name</th>
					<th class="text-center btn-purple" style="color: white;">Specialization</th>
					<th class="text-center btn-purple" style="color: white;">Consultancy Fee</th>
					<th class="text-center btn-purple" style="color: white;">Appointment Date / Time </th>
					<th class="text-center btn-purple" style="color: white;">Appointment Creation Date  </th>
					<th class="text-center btn-purple" style="color: white;">Current Status</th>
					<th class="text-center btn-purple" style="color: white;">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
                $sql=mysqli_query($con,"select doctors.doctorName as docname,users.fullName as pname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId join users on users.id=appointment.userId ");
                $cnt=1;
                while($row=mysqli_fetch_array($sql)) {
            ?>

			<tr style = "background: white !important; border: 1px solid #ccc;">
			    <td class="text-center" style="background: #f1f1f1 !important;"><?php echo $cnt;?>.</td>
				<td class="text-center"><?php echo $row['docname'];?></td>
				<td class="text-center"><?php echo $row['pname'];?></td>
				<td class="text-center"><?php echo $row['doctorSpecialization'];?></td>
				<td class="text-center"><?php echo $row['consultancyFees'];?></td>
				<td class="text-center"><?php echo $row['appointmentDate'];?> / <?php echo $row['appointmentTime'];?></td>
				<td class="text-center"><?php echo $row['postingDate'];?></td>
				<td class="text-center">
                <?php 
                    if(($row['userStatus']==1) && ($row['doctorStatus']==1)) {
	                    echo "Active";
                    }

                    if(($row['userStatus']==0) && ($row['doctorStatus']==1)) {
	                    echo "Cancel by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0)) {
	                    echo "Cancel by Doctor";
                    }

                ?>
                </td>
				<td class="text-center">
					<div class="visible-md visible-lg hidden-sm hidden-xs">
                    <?php 
                        if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { 
                            echo "No Action yet";
	                    } else {
		                    echo "Canceled";
                        } 
                    ?>
					</div>
                                                
                    <div class="visible-xs visible-sm hidden-md hidden-lg">
						<div class="btn-group" dropdown is-open="status.isopen">
							<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
								<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right dropdown-light" role="menu">
								<li><a href="#">Edit</a></li>
								<li><a href="#">Share</a></li>
								<li><a href="#">Remove</a></li>
							</ul>
						</div>
                    </div>
                </td>
			</tr>
			<?php 
                $cnt=$cnt+1;
            }
            ?>
	    	</tbody>
	    </table>
    </div>
</div>
