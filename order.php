<?php
session_start();
if(!$_SESSION['name']) header('location:login.php');
if(isset($_POST['dat_hang']))
	{
		$ok=1;
		if(isset($_SESSION['cart']))
		{
		 foreach($_SESSION['cart'] as $k=>$v)
			{
				if(isset($v))
				{
				$ok=2;
				}
			}
		}
		if ($ok != 2)
			{
				header('location:order_fail.php');
			} 
		else{
			$conn=mysqli_connect("localhost","root","","didong");
			mysqli_set_charset($conn,"utf8");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$i=0;
			$cus_ID=$_POST['cus_id'];
			$sql1= "UPDATE customers SET address = '".$_POST['address']."' , email = '".$_POST['Email']."' , cus_name = '".$_POST['FullName']."' , phone = '".$_POST['Phone']."' WHERE cus_ID = $cus_ID";
			if (empty($_POST['address'])){
				header('location:dat-hang');
			} else {$query=mysqli_query($conn,$sql1);}
			foreach($_SESSION['cart'] as $key => $value)
				{
				if($_SESSION['cart'][$key])
					$item[$i]=$key;
					$i++;
				}
			$str=implode(",",$item);
			
			$sql="select id_sanpham,price from sanpham where id_sanpham in ($str)";
			$query=mysqli_query($conn,$sql);
			$username=$_SESSION['name'];
			$sql4="select cus_ID from customers limit 1"; // where username='".$username."' 
			$query4=mysqli_query($conn,$sql4);
			$row=mysqli_fetch_assoc($query4);
			
			$date=date("Y-m-d");
			$tongtien=$_POST['total'];
			$query3=mysqli_query($conn,"INSERT INTO orders(order_ID,cus_ID,date,total) VALUE('','$cus_ID','$date','$tongtien')");
			$order_ID=mysqli_insert_id($conn);
			$sql6="select * from sanpham where id_sanpham in ($str)";
			
			while($row=mysqli_fetch_assoc($query))
			{
				$ID_sanpham=$row['id_sanpham'];
				$quantity=$_SESSION['cart'][$ID_sanpham];
				$price=$_SESSION['cart'][$row['id_sanpham']]*($row['price']);
				$query2=mysqli_query($conn,"INSERT INTO orderlines(orderline_ID,order_ID,quantity,id_sanpham,price) VALUE('','$order_ID','$quantity','$ID_sanpham','$price')");			
			}
	
			mysqli_close($conn);
			
			header('location:order_success.php');
		}				
	}
?>




