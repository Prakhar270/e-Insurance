<?php
session_start();
$em=$user=$_SESSION['user'];



include 'conn.php';
			if($_SERVER['REQUEST_METHOD']=="POST")
{

$op=$_POST['op'];	$np=$_POST['np'];	$cp=$_POST['cp'];	
//echo($op);echo($cp);echo($np);echo($eml);
echo $sql="select * from reg where uname='$user'";
$data=mysqli_query($conn,$sql);

	if($x=mysqli_fetch_assoc($data))
	{
		$ps=$x['pswd'];
	
		if($ps==$op && $np==$cp){
			
			echo $sql1="update reg set pswd='$np',cpswd='$np' where uname='$user'";
			if(mysqli_query($conn,$sql1))
			{ 
				header("location:userlogin.php?msg=Password Changed Successfully");
				
			}
		}
}}?>







