
<!--
	Filename			:	inbox.php
	Description			:	Module responsible for viewing email messages.
	Author				:	B P likith Sai
-->

<?php
	include('../../include/config.php');
	include('../../include/checklogin.php');
?>


<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">

		<div class="row">
			<div class="col-md-12">
															
			<table class="table table-hover table-striped">
                            <tbody>
                                
                                <?php

$sql=mysqli_query($con,"select * from mail where rec_id='".$_SESSION['id']."'");
                                while($row=mysqli_fetch_array($sql)) {
                                
                                ?>
                              <tr class="unread">
                                  <td class="view-message  dont-show"><?php echo $row["sen_id"]; ?></td>
                                  <td class="view-message "><?php echo $row["sub"]; ?></td>
                                  <td class="view-message  text-right">9:27 AM</td>
                              </tr>
                              <?php } ?>
                          </tbody>
                          </table>
			</div>
		</div>
	</div>
</div>




