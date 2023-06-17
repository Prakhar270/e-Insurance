<?php
ob_start();
//include "header.php "


?>
<!DOCTYPE html>
<html>
<head><?php
include 'header.php';
include("bootstrap.php"); 
?>
<style type="text/css">


    <style type="text/css">
    body{
        font-family: 'roboto', sans-serif;
        background:url('image/bodyback.jpg') no-repeat;       

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
<body>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-sm-12 user-image">
                <h2>Customer Login</h2>
                <img src="img/userimage.png" class='mt-2 mb-4'>
            </div>
            <form class="col-12" method="post">
                <div class="form-group">
                    <input type="text" name="uname" placeholder="Enter Username" class="form-control">
                </div>
<div class="form-group">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
                <input type="submit" class="btn" name="s" value="login">
            </form>
            <div class="col-12 mb-4">
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
include("conn.php");
if(isset($_POST['s']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql2="select * from reg where uname='$uname'";
$q=mysqli_query($conn,$sql2);
	if ($r=mysqli_fetch_assoc($q)) {

$pswd=$r['pswd'];

if ($password==$pswd) {
session_start();
 $_SESSION['user']=$r['uname'];
 header('location:http://localhost/insure/customerhome.php?msg="welcome custumer');
}

}
        
}

 ?>
