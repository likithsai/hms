<?php
    session_start();
    //include( '../../include/config.php' );

	$msg = "";
	
    if( isset( $_GET['del'] ) ) {
	
	    mysqli_query( $con, "delete from users where id = '".$_GET['id']."'" );
        $msg = "data deleted !!";
    
	}
?>


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