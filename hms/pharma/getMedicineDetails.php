<?php
	// Filename				:	getMedicineDetails.php
	// Description			:	API Module responsible for getting medicine details.
	// Author				:	B P likith Sai

	include( '../include/config.php' );
	
	
	if( !empty( $_POST["medicine"] ) ) {
	
		$sql = mysqli_query($con, "SELECT * FROM tblpharmamedicines WHERE medicine_name='".$_POST['medicine']."'");
 
		while($row = mysqli_fetch_array($sql)) { 
	
			$medicine = array( 
				"shelf" => $row['medicine_shelf'], 
				"qty" => $row['medicine_quantity'],
				"price" => $row['medicine_manufacturer_price']
			);
	
			echo json_encode($medicine);
		
		}
		
	}
?>
