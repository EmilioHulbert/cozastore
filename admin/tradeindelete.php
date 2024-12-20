<?php 
include("../partials/connect.php");
$newid=$_GET['del_id'];

$sql="Delete from tradein where id='$newid'";

if(mysqli_query($connect,$sql)){
	header('location:requestedtradeins.php');

}else{
	echo "Not deleted";
}

?>