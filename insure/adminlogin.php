<?php
ob_start();
include 'header.php';

?>

<!DOCTYPE html>
<html>
<head><?php include("bootstrap.php"); ?>
<style type="text/css">


	<style type="text/css">
	body{
		font-family: 'roboto', sans-serif;
		background:url('bodyback.jpg') no-repeat; 		

	}
	.main-section{
		margin: 100px 0px 0px 70px;
	}
	.modal-content{
		box-shadow: 0px 0px 19px #848484;
	}
	.btn{
		background-color: #27c2a5;
		color: #fff;
		font-size: 19px;
		padding: 7px 14px;
		border-radius: 5px;

	}
	button{
		width: 40%;
	}

</style>
</head>
<body style="background:url(bodyback.jpeg)">
<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-sm-12 user-image">
				<h1>Admin Login</h1>
				<img src="img/userimage.png " class='mt-2 mb-2'>
			</div>
			<form class="col-12" method="post">
				<div class="form-group">
					<input type="text" name="uname" placeholder="Enter Username" class="form-control">
				</div>
<div class="form-group">
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
				</div>
				<input type="submit" class="btn mb-4" name="s" value="Login">
			</form>
			<div class="col-12 forgot">
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php 
include"conn.php";
if (isset($_POST['s'])) {
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$sql="select * from admin where Username='$uname'";
	$x=$conn->query($sql);
	if($r=$x->fetch_array()) {
         $dbpswd=$r['password'];

        if($dbpswd==$password)
 
        {
        	session_start();
        	$_SESSION['admin']=$r['username'];

        	header("location:admin.php?msg=Welcome Admin");
        }
        else{
        	echo "invalid Password";
        }
	}
}
 ?>
