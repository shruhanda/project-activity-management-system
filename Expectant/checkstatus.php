<?php
define('TITLE', 'Check Status');
define('PAGE', 'CheckStatus');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_login'])){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php'</script>";
}

?>
<!--START Check Status-->
<div class="col-sm-6 mx-3">
<form action="" method="post" class="form-inline">
<div class="form-group mr-3">
<label for="checkid"> Enter Request ID</label>
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
	$sql = "SELECT * FROM assignworker_tb WHERE request_id = 
	{$_REQUEST['checkid']}";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	if(($row['request_id'] == $_REQUEST['checkid'])){ ?>
<h3 class="text-center mt-5">Assigned Worker Details</h3>
<table class="table table-bordered">
<tbody>
<tr>
<td>Request ID</td>
<td><?php if(isset($row['request_id']))
{echo $row['request_id'];}?></td>
</tr>
<tr>
<td>Request Info</td>
<td><?php if(isset($row['request_info']))
{echo $row['request_info'];}?></td>
</tr>
<tr>
<td>Request Description</td>
<td><?php if(isset($row['request_desc']))
{echo $row['request_desc'];}?></td>
</tr>
<tr>
<td>Name</td>
<td><?php if(isset($row['expectant_name']))
{echo $row['expectant_name'];}?></td>
</tr>
<tr>
<td>Project Name</td>
<td><?php if(isset($row['expectant_pname']))
{echo $row['expectant_pname'];}?></td>
</tr>
<tr>
<td>Project Head</td>
<td><?php if(isset($row['expectant_phead']))
{echo $row['expectant_phead'];}?></td>
</tr>
<tr>
<td>Address</td>
<td><?php if(isset($row['expectant_add1']))
{echo $row['expectant_add1'];}?></td>
</tr>
<tr>
<td>City</td>
<td><?php if(isset($row['expectant_city']))
{echo $row['expectant_city'];}?></td>
</tr>
<tr>
<td>State</td>
<td><?php if(isset($row['expectant_state']))
{echo $row['expectant_state'];}?></td>
</tr>
<tr>
<td>Zip</td>
<td><?php if(isset($row['expectant_zip']))
{echo $row['expectant_zip'];}?></td>
</tr>
<tr>
<td>Assigned Delivery Worker</td>
<td><?php if(isset($row['assign_del_worker']))
{echo $row['assign_del_worker'];}?></td>
</tr>
<tr>
<td>Engineer's Sign</td>
<td></td>
</tr>
<tr>
<td>Worker's Sign</td>
<td></td>
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
	
	echo"<div class='alert alert-danger mt-4'>No request assigned for this ID</div>";

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























<?php
include('includes/footer.php');
?>