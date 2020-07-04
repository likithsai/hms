
<!--
	Filename			:	addManufacturer.php
	Description			:	Module responsible for adding new manufacturer details.
	Author				:	B P likith Sai
-->

<?php

    include('../../include/config.php');
    include('../../include/checklogin.php');

    error_reporting(E_ALL);


     if(isset($_POST['submit'])) {   
        $manufacturer_name = $_POST["manufacturer_name"];
        $manufacturer_mobile = $_POST["manufacturer_mobile"];
        $manufacturer_address = $_POST["manufacturer_address"];

        $sql=mysqli_query($con,"insert into tblpharmamanufacturer(manufacturer_name, manufacturer_mobile, manufacturer_address) values('$manufacturer_name', '$manufacturer_mobile', '$manufacturer_address')");
        
            if($sql) {
                echo "<script>alert('Manufacturer added Successfully');</script>";
                echo "<script>window.location.href ='dashboard.php?page=addManufacturer'</script>";
            }
    }

?>


<div class="wrap-content container" id="container">
    <div class="container-fluid container-fullw bg-white">

        <div class="row">
            <form method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="doctorname">Manufacturer Name : </label>
                    <input type="text" name="manufacturer_name" class="form-control" required="true">
                </div>

                <div class="form-group">
                    <label for="doctorname">Manufacturer Mobile : </label>
                    <input type="number" name="manufacturer_mobile" class="form-control" required="true">
                </div>

                <div class="form-group">
                    <label for="doctorname">Manufacturer Address : </label>
                    <textarea class="form-control" name="manufacturer_address" rows="10" cols="10"></textarea>
                </div>

                <button type="submit" name="submit" id="submit" class="col-md-12 btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>



    