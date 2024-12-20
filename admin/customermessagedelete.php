<?php 
include("../partials/connect.php");
$newid=$_GET['del_id'];

$sql="Delete from contact where id='$newid'";

if(mysqli_query($connect,$sql)){
	header('location: customerreports.php');

}else{
	echo "Not deleted";
}

?>