<?php
    include('../include/config.php');
	
	if( isset($_POST['submit']) ) {	
		echo $_POST['group_name'];
		echo $_POST['group_desc'];
	}
?>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog" style="margin: 100px auto;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Group</h4>
      </div>

	  <form name="submit">
		  <!-- Modal body -->
		  <div class="modal-body">
			<div class="form-group">
				<label for="email">Enter Group Name: </label>
				<input type="text" name="group_name" class="form-control" placeholder="Enter Group Name">
			</div>
			
			<div class="form-group">
				<label for="email">Enter Group Name: </label>
				<textarea name="group_desc" class="form-control" rows="5" placeholder="Enter Description"></textarea>
			</div>
		  </div>

		  <!-- Modal footer -->
		  <div class="modal-footer">
			<button type="submit" class="btn btn-info">Submit</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
	  </form>

    </div>
  </div>
</div>

<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">
        
        <div class="row">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create Group</button>    
        </div>
    
    </div>
</div>