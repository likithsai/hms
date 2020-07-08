
<!--
	Filename			:	medicineCategory.php
	Description			:	Module responsible for creating and managing new medicines category
	Author				:	B P likith Sai
-->

<?php

    //include('../../include/config.php');

    if(isset($_POST['submit'])) {
        $sql=mysqli_query($con,"INSERT INTO tblpharmamedicinecategory(medicine_cat_name) VALUES('".$_POST['medical_category']."')");
        $_SESSION['msg']="Medical Category added successfully !!";
    }

    if(isset($_GET['del'])) {
		mysqli_query($con, "DELETE FROM tblpharmamedicinecategory WHERE medicine_cat_id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
    }


?>



<div class="row container padding-bottom-0">
	<div class="col-md-12">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="panel panel-white no-radius box-shadow" style="margin-top: 10px;">
					<div class="panel-body">
						<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
						<form role="form" name="dcotorspcl" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Add Medicine Category</label>
							    <input type="text" name="medical_category" class="form-control"  placeholder="Enter Medical Category">
							</div>
                            
                            <button type="submit" name="submit" class="col-md-12 btn btn-primary btn-purple">Add Medicine Category</button>
						</form>
					</div>
				</div>
				
				<div class="panel panel-white no-radius box-shadow">
					<div class="panel-body">
						<div class="col-md-12">
							<table class="table table-hover table-striped" id="sample-table-1">
								<thead>
									<tr>
										<th class="center">#</th>
										<th>Specialization</th>
										<th>Action</th>
									</tr>
								</thead>
								
								<tbody>
								<?php
									$sql = mysqli_query($con, "SELECT * FROM tblpharmamedicinecategory");
									$cnt = 1;

									while($row = mysqli_fetch_array($sql)) {
								?>

									<tr>
										<td class="center"><?php echo $cnt; ?>.</td>
										<td class="hidden-xs"><?php echo $row['medicine_cat_name'];?></td>
										<td>
											<div class="visible-md visible-lg hidden-sm hidden-xs">
												<a href="dashboard.php?page=medicineCategory&id=<?php echo $row['medicine_cat_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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
				</div>
			</div>
		</div>
	</div>
</div>
