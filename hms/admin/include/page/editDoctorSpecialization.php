<?php
    session_start();
    include( '../../include/config.php' );
    
    $id = intval( $_GET['id'] );// get value
    if( isset( $_POST['submit'] ) ) {
        
		$docspecialization = $_POST['doctorspecilization'];
        $sql = mysqli_query($con, "update  doctorSpecilization set specilization='$docspecialization' where id='$id'");
        $_SESSION['msg'] = "Doctor Specialization updated successfully !!";
    
	} 
?>

<div class="row">
	<div class="col-md-12">
        <div class="row margin-top-30">
		    <div class="col-lg-6 col-md-12">
			    <div class="panel panel-white" style="border: 1px solid #ccc;">
			        <div class="panel-body">
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
						<form role="form" name="dcotorspcl" method="post" >
							<div class="form-group">
							    <label for="exampleInputEmail1">Edit Doctor Specialization</label>

	                            <?php 
                                    $id = intval($_GET['id']);
	                                $sql = mysqli_query($con, "select * from doctorSpecilization where id='$id'");

                                    while($row=mysqli_fetch_array($sql)) {														
                                ?>		
                                        <input type="text" name="doctorspecilization" class="form-control" value="<?php echo $row['specilization'];?>" >
                                <?php 
                                    } 
                                ?>
							</div>
														
							<button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
