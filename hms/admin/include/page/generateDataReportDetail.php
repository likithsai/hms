<?php
    session_start();
    include( '../../include/config.php' );
?>

<div class="row">
    <div class="col-md-12">
        <?php
            $fdate = $_POST['fromdate'];
            $tdate = $_POST['todate'];
        ?>
		
		<div class="alert alert-info">
		  <h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
		</div>
	
        <table class="table table-hover table-striped" id="sample-table-1">
            <thead>
                <tr>
                    <th class="text-center" style="background: #007aff; color: white;">#</th>
                    <th class="text-center" style="background: #007aff; color: white;">Patient Name</th>
                    <th class="text-center" style="background: #007aff; color: white;">Patient Contact Number</th>
                    <th class="text-center" style="background: #007aff; color: white;">Patient Gender </th>
                    <th class="text-center" style="background: #007aff; color: white;">Creation Date </th>
                    <th class="text-center" style="background: #007aff; color: white;">Updation Date </th>
                    <th class="text-center" style="background: #007aff; color: white;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = mysqli_query($con, "select * from tblpatient where date(CreationDate) between '$fdate' and '$tdate'");
                $cnt = 1;
                while($row = mysqli_fetch_array( $sql )) {
            ?>
            <tr style = "background: white !important; border: 1px solid #ccc;">
                <td class="text-center" style="background: #f1f1f1 !important;"><?php echo $cnt; ?>.</td>
                <td class="text-center"><?php echo $row['PatientName'];?></td>
                <td class="text-center"><?php echo $row['PatientContno']; ?></td>
                <td class="text-center"><?php echo $row['PatientGender']; ?></td>
                <td class="text-center"><?php echo $row['CreationDate']; ?></td>
                <td class="text-center"><?php echo $row['UpdationDate']; ?></td>
                <td class="text-center">
                    <a href="view-patient.php?viewid=<?php echo $row['ID']; ?>"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            <?php 
			
                $cnt = $cnt + 1;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
