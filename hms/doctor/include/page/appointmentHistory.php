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
	<div class="col-md-2 padding-10">
	<?php 

		// calendar module
		
		$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

		if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
		if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

		$cMonth = $_REQUEST["month"];
		$cYear = $_REQUEST["year"];
		 
		$prev_year = $cYear;
		$next_year = $cYear;
		$prev_month = $cMonth-1;
		$next_month = $cMonth+1;
		 
		if ($prev_month == 0 ) {
			$prev_month = 12;
			$prev_year = $cYear - 1;
		}
		if ($next_month == 13 ) {
			$next_month = 1;
			$next_year = $cYear + 1;
		}




		$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
		$maxday = date("t", $timestamp);
		$thismonth = getdate($timestamp);
		$startday = $thismonth['wday'];
		
		echo "<table class=\"table table-condensed\" style=\"border-collapse: collapse;\">";
		echo "<tr align=\"center\">";
		echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\">";
		echo "<a style=\"color: orange; text-decoration: none;\" href=" . $_SERVER["PHP_SELF"] . "?page=appointmentHistory&month=" . $prev_month . "&year=" . $prev_year . "><<</a></th>";
		echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
		echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\">";
		echo "<a style=\"color: orange; text-decoration: none;\" href=" . $_SERVER["PHP_SELF"] . "?page=appointmentHistory&month=" . $next_month . "&year=" . $next_year .">>></a>";
		echo "</tr>";
		echo "<tr>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
		echo "<th class=\"text-center\" bgcolor=\"#007aff\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
		echo "</tr>";

		for ($i = 0; $i < ($maxday + $startday); $i++) {
			if(($i % 7) == 0 ) echo "<tr>";
			if($i < $startday) echo "<td></td>";
			else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
			if(($i % 7) == 6 ) echo "</tr>";
		}
		
		echo "</table>";
	?>

	</div>
	
	<div class="col-md-10 p-0">
		<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
									
        <table class="table table-hover table-striped padding-left-10" id="sample-table-1">
		    <thead>
				<tr class="row">
					<th class="text-center" style="background: #007aff; color: white;">#</th>
					<th class="text-center" style="background: #007aff; color: white;">Patient  Name</th>
					<th class="text-center" style="background: #007aff; color: white;">Specialization</th>
					<th class="text-center" style="background: #007aff; color: white;">Appointment Date / Time </th>
					<th class="text-center" style="background: #007aff; color: white;">Appointment Creation Date  </th>
					<th class="text-center" style="background: #007aff; color: white;">Current Status</th>
					<th class="text-center" style="background: #007aff; color: white;">Action</th>							
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