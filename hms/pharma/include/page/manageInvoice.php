
<!--
	Filename			:	manageInvoice.php
	Description			:	Module responsible for viewing sent mail.
	Author				:	B P likith Sai
-->


<?php
    session_start();
    error_reporting(0);
    include('../../../include/config.php');

    if(isset($_GET['cancel'])) {
        mysqli_query($con,"update appointment set doctorStatus='0' where id ='".$_GET['id']."'");
        $_SESSION['msg']="Appointment canceled !!";
	}
?>




<div class="wrap-content container" id="container">
    <div class="container-fluid container-fullw bg-white p-0">	
			<div class="col-md-12 m-2">
				<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p>	
			
					<?php
						$sql=mysqli_query($con,"SELECT * FROM tblpharmainvoice GROUP BY invoice_number");
						while($row=mysqli_fetch_array($sql)) {
					?>
					
					<div class="panel-group mt-2 mb-0">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title" data-toggle="collapse" href="#collapse<?php echo $cnt;?>">
								<div class="row">
									<div class="col-xs-3 col-sm-9 col-lg-9">
										<b><?php echo $row['invoice_number']; ?></b>
										<br /><small><u>Date</u> : <?php echo $row['invoice_item_date']; ?></small>
									</div>
									<div class="col-xs-6 col-sm-3 col-lg-3 text-center">
										<div class="text-center" style="list-style: none; display: flex;">
											<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Print</a>
											&nbsp;<a href="#" class="col-md-6 btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Remove</a>
										</div>
									</div>
								</div>
							</h4>
						</div>
							
						<div id="collapse<?php echo $cnt; ?>" class="panel-collapse collapse">
							<div class="panel-body p-0">	  
								<ul class="list-group mb-0">
								  <li class="list-group-item">
									<b><u style="color: #000;">Invoice Customer Name: </u></b>
									<p>
										<?php
											$inv_no = $row['invoice_number'];
											$sqlinner = mysqli_query($con, "SELECT * FROM tblpharmainvoice WHERE invoice_number='$inv_no'");
											while($row1 = mysqli_fetch_array($sqlinner)) {
												echo $row1['invoice_item_customer_name'] . "<br />";
											}
										?>
									</p>
								  </li>
								  
								  <li class="list-group-item">
									<p>
										<div class="row">
										<div class="col-md-3 text-center"><b><u style="color: #000;">Item Name</b></u></div>
										<div class="col-md-3 text-center"><b><u style="color: #000;">Quantity</b></u></div>
										<div class="col-md-3 text-center"><b><u style="color: #000;">Price</b></u></div>
										<div class="col-md-3 text-center"><b><u style="color: #000;">Discount</b></u></div>
										</div>
												
										<?php
											$inv_no = $row['invoice_number'];
											$sqlinner = mysqli_query($con, "SELECT * FROM tblpharmainvoice WHERE invoice_number='$inv_no'");
											while($row1 = mysqli_fetch_array($sqlinner)) {												
												echo "<div class=\"row\">";
												echo "<div class=\"col-md-3 text-center\">" . $row1['invoice_item_name'] . "</div>";
												echo "<div class=\"col-md-3 text-center\">" . $row1['invoice_item_qty'] . "</div>";
												echo "<div class=\"col-md-3 text-center\">" . $row1['invoice_item_price'] . "</div>";
												echo "<div class=\"col-md-3 text-center\">" . $row1['invoice_item_discount'] . "</div>";
												echo "</div>";
											}
										?>
									</p>
								  </li>
								  
								  <li class="list-group-item">
									<b><u style="color: #000;">Invoice Date: </u></b>
									<p>
										<?php
											$inv_no = $row['invoice_number'];
											$sqlinner = mysqli_query($con, "SELECT * FROM tblpharmainvoice WHERE invoice_number='$inv_no'");
											while($row1 = mysqli_fetch_array($sqlinner)) {
												echo $row1['invoice_item_date'] . "<br />";
											}
										?>
									</p>
								  </li>
								</ul>
							</div>
						</div>
					</div>
					
					<?php 
						$cnt=$cnt+1;
					}?>
				</div>
			</div>

		</div>
	</div>
</div>