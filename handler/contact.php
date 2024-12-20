<?php
include("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";

$connect->query($sql);

if(mysqli_query($connect,$sql)){
	echo "<script>
alert('Message Submitted Successfully !');
window.location.href='../contact.php';
</script>";

}else{
	echo "Message Submission Failed,Try Again";
}



?>