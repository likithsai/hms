<?php
    session_start();
    error_reporting(0);
    include('../../../include/config.php');
	
    if(isset($_GET['cancel'])) {
        mysqli_query($con,"update appointment set doctorStatus='0' where id ='".$_GET['id']."'");
        $_SESSION['msg']="Appointment canceled !!";
	}
?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reschedule</h4>
      </div>
      <div class="modal-body">
        <?php include('reschedule.php'); ?>
      </div>
    </div>

  </div>
</div>

<div class="row">
	
	<div class="col-md-12 p-0">
		<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
									
        <table class="table table-hover table-striped padding-left-10" id="sample-table-1">
		    <thead>
				<tr class="row">
					<th class="text-center btn-purple" style="color: white;">#</th>
					<th class="text-center btn-purple" style="color: white;">Patient  Name</th>
					<th class="text-center btn-purple" style="color: white;">Specialization</th>
					<th class="text-center btn-purple" style="color: white;">Appointment Date / Time </th>
					<th class="text-center btn-purple" style="color: white;">Appointment Creation Date  </th>
					<th class="text-center btn-purple" style="color: white;">Current Status</th>
					<th class="text-center btn-purple" style="color: white;">Action</th>							
				</tr>
			</thead>
			
            <tbody>
            <?php
                $sql=mysqli_query($con,"select users.fullName as fname,appointment.*  from appointment join users on users.id=appointment.userId where appointment.doctorId='".$_SESSION['id']."'");
                $cnt=1;

                while($row=mysqli_fetch_array($sql)) {
            ?>

				    <tr class="row">
						<td class="center"><?php echo $cnt;?>.</td>
						<td class="hidden-xs"><?php echo $row['fname'];?></td>
						<td><?php echo $row['doctorSpecialization'];?></td>
						<td><?php echo $row['appointmentDate'];?> / <?php echo $row['appointmentTime'];?></td>
						<td><?php echo $row['postingDate'];?></td>
						<td>
                        <?php 
                            if(($row['userStatus']==1) && ($row['doctorStatus']==1)) {
	                            echo "Active";
                            }

                            if(($row['userStatus']==0) && ($row['doctorStatus']==1)) {
	                            echo "Cancel by Patient";
                            }

                            if(($row['userStatus']==1) && ($row['doctorStatus']==0)) {
	                            echo "Cancel by you";
                            }
                        ?>
                        </td>
						<td>
							<div class="text-center visible-md visible-lg hidden-sm hidden-xs">
                            <?php 
                                if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { 
                            ?>		
                                  <a href="appointment-history.php?id=<?php echo $row['id']?>" class="btn btn-transparent btn-xs tooltips" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['id']; ?>">Reschedule</a><span> | </span>				
	                                <a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')" class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
                            <?php 
                                } else {
                                    echo "Canceled";
                                } 
                            ?>
                        </td>
                    </tr>	
                    <?php 
                        $cnt=$cnt+1;
					}?>
				</tbody>
			</table>
		</div>
	</div>

</div>