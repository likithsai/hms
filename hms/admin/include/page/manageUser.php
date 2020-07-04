<?php
    session_start();
    include( '../../include/config.php' );

	$msg = "";
	
    if( isset( $_GET['del'] ) ) {
	
	    mysqli_query( $con, "delete from users where id = '".$_GET['id']."'" );
        $msg = "data deleted !!";
    
	}
?>

<div class="row">
	<div class="col-md-12">
	
		<?php
				
		if( !empty( $msg ) ) {
			echo "<div class=\"alert alert-success\">";
			echo "<strong>Success!</strong>" . $msg;
			echo "</div>";
		}
	
		?>
		
		<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
		<table class="table table-hover table-striped" id="sample-table-1">
			<thead>
				<tr>
					<th class="text-center" style="background: #007aff; color: white;">#</th>
					<th class="text-center" style="background: #007aff; color: white;">Full Name</th>
					<th class="text-center" style="background: #007aff; color: white;">Adress</th>
					<th class="text-center" style="background: #007aff; color: white;">City</th>
					<th class="text-center" style="background: #007aff; color: white;">Gender </th>
					<th class="text-center" style="background: #007aff; color: white;">Email </th>
					<th class="text-center" style="background: #007aff; color: white;">Creation Date </th>
					<th class="text-center" style="background: #007aff; color: white;">Updation Date </th>
					<th class="text-center" style="background: #007aff; color: white;">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
     
				$sql = mysqli_query( $con, "select * from users" );
                $cnt = 1;
                while( $row = mysqli_fetch_array( $sql ) ) {
            
			?>

				<tr style = "background: white !important; border: 1px solid #ccc;">
				    <td class="text-center" style="background: #f1f1f1 !important;"><?php echo $cnt;?>.</td>
					<td class="text-center"><?php echo $row['fullName'];?></td>
					<td class="text-center"><?php echo $row['address'];?></td>
					<td class="text-center"><?php echo $row['city'];?></td>
                    <td class="text-center"><?php echo $row['gender'];?></td>
                    <td class="text-center"><?php echo $row['email'];?></td>
                    <td class="text-center"><?php echo $row['regDate'];?></td>
                    <td class="text-center"><?php echo $row['updationDate'];?></td>
                    <td class="text-center">
                        <div class="visible-md visible-lg hidden-sm hidden-xs">							
                            <a href="manage-users.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                        </div>
                                                    
                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                            <div class="btn-group" dropdown is-open="status.isopen">
                                <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
                                    <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                </button>
                                                            
                                <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Share</a></li>
                                    <li><a href="#">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
											
				<?php $cnt=$cnt+1; }?>								
			</tbody>
		</table>
	</div>
</div>