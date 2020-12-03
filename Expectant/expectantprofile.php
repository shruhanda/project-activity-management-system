<?php
define('TITLE', 'Expectant Profile');
define('PAGE', 'Expectant Profile');
// DATABASE CONNECTION
include('../dbconnection.php');
include('includes/header.php');
session_start();
if($_SESSION['is_login']){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php';</script>";
}
$sql = "SELECT e_name, e_email FROM expectantlogin_tb WHERE e_email = '$eEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
	$row = $result->fetch_assoc();
	$eName = $row['e_name'];
}
// UPDATING INFO
if(isset($_REQUEST['nameupdate'])){
	if($_REQUEST['eName'] == ""){
		$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>EMPTY FIELDS NOT ALLOWED</div>";
	} else{
		$eName = $_REQUEST['eName'];
		$sql = "UPDATE expectantlogin_tb SET e_name = '$eName' WHERE e_email = '$eEmail'";
		if($conn->query($sql) == TRUE){
		    $msg="<div class='alert alert-info col-sm-6 ml-5 mt-2'>Updated Successfully</div>";

		} else{
			$msg="<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Unable to Update</div>";

		}
	}
}
?>

<div class="col-sm-6"> <!--PROFILE-->
<form action="" method="POST" class="mx-5">
<div class="form-group">
<label for="eEmail">Email</label>
<input type="email" class="form-control" name="eEmail" id="eEmail" 
value = "<?php echo $eEmail ?>"readonly>
</div>
<div class="form-group">
<label for="eName">Name</label>
<input type="text" class="form-control" name="eName" id="eName"
value = "<?php echo $eName ?>">
</div>
<button type="submit" class="btn btn-primary" 
name="nameupdate">Update</button>
<?php if(isset($msg)) {echo $msg;} ?>

</form>
</div><!--ENDS PROFILE-->
<!--START FOOTER  -->
<?php
include('includes/footer.php');
?>