<?php
    include('../../include/config.php');
    include('../../include/checklogin.php');
asxas;
    if(isset($_POST['submit'])) {
        $to = $_POST['to'];
        $cc = $_POST['cc'];
        $bcc = $_POST['bcc'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sen_id = $_SESSION['id'];

        $sql=mysqli_query($con, "INSERT INTO mail (rec_id, sen_id, sub, cc, bcc, msg, is_read) VALUES ('$to', '$sen_id', '$subject', '$cc', '$bcc', '$message', 0)");
        if($sql) {
            $msg="Mail Sent";
        }
        
    }

?>

<script>
function showCc() {
    var x = document.getElementById("cc");
    if (x.style.display === "none") {
        x.style.display = "table";
        document.getElementById("ccLink").innerHTML = "Hide Cc";
    } else {
        // x.innerHTML = '';
        x.style.display = "none";
        document.getElementById("ccLink").innerHTML = "Add Cc";
    }
}

function showBcc() {
    var x = document.getElementById("bcc");
    if (x.style.display === "none") {
        x.style.display = "table";
        document.getElementById("bccLink").innerHTML = "Hide Cc";
    } else {
        // x.innerHTML = '';
        x.style.display = "none";
        document.getElementById("bccLink").innerHTML = "Add Cc";
    }
}
</script>

<script>
    $(document).ready(function () {
        $('input[type=file]').change(function () {
            $('#btnUpload').show();
            $('#divFiles').html('');
            for (var i = 0; i < this.files.length; i++) { //Progress bar and status label's for each file genarate dynamically
                var fileId = i;
                $("#divFiles").append('<div class="col-md-12 margin-bottom-5 bg-success well">' + (i+1)  + '. sacasc</div>');
            }
        });
    });
</script>

<div class="wrap-content container" id="container">
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
                <form role="form" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <div class="input-group margin-top-10">
                            <span class="input-group-addon" id="basic-addon3">To : &nbsp; &nbsp; &nbsp; &nbsp;</span>
                            <input type="text" name="to" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="input-group margin-top-10" id="cc" style="display:none;">
                            <span class="input-group-addon" id="basic-addon3">Cc : &nbsp; &nbsp; &nbsp; &nbsp;</span>
                            <input type="text" name="cc" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="input-group margin-top-10" id="bcc" style="display:none;">
                            <span class="input-group-addon" id="basic-addon3">Bcc : &nbsp; &nbsp; &nbsp; </span>
                            <input type="text" name="bcc" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="margin-top-10">
                            <a id="ccLink" onclick="showCc()">Add Cc</a> | <a id="bccLink" onclick="showBcc()">Add Bcc</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3">Subject : </span>
                            <input type="text" name="subject" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comment">Message:</label>
                        <textarea name="message" class="form-control" rows="10" id="comment"></textarea>
                    </div>

                    <div class="form-group">
                        
                        <div class="row container">
                            <label for="exampleInputFile">Attachment</label>
                            <div class="row">
                                <div id="divFiles" class="files margin-left-15">
                                </div>
                            </div>
                            <input type="file" name="fileUploader" multiple>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-md-12 col-sm-12">Send</button>
                    </div>

                </form>
			</div>
		</div>
	</div>
</div>




