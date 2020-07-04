<?php
    session_start();
    error_reporting(0);
    include('../../include/config.php');
    include('../../include/checklogin.php');

    echo $_GET['id'] . "sample";
?>

<div class="row container">
    <form role="form" name="book" method="post" >
												
		<div class="form-group">
			<label for="AppointmentDate">Date</label>
			<input class="form-control datepicker" name="appdate" required="required" data-date-format="yyyy-mm-dd">
		</div>
																
		<div class="form-group">
		    <label for="Appointmenttime">Time</label>
			<input type="time" class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
		</div>														
																
		<button type="submit col-md-12" name="submit" class="btn btn-o btn-primary">Submit</button>
	
    </form>
</div>
