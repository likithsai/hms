<?php
    session_start();
    include('../../include/config.php');

	$msg = "";
	
    if(isset($_POST['submit'])) {
	
        $sql = mysqli_query($con,"insert into doctorSpecilization(specilization) values('".$_POST['doctorspecilization']."')");
		$msg = "Doctor Specialization added!";
    
	}

    if(isset($_GET['del'])) {
	
		mysqli_query($con,"delete from doctorSpecilization where id = '".$_GET['id']."'");
        $msg = "Data deleted!";
    
	}
?>

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
				
				
				<div class="panel panel-white no-radius box-shadow" style="border: 1px solid #ccc;">
					<div class="panel-body">
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
						<form role="form" name="dcotorspcl" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Add New Specialization</label>
							    <input type="text" name="doctorspecilization" class="form-control"  placeholder="Enter Doctor Specialization">
							</div>
                            
                            <button type="submit" name="submit" class="btn btn-o btn-primary btn-purple">Add Specialization</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-striped" id="sample-table-1">
			<thead>
				<tr>
					<th class="text-center" style="background: #776bab; color: white;">#</th>
				    <th class="text-center" style="background: #776bab; color: white;">Specialization</th>
				    <th class="text-center" style="background: #776bab; color: white;">Creation Date</th>
					<th class="text-center" style="background: #776bab; color: white;">Updation Date</th>
					<th class="text-center" style="background: #776bab; color: white;">Action</th>
				</tr>
			</thead>
            
            <tbody>
            <?php
                $sql=mysqli_query($con,"select * from doctorSpecilization");
                $cnt=1;

                while($row=mysqli_fetch_array($sql)) {
            ?>

				<tr style = "background: white !important; border: 1px solid #ccc;">
					<td class="text-center" style="background: #f1f1f1 !important;"><?php echo $cnt;?>.</td>
					<td class="text-center"><?php echo $row['specilization'];?></td>
					<td class="text-center"><?php echo $row['creationDate'];?></td>
					<td class="text-center"><?php echo $row['updationDate'];?></td>
					<td class="text-center">
						<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="dashboard.php?page=editDoctorSpecialization&id=<?php echo $row['id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="dashboard.php?page=doctorSpecialization&id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
						</div>
                                                
                        <div class="visible-xs visible-sm hidden-md hidden-lg">
							<div class="btn-group" dropdown is-open="status.isopen">
								<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
									<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
								</button>
                                                        
                                <ul class="dropdown-menu pull-right dropdown-light" role="menu">
									<li>
										<a href="#">Edit</a>
									</li>
                                                            
                                    <li>
										<a href="#">Share</a>
									</li>
                                    
                                    <li>
										<a href="#">Remove</a>
									</li>
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