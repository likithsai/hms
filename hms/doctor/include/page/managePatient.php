<?php
    //session_start();
    //error_reporting(0);
    //include('../../include/config.php');
    //include('../../include/checklogin.php');
    // check_login();
?>



<!-- Edit Patient -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div class="row">
    <div class="col-md-12">
       
        <table class="table table-hover table-striped" id="sample-table-1">
            <thead>
                <tr>
                    <th class="text-center btn-purple" style="color: white;">#</th>
                    <th class="text-center btn-purple" style="color: white;">Patient Name</th>
                    <th class="text-center btn-purple" style="color: white;">Patient Contact Number</th>
                    <th class="text-center btn-purple" style="color: white;">Patient Gender</th>
                    <th class="text-center btn-purple" style="color: white;">Creation Date </th>
                    <th class="text-center btn-purple" style="color: white;">Updation Date </th>
                    <th class="text-center btn-purple" style="color: white;">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $docid=$_SESSION['id'];
                    $sql=mysqli_query($con,"select * from tblpatient where Docid='$docid' ");
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
                        <a href="edit-patient.php?editid=<?php echo $row['ID'];?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a> || <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>
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
