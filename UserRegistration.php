<?php
include('dbconnection.php');
if(isset($_REQUEST['eSignup'])){
	// Checking Empty Fields
	if(($_REQUEST['eName'] == "") || ($_REQUEST['eEmail'] == "") || ($_REQUEST['ePassword'] == "")){
		$regmsg = "<div class='alert alert-info'>ALL FIELDS ARE REQUIRED</div>";
}else{
	//Assigning User's value to variables
		$eName = $_REQUEST['eName'];
        $eEmail = $_REQUEST['eEmail'];
        $ePassword = $_REQUEST['ePassword'];
        $sql = "INSERT INTO expectantlogin_tb(e_name, e_email, e_password) VALUES('$eName', '$eEmail', '$ePassword')";
		}
		 if($conn->query($sql) == TRUE){
			$regmsg2="<div class='alert alert-info'>Successfully Registered</div>";
		 }else{
			$regmsg2="<div class='alert alert-danger'>Unable To Create Account</div>";

		 }
		
	}

?>	
		
<div class="container pt-5">
<h2 class="text-center"> Create An Account </h2>
<div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">
<form action="" class="shadow-lg p-4" method="POST">
<div class="form-group">
<i class="fa fa-user" aria-hidden="true"></i><label for="name" class="font-weight-bold pl-2">NAME</label>
<input type="text" class="form-control" placeholder="Name" name="eName">
</div>
<div class="form-group">
<i class="fa fa-edge" aria-hidden="true"></i> <label for="email" class="font-weight-bold pl-2">EMAIL</label>
<input type="email" class="form-control" placeholder="Email" name="eEmail">
</div>
<div class="form-group">
<i class="fa fa-lock" aria-hidden="true"></i> <label for="pass" class="font-weight-bold pl-2">CREATE NEW PASSWORD</label>
<input type="password" class="form-control" placeholder="Password" name="ePassword">
</div>
<button type="submit" class="btn btn-info mt-5 btn-block shadow-sm font-weight-bold" name="eSignup">Sign Up</button><br>
<?php if(isset($regmsg2)) {echo $regmsg2;} ?>
<em style="font-size:10px;"> By Clicking SIGN UP You Agree to our Terms and Conditions
<?php if(isset($regmsg)) {echo $regmsg;} ?>
</form>
</div>
</div>
</div>