<style type="text/css">
	td { padding: 5px; text-align: center; }
	th { padding: 5px; }
</style>

<?php 

	$monthNames = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

	if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
	if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

	$cMonth = $_REQUEST["month"];
	$cYear = $_REQUEST["year"];
	 
	$prev_year = $cYear;
	$next_year = $cYear;
	$prev_month = $cMonth-1;
	$next_month = $cMonth+1;
	 
	if ($prev_month == 0 ) {
		$prev_month = 12;
		$prev_year = $cYear - 1;
	}
	if ($next_month == 13 ) {
		$next_month = 1;
		$next_year = $cYear + 1;
	}




	$timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
	$maxday = date("t", $timestamp);
	$thismonth = getdate($timestamp);
	$startday = $thismonth['wday'];
	
	echo "<table style=\"border-collapse: collapse;\">";
	echo "<tr align=\"center\">";
	echo "<th colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
	echo "<a style=\"color: orange; text-decoration: none;\" href=" . $_SERVER["PHP_SELF"] . "?month=" . $prev_month . "&year=" . $prev_year . "><<</a></th>";
	echo "<th colspan=\"5\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>" .$monthNames[$cMonth-1].' '.$cYear . "</strong></th>";
	echo "<th colspan=\"1\" bgcolor=\"#999999\" style=\"color:#FFFFFF\">";
	echo "<a style=\"color: orange; text-decoration: none;\" href=" . $_SERVER["PHP_SELF"] . "?month=" . $next_month . "&year=" . $next_year .">>></a>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>M</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>W</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>T</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>F</strong></th>";
	echo "<th align=\"center\" bgcolor=\"#999999\" style=\"color:#FFFFFF\"><strong>S</strong></th>";
	echo "</tr>";

	for ($i=0; $i<($maxday + $startday); $i++) {
		if(($i % 7) == 0 ) echo "<tr>";
		if($i < $startday) echo "<td></td>";
		else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
		if(($i % 7) == 6 ) echo "</tr>";
	}
	
	echo "</table>";
?>

