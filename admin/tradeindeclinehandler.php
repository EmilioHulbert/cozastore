<?php
include("../partials/connect.php");

$newid=$_GET['up_id'];


// echo $newid
$sql="insert into declinedtradein select * from tradein where id=$newid ";

$connect->query($sql);




header('location: requestedtradeins.php')
?>