<?php
include("../partials/connect.php");
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];
$units=$_POST['units'];

$target="uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads/".$file_name;
move_uploaded_file($file_tmp, $file_store);

$file_path2=$target.basename($_FILES['file2']['name']);
$file_name=$_FILES['file2']['name'];
$file_tmp=$_FILES['file2']['tmp_name'];
$file_store="../uploads/".$file_name;
move_uploaded_file($file_tmp, $file_store);


$file_path3=$target.basename($_FILES['file3']['name']);
$file_name=$_FILES['file3']['name'];
$file_tmp=$_FILES['file3']['tmp_name'];
$file_store="../uploads/".$file_name;
move_uploaded_file($file_tmp, $file_store);




$sql="INSERT INTO products(name,price,picture,picture2,picture3,description,category_id,units) VALUES('$name','$price','$file_path','$file_path2','$file_path3','$description','$category','$units')";

$connect->query($sql);




header('location: productsshow.php')
?>