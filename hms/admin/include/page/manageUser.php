<?php
    session_start();
    //include( '../../include/config.php' );

	$msg = "";
	
    if( isset( $_GET['del'] ) ) {
	
	    mysqli_query( $con, "delete from users where id = '".$_GET['id']."'" );
        $msg = "data deleted !!";
    
	}



	// add user to database
	if( isset( $_POST['submit'] ) ) {

		$fname = $_POST['full_name'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$query = mysqli_query($con, "INSERT INTO users(fullname, address, city, gender, email, password) VALUES ('$fname', '$address', '$city', '$gender', '$email', '$password')");

		if($query) {
			$msg = "User Added !!";
		}
	
	}
?>



<!-- Create Specialization modal -->
<div class="modal" id="myModal">
	<form role="form" name="dcotorspcl" method="post">
		<div class="modal-dialog" style="margin: 100px auto;">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header btn-purple">
				<h4 class="modal-title" style="color: #fff;">Add Users</h4>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
					<div class="form-group col-md-6 pl-0 pr-0">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" name="full_name" class="form-control"  placeholder="Enter Name" />
					</div>

					<div class="form-group col-md-6 pr-0">
						<label for="exampleInputEmail1">Gender</label>
						<select name="gender" class="form-control">
							<option selected>Choose...</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Address</label>
						<textarea row="4" name="address" class="form-control"  placeholder="Enter Address" required="true"></textarea>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">City</label>
						<input type="text" name="city" class="form-control"  placeholder="Enter City" />
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="email" class="form-control"  placeholder="Enter Email" />
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" name="pwd" class="form-control"  placeholder="Enter Password" />
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Confirm Password</label>
						<input type="password" name="cpwd" class="form-control"  placeholder="Enter Password" />
					</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">      
				<button type="submit" name="submit" class="btn btn-o btn-primary btn-purple">Add Users</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</form>
</div>




<div class="row mb-4">
	<div class="col-md-8 text-left">
	<h1><b>Users</b></h1>
	</div>
	<div class="col-md-4 text-right">
		<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-o btn-primary btn-purple"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Add Users</button>
	</div>
</div>

<div>
		<?php
				
		if( !empty( $msg ) ) {
			echo "<div class=\"alert alert-success\">";
			echo "<strong>Success!</strong>" . $msg;
			echo "</div>";
		}
	
		?>
</div>

<div class="mt-1">

		<?php
            $sql=mysqli_query($con, "SELECT * FROM users");

            while($row = mysqli_fetch_array($sql)) {
        ?>
		
			<div class="card col-md-4">
				<div class="card-body">
					<h4 class="card-title"><?php echo $row['fullName'];?></h4>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['address'];?></h6>
					<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['email'];?></h6>
			 
					<a href="#"><i class="fa fa-edit"></i> Edit</a> | 
					<a href="dashboard.php?page=manageUser&id=<?php echo $row['id']?>&del=delete" onclick="return confirm('Are you sure you want to delete this item?');" style="padding: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
				</div>
			</div>
		
		<?php 
            }
        ?>

</div>