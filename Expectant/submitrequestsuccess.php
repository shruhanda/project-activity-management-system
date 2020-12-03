<?php
define('TITLE', 'Success');
include('includes/header.php');
// DATABASE CONNECTION
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
	$eEmail = $_SESSION['eEmail'];
} else{
	echo "<script> location.href='expectantlogin.php';</script>";
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = 
       {$_SESSION['myid']}";
	   $result = $conn->query($sql);
	   if($result->num_rows == 1){
		   $row = $result->fetch_assoc();
		   echo "<div class='ml-5'>
		   <table class='table'>
		   <tbody>
		   <tr>
		   <th>Request ID</th>
		   <td>".$row['request_id']."</td>
		   </tr>
		   <tr>
		   <th>Name</th>
		   <td>".$row['expectant_name']."</td>
		   </tr>
		   <tr>
		   <th>Project Name</th>
		   <td>".$row['expectant_pname']."</td>
		   </tr>
		   <tr>
		   <th>Project Head</th>
		   <td>".$row['expectant_phead']."</td>
		   </tr>
		   <tr>
		   <th>Request Info</th>
		   <td>".$row['request_info']."</td>
		   </tr>
		   <tr>
		   <th>Request Description</th>
		   <td>".$row['request_desc']."</td>
		   </tr>
		   <tr>
		   <td><form class='d-print-none'><input class=
		   'btn btn-primary' type='submit' value='Print'
		   onClick='window.print()'></form></td>
		   </tr>
		   </tbody>
		   </table></div>
		   ";
	   }else{
		   echo"Failed";
	   }

?>
<!--START FOOTER  -->
<?php
include('includes/footer.php');
?>
<!-- ENDS-->









