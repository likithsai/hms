
<div class="row">
	<div class="col-sm-3">
		<div class="panel panel-white no-radius text-center box-shadow" style="border: 1px solid #ccc;">
			<div class="panel-body">
				<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
				<h2 class="StepTitle">Users</h2>
											
				<p class="links cl-effect-1">
					<a href="dashboard.php?page=manageUser">
                        <?php 
                            $result = mysqli_query($con,"SELECT * FROM users ");
                            $num_rows = mysqli_num_rows($result);
                            {
                        ?>
						Total Users :<?php echo htmlentities($num_rows);  } ?>		
					</a>
				</p>
			</div>
		</div>
	</div>
                                
    <div class="col-sm-3">
		<div class="panel panel-white no-radius text-center box-shadow" style="border: 1px solid #ccc;">
			<div class="panel-body">
				<span class="fa-stack fa-2x"> 
                    <i class="fa fa-square fa-stack-2x text-primary"></i> 
                    <i class="fa fa-users fa-stack-1x fa-inverse"></i> 
                </span>
                    
                <h2 class="StepTitle">Doctors</h2>						
                    <p class="cl-effect-1">
                    <a href="dashboard.php?page=manageDoctor">
                    <?php 
                        $result1 = mysqli_query($con,"SELECT * FROM doctors ");
                        $num_rows1 = mysqli_num_rows($result1);
                        {
                    ?>
                    Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
                    </a>
				</p>
			</div>
		</div>
	</div>
        
    <div class="col-sm-3">
		<div class="panel panel-white no-radius text-center box-shadow" style="border: 1px solid #ccc;">
			<div class="panel-body">
				<span class="fa-stack fa-2x"> 
                    <i class="fa fa-square fa-stack-2x text-primary"></i> 
                    <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> 
                </span>
				<h2 class="StepTitle"> Appointments</h2>
											
				<p class="links cl-effect-1">
						<a href="dashboard.php?page=appointmentHistory">
                            <?php 
                                $sql= mysqli_query($con,"SELECT * FROM appointment");
                                $num_rows2 = mysqli_num_rows($sql);
                                {
                            ?>
							Total Appointments :<?php echo htmlentities($num_rows2);  } ?>	
						</a>
				</p>
			</div>
		</div>
	</div>

    <div class="col-sm-3">
		<div class="panel panel-white no-radius text-center box-shadow" style="border: 1px solid #ccc;">
			<div class="panel-body">
				<span class="fa-stack fa-2x"> 
                    <i class="fa fa-square fa-stack-2x text-primary"></i> 
                    <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> 
                </span>
				<h2 class="StepTitle">Patients</h2>
											
				<p class="links cl-effect-1">
				    <a href="dashboard.php?page=managePatient">
                        <?php 
                            $result = mysqli_query($con,"SELECT * FROM tblpatient ");
                            $num_rows = mysqli_num_rows($result);
                            {
                        ?>
                        Total Patients :<?php echo htmlentities($num_rows);  } ?>		
                    </a>
				</p>
			</div>
		</div>
	</div>
	
	
	<div class="col-sm-6 box-shadow">
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Panel Header</div>
				<div class="panel-body">
					<canvas id="myChart" style="width: 100%; height: 100%;"></canvas>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-6">
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Panel Header</div>
				<div class="panel-body">
					<canvas style="width: 100%; height: 100%;"></canvas>
				</div>
			</div>
		</div>
	</div>
	
</div>

			
			
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'My First dataset',
				backgroundColor: 'rgb(255, 99, 132, 0.4)',
				borderColor: 'rgb(255, 99, 132)',
				data: [0, 10, 5, 2, 20, 30, 45]
			}]
		},
		
		options: {
			scales: {
				xAxes: [{
					gridLines: {
						color: "rgba(0, 0, 0, 0)",
					}
				}],
				
				yAxes: [{
					display: false,
				}]
			},
			legend: {
				display: false
			}
		}
	});
</script>