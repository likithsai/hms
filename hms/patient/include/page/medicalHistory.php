<?php
    session_start();
    error_reporting(0);
    include('../../include/config.php');
    include('../../include/checklogin.php');
    // check_login();
?>


<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-striped" id="sample-table-1">
                    <thead>
                        <tr>
                            <th class="text-center btn-purple" style="color: white;">#</th>
                            <th class="text-center btn-purple" style="color: white;">Patient Name</th>
                            <th class="text-center btn-purple" style="color: white;">Patient Contact Number</th>
                            <th class="text-center btn-purple" style="color: white;">Patient Gender </th>
                            <th class="text-center btn-purple" style="color: white;">Creation Date </th>
                            <th class="text-center btn-purple" style="color: white;">Updation Date </th>
                            <th class="text-center btn-purple" style="color: white;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $uid=$_SESSION['id'];
                            $sql=mysqli_query($con,"select tblpatient.* from tblpatient join users on users.email=tblpatient.PatientEmail where users.id='$uid'");
                            $cnt=1;
                            while($row=mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $cnt;?>.</td>
                            <td class="text-center"><?php echo $row['PatientName'];?></td>
                            <td class="text-center"><?php echo $row['PatientContno'];?></td>
                            <td class="text-center"><?php echo $row['PatientGender'];?></td>
                            <td class="text-center"><?php echo $row['CreationDate'];?></td>
                            <td class="text-center"><?php echo $row['UpdationDate'];?></td>
                            <td class="text-center">
                                <a href="view-medhistory.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>
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
</div>