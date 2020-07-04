<?php
include('../include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($con,"select doctorName,id from doctors where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
  while($row=mysqli_fetch_array($sql)) {
 ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  
  <?php
}
}


if(!empty($_POST["doctor"])) 
{
    $sql=mysqli_query($con,"select * from doctors where id='".$_POST['doctor']."'");
    while($row=mysqli_fetch_array($sql)) {

      echo "<div class=\"panel panel-white no-radius text-center box-shadow col-md-12 margin-top-50\">";
      echo "<div class=\"profile\">";
      echo "<div class=\"col-sm-12\">";
      echo "<div class=\"col-xs-12 col-sm-12\">";
      echo "<div class=\"text-center col-md-12\">";
      echo "<img class=\"margin-bottom-10 img-circle border\" src=\"data:image/jpg;charset=utf8;base64," . base64_encode($row['profile_pic']) . "\" width=\"70\" height=\"70\"></img>";
      echo "</div>";

      echo "<h2 class=\"text-center\">" . $row['doctorName'] . "</h2>";
      echo "<p class=\"text-center\">" . $row['docEmail'] . " | " . $row['contactno'] . "</p>";
      echo "<div class=\"col-xs-12 col-sm-12 text-center margin-bottom-20\">";
      echo "<figure>";
      echo "<figcaption class=\"ratings\">";
      echo "<p>";
      echo "<a href=\"#\"><span class=\"fa fa-star\"></span></a>";
      echo "<a href=\"#\"><span class=\"fa fa-star\"></span></a>";
      echo "<a href=\"#\"><span class=\"fa fa-star\"></span></a>";
      echo "<a href=\"#\"><span class=\"fa fa-star\"></span></a>";
      echo "<a href=\"#\"><span class=\"fa fa-star-o\"></span></a>"; 
      echo "</p>";
      echo "</figcaption>";
      echo "</figure>";
      echo "</div>";

      echo "<div class=\"margin-bottom-30 text-center\">";
      echo "<p><strong>Address: </strong><br/>" . $row['address'] . "</p>";
      echo "</div>";
      echo "</div>";             
      echo "</div>";    

      echo "<div class=\"col-xs-12 divider text-center\">";
      echo "<div class=\"col-xs-12 col-sm-4 emphasis\">";
      echo "<h2><strong> 20,7K </strong></h2>";                
      echo "<p><small>Followers</small></p>";
      echo "</div>";
      echo "<div class=\"col-xs-12 col-sm-4 emphasis\">";
      echo "<h2><strong>245</strong></h2>";                    
      echo "<p><small>Following</small></p>";
      echo "</div>";
      echo "<div class=\"col-xs-12 col-sm-4 emphasis\">";
      echo "<h2><strong>43</strong></h2>";                    
      echo "<p><small>Snippets</small></p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";                 
      echo "</div>";
    
  }
}

?>

