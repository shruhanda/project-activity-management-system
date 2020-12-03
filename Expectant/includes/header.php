<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../custom.css">

<title><?php echo TITLE ?></title> 
</head>
<body>
<!-- START -->
<nav>
<nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed top">
<a href ="expectantprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">WELCOME TO BUILDERSDECK</a>
</nav>
<!-- END nav-->
<!-- START Container-->
<div class="container-fluid" style="margin-top:40px;">
<div class="row"><!-- START ROW-->

<!-- SIDEBAR-->
<nav class="col-sm-2 bg-light sidebar py-5
d-print-none">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link <?php if(PAGE == 'ExpectantProfile'){echo 'active';}?>" 
href="expectantprofile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
Profile</a></li>
<li class="nav-item">
<a class="nav-link <?php if(PAGE == 'SubmitRequest'){echo 'active';}?>" href="submitrequest.php"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
Submit Resource Request</a></li>
<li class="nav-item">
<a class="nav-link <?php if(PAGE == 'CheckStatus'){echo 'active';}?>" href="checkstatus.php"><i class="fa fa-check-circle" aria-hidden="true"></i>
Check Resource Status</a></li>
<li class="nav-item">
<a class="nav-link <?php if(PAGE == 'ActivityDetails'){echo 'active';}?>" href="ActivityDetails.php"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
Activity Details</a></li>
<li class="nav-item">
<a class="nav-link <?php if(PAGE == 'ChangePassword'){echo 'active';}?>" href="expectantchangepass.php"><i class="fa fa-unlock" aria-hidden="true"></i>
Change Password</a></li>
<li class="nav-item">
<a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Logout</a></li>
</ul>
</div>
</nav><!--ENDS-->


