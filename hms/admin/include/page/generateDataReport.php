<?php
    session_start();
    include( '../../include/config.php' );
?>

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="panel no-radius box-shadow panel-white" style="border: 1px solid #ccc;">
					<div class="panel-body">
						<form role="form" method="post">
							<div class="col-md-6 form-group">
								<label for="exampleInputPassword1">From Date:</label>
					            <input type="date" class="form-control" name="fromdate" id="fromdate" value="" required='true'>
							</div>
		
							<div class="col-md-6 form-group">
							    <label for="exampleInputPassword1">To Date:</label>
					            <input type="date" class="form-control" name="todate" id="todate" value="" required='true'>
							</div>	
														
							<button type="submit" name="submit" id="submit" class="col-md-12 margin-top-20 btn btn-o btn-primary btn-purple">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<div class="row container">
    <?php
        if( isset( $_POST['submit'] ) ) {
		
            include( 'generateDataReportDetail.php' );
			
        }
    ?>
</div>