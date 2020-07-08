
<!--
	Filename			:	newInvoice.php
	Description			:	Module responsible for invoice billing
	Author				:	B P likith Sai
-->

<?php

    //include('../../include/config.php');
	
	// create invoice when user clicks on the submit button
    if(isset($_POST['submit'])) {  
		for( $i = 0; $i < count($_POST['item']); $i++ ) {
			
			$invoice_number = $_POST["invoice_number"];
			$item_name = $_POST["item"][$i];
			$invoice_customer_name = $_POST['customer_name'];
			$item_qty = $_POST["qty"][$i];
			$item_price = $_POST["price"][$i];
			$item_discount = $_POST["discount"][$i];
			$item_total = $_POST["total"][$i];
			$item_date = $_POST["date"];
			
			$sql = mysqli_query($con, "INSERT INTO tblpharmainvoice(invoice_number, invoice_item_name, invoice_item_customer_name, invoice_item_qty, invoice_item_price, invoice_item_discount, invoice_item_total, invoice_item_date) VALUES('$invoice_number', '$item_name', '$invoice_customer_name', '$item_qty', '$item_price', '$item_discount', '$item_total', '$item_date')");
			
            if($sql) {
				$row = mysqli_fetch_array( mysqli_query($con, "SELECT * FROM tblpharmamedicines WHERE medicine_name='$item_name'") );
				$remaining_item = $row['medicine_quantity'] - $item_qty;
				$sql = mysqli_query($con, "UPDATE tblpharmamedicines SET medicine_quantity = '$remaining_item' WHERE medicine_name='$item_name'");
				
				if($sql) {
				} else {
					echo("Error description: " . mysqli_error($con));
				}
			
                echo "<script>alert('Invoice added Successfully');</script>";
                echo "<script>window.location.href ='dashboard.php?page=newInvoice'</script>";
            } else {
				echo("Error description: " . mysqli_error($con));
			}
			
			
		}
    }


    $selectbox = "";
    $sql = mysqli_query($con, "SELECT * FROM tblpharmamedicines");
    while($row = mysqli_fetch_array($sql)) {
        $selectbox = $selectbox ."<option value=\"". $row["medicine_name"] ."\">" . $row["medicine_name"] . "</option>";
    }
    
?>

<script type="text/javascript">
    $(function() {
		var i = 1;
		
        $("#add_row").click(function() {
            var markup = `<tr class="text-center" id="td`+ (i+1) +`" bgcolor="#f1f1f1">
							<td>` + (++i) + `</td>
							<td width="400">
								<select class="form-control itemMedicines" name="item[]" id="`+ (i) +`">
								<?php echo $selectbox; ?>
								</select>
							</td>
                            <td width="120"><input type="text" style="text-align: right;" name="batch[]" width="20" class="form-control batch`+ (i) +`" readonly></td>
                            <td width="120"><input type="text" style="text-align: right;" name="ava_qty[]" width="20" class="form-control ava_qty`+ (i) +`" readonly></td>
                            <td width="120"><input type="number" style="text-align: right;" min="0" name="qty[]" value="0" width="20" placeholder="0" class="form-control qty`+ (i) +`" readonly></td>
                            <td width="120"><input type="text" style="text-align: right;" name="price[]" width="20" placeholder="0.00" class="form-control price`+ (i) +`" readonly></td>
                            <td width="120"><input type="number" style="text-align: right;" min="0" step="0.05" name="discount[]" width="20" placeholder="0.00" class="form-control discount`+ (i) +`" readonly></td>
                            <td width="120"><input type="number" style="text-align: right;" name="total[]" width="20" placeholder="0.00" class="form-control calcGrandTotal total`+ (i) +`" readonly></td>
                            <td class="text-center"><input type="button" class="btn btn-danger" value="X" id="delete_row"></td>
                          </tr>`;
            $("#invoice tbody").append(markup);
        });
		
		
        $("#invoice").on('click','#delete_row',function(){
            $(this).parent().parent().remove();
        });
		

		$("#invoice").on('change', '.itemMedicines', function(e) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "getMedicineDetails.php",
				data:'medicine='+ $(this).children("option:selected").val(),
				success: function(data){
					$(".batch" + e.target.id).val(data.shelf);
					$(".ava_qty" + e.target.id).val(data.qty);
					$(".price" + e.target.id).val(data.price);
					
					$(".qty" + e.target.id).attr("max", data.qty);
					$(".qty" + e.target.id).removeAttr('readonly');
					$(".discount" + e.target.id).removeAttr('readonly');
					
					$(".qty" + e.target.id + ", .discount" + e.target.id).on('keyup change',function(){
						$total = $(".price" + e.target.id).val() * $(".qty" + e.target.id).val();
						$total_with_discount = $total - ($total * $(".discount" + e.target.id).val()/100);
						
						$(".total" + e.target.id).val($total_with_discount);
						
						total=0.00;
						$(".calcGrandTotal").each(function() {
							total += isNaN(parseFloat($(this).val())) ? parseFloat('0.00') : parseFloat($(this).val());
						});
						
						$(".total_final").text(total.toFixed(2));
					});		
				}
			});
		});		
    });
</script>

<form action="" method="POST" role="form" novalidate="">
	<div class="wrap-content container" id="container">
		<div class="container-fluid container-fullw bg-white">

			<div class="row">
				<form method="POST">
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="doctorname">Invoice Number : </label>
							<input type="text" name="invoice_number" class="form-control" value="<?php echo time(); ?>" readonly>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="doctorname">Customer Name : </label>
							<input type="text" name="customer_name" class="form-control" required>
						</div>

						<div class="col-md-6 form-group">
							<label for="doctorname">Date : </label>
							<input type="date" name="date" class="form-control" required="true" value="<?php echo date("Y-m-j"); ?>" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered" id="invoice">
								<thead>
									<tr class="info">
										<th class="text-center">#</th>
										<th width="300" class="text-center">Item</th>
										<th class="text-center">Batch</th>
										<th class="text-center">Ava.Qty</th>
										<th class="text-center">Qty</th>
										<th class="text-center">Price</th>
										<th class="text-center">Discount %</th>
										<th class="text-center">Total</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								
								<tbody>
									<tr bgcolor="#f1f1f1">
										<td class="text-center">1</td>
										<td width="400">
											<select class="form-control itemMedicines" id="1" name="item[]">
											<?php echo $selectbox; ?>
											</select>
										</td>
										<td width="120"><input type="text" style="text-align: right;" name="batch[]" width="20" class="form-control batch1" readonly></td>
										<td width="120"><input style="text-align: right;" type="text" name="ava_qty[]" width="20" class="form-control ava_qty1" readonly></td>
										<td width="120"><input type="number" style="text-align: right;" min="0" name="qty[]" width="20" value="0" placeholder="0" min="0" class="form-control qty1" readonly></td>
										<td width="120"><input type="text" style="text-align: right;" name="price[]" width="20" placeholder="0.00" class="form-control price1" readonly></td>
										<td width="120"><input type="number" style="text-align: right;" name="discount[]" min="0" step="0.05" width="20" placeholder="0.00" class="form-control discount1" readonly></td>
										<td width="120"><input type="number" style="text-align: right;" name="total[]" width="20" placeholder="0.00" class="form-control calcGrandTotal total1" readonly></td>
										<td class="text-center">
											<input type="button" class="btn btn-primary" value="+" id="add_row">
										</td>
									</tr>

								</tbody>

								<tfoot>
									<tr class="success">
									  <td colspan="7" class="text-right"><b>Total</b></td>
									  <td colspan="2"><b class="total_final">0.00</b></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>


					<button type="submit" name="submit" id="submit" class="col-md-12 btn btn-primary">Submit</button>
				</form>
			</div>

		</div>
	</div>
</form>



