
<!--
	Filename			:	addMedicines.php
	Description			:	Module responsible for adding new medicines.
	Author				:	B P likith Sai
-->

<?php

    include('../../include/config.php');
    include('../../include/checklogin.php');

    error_reporting(E_ALL);


     if(isset($_POST['submit'])) {   
        $med_name = $_POST["med_name"];
        $med_gen_name = $_POST["med_gen_name"];
        $med_category = $_POST["med_category"];
        $med_strength = $_POST["med_strength"];
        $med_self = $_POST["med_self"];
        $med_description = $_POST["med_description"];
        $med_manufacturer_name = $_POST["med_manufacturer_name"];
        $med_expiry_date = $_POST["med_expiry_date"];
        $med_sell_price = $_POST["med_sell_price"];
        $med_pur_price = $_POST["med_pur_price"];
        $med_pur_qty = $_POST["med_pur_qty"];

        $sql=mysqli_query($con,"insert into tblpharmamedicines(medicine_name, medicine_generic_name, medicine_category, medicine_description, medicine_shelf, medicine_quantity, medicine_expiry_date, medicine_selling_price, medicine_manufacturer_price, medicine_company, medicine_strength) values('$med_name', '$med_gen_name', '$med_category', '$med_description', '$med_self', '$med_pur_qty', '$med_expiry_date', '$med_sell_price', '$med_pur_price', '$med_manufacturer_name', '$med_strength')");
        
        if($sql) {
            echo "<script>alert('Medicine added Successfully');</script>";
            echo "<script>window.location.href ='dashboard.php?page=addMedicines'</script>";
        }
    }

?>


<div class="wrap-content container" id="container">
    <div class="container-fluid container-fullw bg-white">

        <div class="row">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="doctorname">Medicine Name : </label>
                        <input type="text" name="med_name" class="form-control" required="true">
                    </div>
                    
                    <div class="col-md-6 form-group">
                        <label for="doctorname">Generic Name : </label>
                        <input type="text" name="med_gen_name" class="form-control" required="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="doctorname">Medicine Category : </label>
                        <select name="med_category" class="col-md-12 pl-0 pr-0 selectpicker" data-live-search="true">

                            <?php
                                $sql = mysqli_query($con, "SELECT * FROM tblpharmamedicinecategory");
                                while($row = mysqli_fetch_array($sql)) {
                            ?>
                                    <option data-tokens=<?php echo $row["medicine_cat_name"]; ?>><?php echo $row["medicine_cat_name"]; ?></option>
                            <?php
                                }
                            ?>
    					</select>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="doctorname">Medicine Strength : </label>
                        <input type="text" name="med_strength" class="form-control" required="true">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="doctorname">Medicine Self : </label>
                        <input type="text" name="med_self" class="form-control" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <label for="doctorname">Medicine Description : </label>
                    <textarea class="form-control" name="med_description" rows="10" cols="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="doctorname">Manufacturer Name : </label>
                    <select name="med_manufacturer_name" class="col-md-12 pl-0 pr-0 selectpicker" data-live-search="true">

                        <?php
                            $sql = mysqli_query($con, "SELECT * FROM tblpharmamanufacturer");
                            while($row = mysqli_fetch_array($sql)) {
                        ?>
                                <option data-tokens=<?php echo $row["manufacturer_name"]; ?>><?php echo $row["manufacturer_name"]; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="doctorname">Expiry Date : </label>
                    <input type="date" name="med_expiry_date" class="form-control" required="true">
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="doctorname">Selling Price : </label>
                        <input type="number" name="med_sell_price" class="form-control" required="true">
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="doctorname">Purchase Price : </label>
                        <input type="number" name="med_pur_price" class="form-control" required="true">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="doctorname">Purchase Quantity : </label>
                        <input type="number" name="med_pur_qty" class="form-control" required="true">
                    </div>
                </div>

                <button type="submit" name="submit" id="submit" class="col-md-12 btn btn-primary btn-purple">Submit</button>
            </form>
        </div>

    </div>
</div>



