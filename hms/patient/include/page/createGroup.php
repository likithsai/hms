<?php
    //include('../include/config.php');
?>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Group</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
            <label for="email">Enter Group Name: </label>
            <input type="text" class="form-control" placeholder="Enter Group Name">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

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