<?php
define('TITLE', 'ActivityDetails');
define('PAGE', 'ActivityDetails');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_login'])){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php'</script>";
}
?>
<!--START ActivityDetails-->
<div class="col-sm-6 mx-3">
<form action="" method="post" class="form-inline">
<div class="form-group mr-3">
<label for="checkid"> Enter Activity ID</label>
<input type="text" class="form-control" name="checkid" id="checkid"
onkeypress="isInputNumber(event)">
</div>
<button type="submit" class="btn btn-info">
 Search</button>
</form>
<?php
if(isset($_REQUEST['checkid'])){
	if($_REQUEST['checkid'] == ""){
		$msg="<div class='alert alert-danger mt-2 ml-5'>Empty Fields Not Allowed</div>";

	}else{
	$sql = "SELECT * FROM assignactivity_tb WHERE a_id = 
	{$_REQUEST['checkid']}";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	if(($row['a_id'] == $_REQUEST['checkid'])){ ?>
<h3 class="text-center mt-5">Assigned Activity Details</h3>
<table class="table table-bordered">
<tbody>
<tr>
<td>Activity ID</td>
<td><?php if(isset($row['a_id']))
{echo $row['a_id'];}?></td>
</tr>
<tr>
<td>Activity Name</td>
<td><?php if(isset($row['activity_name']))
{echo $row['activity_name'];}?></td>
</tr>
<tr>
<td>Project Name</td>
<td><?php if(isset($row['p_name']))
{echo $row['p_name'];}?></td>
</tr>
<tr>
<td>Project Head</td>
<td><?php if(isset($row['p_head']))
{echo $row['p_head'];}?></td>
</tr>
<tr>
<td>Workers Assigned</td>
<td><?php if(isset($row['a_workers']))
{echo $row['a_workers'];}?></td>
</tr>
<tr>
<td>City</td>
<td><?php if(isset($row['a_city']))
{echo $row['a_city'];}?></td>
</tr>
<tr>
<td>State</td>
<td><?php if(isset($row['a_state']))
{echo $row['a_state'];}?></td>
</tr>
<tr>
<td>Zip</td>
<td><?php if(isset($row['a_zip']))
{echo $row['a_zip'];}?></td>
</tr>
<tr>
<td>Assign Activity Head</td>
<td><?php if(isset($row['activity_head']))
{echo $row['activity_head'];}?></td>
</tr>
</tbody>
</table>
<div class="text-center">
<form action="" class="mb-3 d-print-none">
<input class="btn btn-info" type="submit" value="Print"
onClick="window.print()">
<input class="btn btn-danger" type="submit" value="Close">

</div>
<?php }else{
	
	echo"<div class='alert alert-danger mt-4'>No activity assigned for this ID</div>";

}
	}
} ?>
 <?php if(isset($msg)) {echo $msg;} ?>
</div><!--ENDS Check Status-->
<!--JAVA-->
<script>
function isInputNumber(evt){
	var ch = String.formCharCode(evt.which);
	if(!(/[0-9]/.test(ch))){
		evt.preventDefault();
	}
}
</script>

























<!--Footer-->
<?php

include('includes/footer.php');

?>
<!--end-->

