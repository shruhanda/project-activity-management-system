<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
//header
include('includes/header.php');
// DATABASE CONNECTION
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php';</script>";
}
	$eEmail = $_SESSION['eEmail'];

if(isset($_REQUEST['passupdate'])){
	if($_REQUEST['ePassword'] == ""){
		$msg="<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Please Enter new password</div>";

	}else{
		$epass = $_REQUEST['ePassword'];
        $sql = "UPDATE expectantlogin_tb SET e_password = '$epass' WHERE e_email = '$eEmail'";
		
if($conn->query($sql) == TRUE){
		$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Password Changed Successfully</div>";

	
}else{
		$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Password Not Changed</div>";

}
	}
		
}
?>

<!-- FORM CREATION-->
<div class="col-sm-9 col-md-7">
<form class="mx-5" action="" method="POST">
<div class="form-group">
<label for="inputemail">EMAIL</label><input type="email" class="form-control" placeholder="email" id="inputemail" 
value ="<?php echo $eEmail ?>"readonly>
</div>
<div class="form-group">
<label for="inputnewpassword">PASSWORD </label><input type="password" class="form-control" placeholder=" New Password" id="inputnewpassword" name="ePassword">
</div>
<button type="submit" class="btn btn-info mt-4 mr-3" name="passupdate">Update</button>
<button type="reset" class="btn btn-secondary mt-4 mr-3">Reset</button>
 <?php if(isset($msg)) {echo $msg;} ?>

</form>
</div>
<!-- ENDS-->
<!--START FOOTER  -->
<?php
include('includes/footer.php');
?>
<!-- ENDS-->