<?php
session_start();
if(empty($_SESSION['aemail'] AND $_SESSION['apassword'])){
	header('location: adminlogin.php');
}


 ?>