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
	
	<div class="row">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create Group</button>    
	</div>
	
	<div class="row" style="margin-top: 10px;">

		

		<?php
            $sql=mysqli_query($con, "SELECT * from tblgroups WHERE group_creator_id = 1");

            while($row = mysqli_fetch_array($sql)) {
        ?>
		
		<div class="card col-md-4">
		  <div class="card-body">
			<h4 class="card-title"><i class="fa fa-group"></i> <?php echo $row['group_name']; ?></h4>
			<p class="card-text text-justify">
				<?php echo $row['group_desc']; ?>
				<p><i class="fa fa-link" aria-hidden="true"></i> <a href="" class="alert-success" target="_blank">https://www.google.com/ascjbascbahs</a><br /></p>
			</p>

			<a href="#" style="padding: 5px;"><i class="fa fa-user"></i> Add Users</a> | 
			<a href="#" style="padding: 5px;"><i class="fa fa-edit"></i> Edit</a> | 
			<a href="#" style="padding: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
		  </div>
		</div>
		
		<?php 
            }
        ?>

	</div>

</div>