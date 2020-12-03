<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('includes/header.php');
// DATABASE CONNECTION
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php';</script>";
}

if(isset($_REQUEST['submitrequest'])){
	if(($_REQUEST['requestinfo'] == "") || 
	($_REQUEST['requestdesc'] == "") || ($_REQUEST['expectantname'] == "") || ($_REQUEST['expectantpname'] == "")
	|| ($_REQUEST['expectantphead'] == "") || ($_REQUEST['expectantadd1'] == "") || ($_REQUEST['expectantcity'] == "")
	 || ($_REQUEST['expectantstate'] == "") || ($_REQUEST['expectantzip'] == "")){
	   $msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>EMPTY FIELDS NOT ALLOWED</div>";

	}else{
		$rinfo = $_REQUEST['requestinfo'];
		$rdesc = $_REQUEST['requestdesc'];
		$rname = $_REQUEST['expectantname'];
		$rpname = $_REQUEST['expectantpname'];
		$rphead = $_REQUEST['expectantphead'];
		$radd1 = $_REQUEST['expectantadd1'];
		$rcity = $_REQUEST['expectantcity'];
		$rstate = $_REQUEST['expectantstate'];
		$rzip = $_REQUEST['expectantzip'];
		$sql = "INSERT INTO submitrequest_tb(request_info, request_desc,
		expectant_name, expectant_pname, expectant_phead, expectant_add1,
		expectant_city, expectant_state, expectant_zip) VALUES
		('$rinfo', '$rdesc', '$rname', '$rpname', '$rphead', '$radd1',
		'$rcity', '$rstate', '$rzip')";
		if($conn->query($sql) == TRUE){
			$genid = mysqli_insert_id($conn);
			$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'> Submitted Successfully</div>";
			$_SESSION['myid'] = $genid;
			echo "<script> location.href='submitrequestsuccess.php';</script>";


		}else{
			$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to Submit</div>";

		}

	}
}
?>

<!-- START SUBMIT REQUEST-->
<div class="col-sm-9 col-md-10">
<form class="mx-5" action="" method="POST">
<div class="form-group">
<label for="inputRequestInfo">Request info</label>
<input type="text" class="form-control" name="requestinfo" placeholder="Request info" id="inputRequestInfo" >
</div>
<div class="form-group">
<label for="inputRequestDescription">Request Description</label>
<input type="text" class="form-control" name="requestdesc" placeholder="Write Description" id="inputRequestDescription" >
</div>
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="expectantname" id="inputName" placeholder="Aditya">
</div>
<div class="form-group">
<label>Project Name</label>
<input type="text" class="form-control" name="expectantpname" id="Name" placeholder="Name">
</div>
<div class="form-group">
<label>Project Head</label>
<input type="text" class="form-control" name="expectantphead" id="Name" placeholder="Head">
 </div>
 <div class="form-group">
 <label>Address</label>
 <input type="text" class="form-control" id="inputAddress" placeholder="1234 Building" name="expectantadd1">
 </div>
 <div class="form-row">
 <div class="form-group col-md-4">
 <label for="inputCity">City</label>
 <input type="text" class="form-control" id="inputCity" name="expectantcity">
 </div>
 <div class="form-group col-md-4">
 <label for="inputState">State</label>
 <input type="text" class="form-control" id="inputState" name="expectantstate">
 </div>
 <div class="form-group col-md-2">
 <label for="inputZip">Zip</label>
 <input type="text" class="form-control" id="inputZip" onkeypress="isInputNumber(event)" name="expectantzip">
 </div>
 </div>
 
 <button type="submit" class="btn btn-primary" name="submitrequest">SUBMIT</button>
 <?php if(isset($msg)) {echo $msg;} ?>
 <button type="reset" class="btn btn-secondary">RESET</button>
</form>
</div><!-- END SUBMIT REQUEST-->
<!--JAVA-->
<script>
function isInputNumber(evt){
	var ch = String.formCharCode(evt.which);
	if(!(/[0-9]/.test(ch))){
		evt.preventDefault();
	}
}
</script>
<!-- END-->

<!--START FOOTER  -->
<?php
include('includes/footer.php');
?>
<!-- END-->