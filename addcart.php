<?php
session_start();
//if(!$_SESSION['name']) header('location:login.php');
$id=$_GET['item'];
if(isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id]++;
else $_SESSION['cart'][$id]=1;
header('location:dat-hang.php');
?>