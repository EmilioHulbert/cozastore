<?php
include("../partials/connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$description=$_POST['description'];
$price=$_POST['price'];

$target="uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="uploads/".$file_name;
move_uploaded_file($file_tmp, $file_store);


$sql="INSERT INTO tradein(name,picture, email, description,price) VALUES('$name', '$file_path', '$email', '$description', '$price')";

$connect->query($sql);
echo "<script>alert('Request Submitted😎');
	window.location.href='../index.php';
	</script>";
?>