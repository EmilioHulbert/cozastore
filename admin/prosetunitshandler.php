<?php
include("../partials/connect.php");
$name=$_POST['name'];
$units=$_POST['units'];
$newid=$_POST['form_id'];





$sql="update products set units = '$units', name = '$name' where id = $newid";

$connect->query($sql);




header('location: productsshow.php');
?>