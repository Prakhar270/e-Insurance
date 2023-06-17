<?php 
session_start();
if(session_destroy())
{
  header("location:http://localhost/insure/?msg=Logout Successfully");
}
?>
