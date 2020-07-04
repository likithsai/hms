<!--
	Filename			:	addCustomers.php
	Description			:	Module responsible for creating new customers
	Author				:	B P likith Sai
-->

<?php
    include('../../include/config.php');
    include('../../include/checklogin.php');

    if(isset($_POST['submit'])) {   
        if(!empty($_FILES["image"]["name"])) { 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            // Allow certain file formats 
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
            }
        }

        $cus_name = $_POST['cus_name'];
        $cus_email = $_POST['cus_email'];
        $cus_address = $_POST['cus_address'];
        $cus_phone = $_POST['cus_phone'];
        $sql=mysqli_query($con, "INSERT INTO tblpharmacustomer(customer_name, customer_email, customer_address, customer_phone, customer_image) VALUES ('$cus_name', '$cus_email', '$cus_address', '$cus_phone', '$imgContent')");
    
        if($sql) {
            echo "<script>alert('customer added Successfully');</script>";
            echo "<script>window.location.href ='dashboard.php?page=manageCustomer'</script>";
        }
    }
?>


<div class="wrap-content container" id="container">
    <div class="container-fluid container-fullw bg-white">

        <div class="row">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="doctorname">Customer Name : </label>
                    <input type="text" name="cus_name" class="form-control" required="true">
                </div>
                
                <div class="form-group">
                    <label for="doctorname">Customer Email : </label>
                    <input type="email" name="cus_email" class="form-control" required="true">
                </div>

                <div class="form-group">
                    <label for="doctorname">Customer Address : </label>
                    <textarea class="form-control" name="cus_address" rows="10" cols="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="doctorname">Customer Phone : </label>
                    <input type="number" name="cus_phone" class="form-control" required="true">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Profile Pic</label>
                    <input type="file" name="image" class="form-control"  placeholder="Upload File" required="required">
                </div>

                <button type="submit" name="submit" id="submit" class="col-md-12 btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>