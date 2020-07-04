
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
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item">
					<div class="row">
						<div class="col-md-12 p-3 m-0 well">
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 11;
								$cYear = date("Y");
								 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 10;
								$cYear = date("Y");
											 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 9;
								$cYear = date("Y");

								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 8;
								$cYear = date("Y");
								 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
						</div>
					</div>
				</div>

				  <div class="item">
					<div class="row">
						<div class="col-md-12 p-3 m-0 well">
							<div class="col-md-3">
								<?php 

									// calendar module
									
									$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

									$cMonth = date("n") - 7;
									$cYear = date("Y");
									 
									$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
									$maxday = date("t", $timestamp);
									$thismonth = getdate($timestamp);
									$startday = $thismonth['wday'];
									
									echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
									echo "<tr align=\"center\">";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "</tr>";
									echo "<tr>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "</tr>";

									for ($i = 0; $i < ($maxday + $startday); $i++) {
										if (($i % 7) == 0 ) echo "<tr>";
										if ($i < $startday) 
											echo "<td></td>";
										else 
											echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
										if (($i % 7) == 6 ) echo "</tr>";
									}
									
									echo "</table>";
								?>
							</div>
								
								
								
							<div class="col-md-3">
								<?php 

									// calendar module
									
									$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

									$cMonth = date("n") - 6;
									$cYear = date("Y");
												 
									$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
									$maxday = date("t", $timestamp);
									$thismonth = getdate($timestamp);
									$startday = $thismonth['wday'];
									
									echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
									echo "<tr align=\"center\">";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "</tr>";
									echo "<tr>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "</tr>";

									for ($i = 0; $i < ($maxday + $startday); $i++) {
										if (($i % 7) == 0 ) echo "<tr>";
										if ($i < $startday) 
											echo "<td></td>";
										else 
											echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
										if (($i % 7) == 6 ) echo "</tr>";
									}
									
									echo "</table>";
								?>
							</div>
								
								
								
							<div class="col-md-3">
								<?php 

									// calendar module
									
									$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

									$cMonth = date("n") - 5;
									$cYear = date("Y");

									$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
									$maxday = date("t", $timestamp);
									$thismonth = getdate($timestamp);
									$startday = $thismonth['wday'];
									
									echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
									echo "<tr align=\"center\">";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "</tr>";
									echo "<tr>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "</tr>";

									for ($i = 0; $i < ($maxday + $startday); $i++) {
										if (($i % 7) == 0 ) echo "<tr>";
										if ($i < $startday) 
											echo "<td></td>";
										else 
											echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
										if (($i % 7) == 6 ) echo "</tr>";
									}
									
									echo "</table>";
								?>
							</div>
								
								
								
							<div class="col-md-3">
								<?php 

									// calendar module
									
									$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

									$cMonth = date("n") - 4;
									$cYear = date("Y");
									 
									$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
									$maxday = date("t", $timestamp);
									$thismonth = getdate($timestamp);
									$startday = $thismonth['wday'];
									
									echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
									echo "<tr align=\"center\">";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
									echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
									echo "</tr>";
									echo "<tr>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
									echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
									echo "</tr>";

									for ($i = 0; $i < ($maxday + $startday); $i++) {
										if (($i % 7) == 0 ) echo "<tr>";
										if ($i < $startday) 
											echo "<td></td>";
										else 
											echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
										if (($i % 7) == 6 ) echo "</tr>";
									}
									
									echo "</table>";
								?>
							</div>
						</div>
					</div>
				  </div>
			
			  <div class="item active">
				<div class="row">
						<div class="col-md-12 p-3 m-0 well">
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 3;
								$cYear = date("Y");
								 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 2;
								$cYear = date("Y");
											 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n") - 1;
								$cYear = date("Y");

								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
							
							
							
							<div class="col-md-3">
							<?php 

								// calendar module
								
								$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

								$cMonth = date("n");
								$cYear = date("Y");
								 
								$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
								$maxday = date("t", $timestamp);
								$thismonth = getdate($timestamp);
								$startday = $thismonth['wday'];
								
								echo "<table class=\"table table-condensed mb-0\" style=\"border-collapse: collapse;\">";
								echo "<tr align=\"center\">";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "<th class=\"text-center\" colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
								echo "<th class=\"text-center\" colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
								echo "</tr>";
								echo "<tr>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
								echo "<th class=\"text-center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
								echo "</tr>";

								for ($i = 0; $i < ($maxday + $startday); $i++) {
									if (($i % 7) == 0 ) echo "<tr>";
									if ($i < $startday) 
										echo "<td></td>";
									else if ($i == date("d"))
										echo "<td align='center' valign='middle' height='20px' style='background-color: yellow;'><a href='?page=manageInvoice&day=" . ($i - $startday + 1) . "'>". ($i - $startday + 1) . "</a></td>";
									else 
										echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
									if (($i % 7) == 6 ) echo "</tr>";
								}
								
								echo "</table>";
							?>
							</div>
						</div>
					</div>
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>

		
			
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