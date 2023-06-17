<?php 

include 'user_h.php';
include 'conn.php';
$sql="select * from  user_kyc where user_name='$user'";
$q=mysqli_query($conn,$sql);
if ($r=mysqli_fetch_assoc($q)) {
	$img=$r['image'];
}
	






?>
<!DOCTYPE html>
<html>
<head>
<?php include('bootstrap.php') ?>
<style>
.heading{
			font-family:Century Gothic;font-size: 40px
		}
legend {
	width:200px;
}
img {
	height: 300px;width:250px;
}
</style>
</head>
<body>
	
	<div class="container">
		<fieldset class='border'><legend class='text-center'>Your Policy Detail</legend>

   <?php 
include "conn.php";
// if (isset($_GET['view'])) {
// 	$mname=$_GET['view'];

// 	$u=$_SESSION['user'];

	
 $sql="select * from user_policy where uname='$user'";
$x=mysqli_query($conn,$sql);
if ($r=mysqli_fetch_assoc($x)) {
	?>
<table class='table'>
<tr><td colspan=2 class='text-center'><img src="<?php echo $img ?>"  class='img-thumbnail'></td></tr>
	<tr><th>Insurance Type</th><td><?php echo $r['insurance_type'] ?></td></tr>
	<tr><th>Name</th><td><?php echo $r['name'] ?></td></tr>
	<tr><th>Policy Number</th><td><?php echo$r['policy_number'] ?></td></tr>

	<tr><th>Amount to be Pay</th><td><?php echo$r['paid_amount'] ?></td></tr>


</table>
       
<?php }?>

</fieldset>
 <a href="user_pay.php" class='float-right mt-4 mr-4'><button class='btn btn-warning' style="margin:50px 200px">Pay Now</button></a>


</div>


    	<div class='col-md-3'></div>
</div>
</div>
</body>
</html>
