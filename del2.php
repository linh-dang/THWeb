<?php
	session_start();
if(!$_SESSION['name']) header('location:main-p.php');
if(isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","","didong");
	mysqli_set_charset($conn,"utf8");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$dh_ID=$_GET['id'];
	$sql1= "DELETE FROM `didong`.`orders` WHERE `orders`.`order_ID` = $dh_ID";
	
	$query=mysqli_query($conn,$sql1);
	$sql2= "DELETE FROM `didong`.`orderlines` WHERE `orderlines`.`order_ID` = $dh_ID";
	$query=mysqli_query($conn,$sql2);
	
	mysqli_close($conn);
	header('location:dat-hang.php');
}
?>
