<?php
include("../partials/connect.php");

$newid=$_GET['up_id'];


// echo $newid
$sql="insert into tradeinaccepted(id,name,picture,email,description,price) select * from tradein where id=$newid ";

$connect->query($sql);


header('location: requestedtradeins.php');
?>