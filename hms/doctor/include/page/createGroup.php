<?php
	$msg = "";
	
	if( isset($_POST['submit']) ) {	
		$group_name = $_POST['group_name'];
		$group_desc = $_POST['group_desc'];
		
		$sql = mysqli_query($con, "INSERT INTO tblgroups (group_name, group_desc, group_creator_id) VALUES ('$group_name', '$group_desc', 1)");
		if($sql) {
            $msg = "Group Created Sucessfully";
        }
		
		echo mysqli_error($con);
	}
?>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog" style="margin: 100px auto;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Group</h4>
      </div>

	  <form role="form" name="" method="POST">
		  <!-- Modal body -->
		  <div class="modal-body">
			<div class="form-group">
				<label for="email">Enter Group Name: </label>
				<input type="text" name="group_name" class="form-control" placeholder="Enter Group Name">
			</div>
			
			<div class="form-group">
				<label for="email">Enter Group Name: </label>
				<textarea name="group_desc" class="form-control" rows="5" placeholder="Enter Description"></textarea>
			</div>
		  </div>

		  <!-- Modal footer -->
		  <div class="modal-footer">
			<button type="submit" name="submit" id="submit"  class="btn btn-info">Submit</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
	  </form>

    </div>
  </div>
</div>

<div class="wrap-content container" id="container">
	<?php
					
		if( !empty( $msg ) ) {
			echo "<div class=\"alert alert-success text-center\">";
			echo "<strong>" . $msg ."</strong>";
			echo "</div>";
		}
	?>
	
	<div class="container-fluid container-fullw bg-white">
        <div class="row">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create Group</button>    
        </div>
    </div>
	
	<div class="container container-fullw bg-white">
		<table class="table table-hover table-striped" id="sample-table-1">
            
            <tbody>
            <?php
                $sql=mysqli_query($con,"SELECT * from tblgroups WHERE group_creator_id = 1");
                $cnt=1;

                while($row = mysqli_fetch_array($sql)) {
            ?>

				<tr style = "background: white !important; border: 1px solid #ccc;">
					<td class="text-center" style="background: #f1f1f1 !important;"><?php echo $cnt;?>.</td>
					<td class="text-left"><?php echo $row['group_name'] . "\n" . $row['group_desc'];?></td>
					<td class="text-center">
						<div class="visible-md visible-lg hidden-sm hidden-xs">
							<a href="dashboard.php?page=editDoctorSpecialization&id=<?php echo $row['group_id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="dashboard.php?page=doctorSpecialization&id=<?php echo $row['group_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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