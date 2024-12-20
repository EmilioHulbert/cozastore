<?php 
include('../partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newprice=$_POST['price'];
	$newdesc=$_POST['description'];
	$newcat=$_POST['category'];




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


$sql="UPDATE products set name='$newname',price='$newprice',description='$newdesc',category_id='$newcat',picture='$file_path',picture2='$file_path2',picture3='$file_path3' where id='$newid'";

if(mysqli_query($connect,$sql)){
	header('location: productsshow.php');
	}else{
	header('location: adminindex.php');
	}

}



?>