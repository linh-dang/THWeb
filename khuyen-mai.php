<?php
	session_start();
?>

<?php
			if(isset($_POST['login']))
			{
			$u=$_POST['username'];
			$p=$_POST['password'];
			 if($u == NULL)
			 {
			  echo "Bạn phải nhập Tên đăng nhập<br />";
			 }
			 if($p == NULL)
			 {
			  echo "Bạn phải nhập Mật khẩu<br />";
			 }
			 if($u && $p)
			 {
			  $conn=mysqli_connect("localhost","root","","didong");
			  if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			  $sql="select * from customers where username='".$u."' and password='".$p."' and active=1";
			  $query=mysqli_query($conn,$sql);
			  
			  $check_login = mysqli_num_rows($query);
				
			  if(mysqli_num_rows($query) == 0)
			  {
				
			   //$check_login = mysql_num_rows; 
				$err_login = "<font color='red'>Đăng nhập không hợp lệ hoặc tài khoản đã bị khóa</font>";
			  }
			  else
			  {
			  $_SESSION["name"]=$u;
			  $row=mysqli_fetch_assoc($query);
			  $_SESSION['role']=$row['role'];
			   header('location:dat-hang.php');
			  
			  }
			  mysqli_close($conn);
			 }
			}
		?>

<?php
			 if(isset($_POST['adduser']))
			 {
			$username =$_POST["username1"];
			$password =$_POST["password1"];
			$repassword =$_POST["re_password"];
			
			if($username&&$password&&$repassword)
			{
				if($password!=$repassword)
				{ echo "Mật khẩu không khớp nhau";}
				else
				{
					if(strlen($username)>30||strlen($username)<3)
					{ echo "Tên Đăng Nhập phải chứa từ 6 đến 30 kí tự";}
					else
					{
						if(strlen($password)>30||strlen($password)<4)
						{ echo "Mật Khẩu phải chứa từ 6 đến 10 kí tự";}
						else
						{
							$conn=mysqli_connect("localhost","root","","didong");
							if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							mysqli_set_charset($conn,"utf8");
							$namecheck=mysqli_query($conn,"select * from customers where username='$username'");
							$count=mysqli_num_rows($namecheck);
							if($count != 0 )
							{
								$err_login = "Tên đăng nhập đã được sử dụng<br/>";
							}
							else
							   {
								$l=0;
								$active=1;
								$conn=mysqli_connect("localhost","root","","didong");
								if (mysqli_connect_errno())
								{
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								mysqli_set_charset($conn,"utf8");
								$query2=mysqli_query($conn,"INSERT INTO `didong`.`customers` (`cus_ID`, `cus_name`, `phone`,`sex`, `email`, `address`, `birth`, `username`, `password`, `role`, `date`, `active`) VALUES (NULL, '', '','', '', '', '', $username, $password, '0', '', '')");
								if($query2) {
								echo "Bạn đã đăng ký thành công!";?> <a href="main-p.php">Click here</a><?php echo " để chuyển đến trang chủ";
								die();
								}
								mysqli_close($conn);
							   }
							
						}
					}
				}
			}
			else 
			{
				echo "Bạn phải điền hết các nội dung được yêu cầu";
			}
			}
		?>
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Vũ trụ di động</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/include.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/m-head.css">
<link rel="stylesheet" type="text/css" href="css/khuyen-mai.css">

</head>
<body>
 <a href="#" class="back-to-top">Back to Top</a>
	<div class="container">
	<!--------- START HEADER----------------->
		<div id="header"></div>
		<!--------------***************************-------------->
		<div class="section">
			<aside class="homebanner">
			<div id="myCarousel" class="carousel slide mycarousel" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/samples/banner-01-10-15-aa.jpg" alt="Chania">
					
					</div>
					<div class="item">
						<img src="images/samples/banner-01-10-15-bb.jpg" alt="Chania">
					
					</div>
					<div class="item">
						<img src="images/samples/banner-01-10-15-cc.jpg" alt="Flower">
					
					</div>
					<div class="item">
						<img src="images/samples/banner-01-10-15-dd.jpg" alt="Flower">
					
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control my-carousel-control" href="#myCarousel" role="button"
					data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
					class="sr-only">Previous</span> </a> <a class="right carousel-control my-carousel-control"
					href="#myCarousel" role="button" data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
				</a>
			</div>
			</aside>
			<div class="clr"></div>
			<!-----START CONTENT --------->
			<ul class="homeproduct">
			<?php 
						$conn=mysqli_connect("localhost","root","","didong");
						mysqli_set_charset($conn,"utf8");
						if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$sql="SELECT * FROM `sanpham`,`image` WHERE sanpham.sale_off > 0 and sanpham.id_sanpham=image.id_sanpham LIMIT 9 ";
						$query=mysqli_query($conn,$sql);
						//echo $sql;
						if($query==false)
						{die(mysqli_error($conn));
						}
						mysqli_close($conn);
						while ($data = mysqli_fetch_assoc($query) )
						{
							$img=$data['link_img'];
							$title=$data['tensp'];
						$ID=$data['id_sanpham'];
						$author=$data['hang'];
						$price=$data['price'];
						$thongso=$data['thongso'];
						$sale=$data['sale_off'];
						?>
					<li>
					
					<div id="home">
				
						<a class="image_on" href="dtdd.php?id=<?php echo $ID; ?>">
						<img src="images/baner/<?php echo $img.".jpg"; ?>."  height="180" />
							<h3><?php echo $title; ?></h3>
							<strong class="orange"><?php echo number_format($price); ?> </strong>
							<strong><?php  echo "Giảm giá: " ; echo number_format($sale); ?></strong>
							<div class="clr"></div>
						</a>
						<button onclick="window.location.href='dtdd.php?id=<?php echo $ID; ?>'" type="button">Mua ngay</button>
						<label>Hơn 1.300 lượt mua tuần qua</label>
						<a href="dtdd.php?id=<?php echo $ID; ?>" class="image_off">
							<figure class="bginfo">
							<h3><?php echo $title; ?></h3>
							<strong><?php echo number_format($price); ?></strong>
							
							<div class="border_bottom"></div>
							<span><?php echo $thongso; ?> </span> </figure>
						</a>
					</div>
					
				</li>
				<?php } ?>
			</ul>
			<ul class="homeproduct">
			<?php for($i=0; $i<3; $i++){?>
				<li>
					<div id="home">
						<a href="dtdd" class="image_on">
							<img src="images/samples/microsoft-lumia-430-2.jpg" height="180" alt="logo" />
							<h3><?php echo $title; ?></h3>
							<strong class="orange"><?php echo $price; ?></strong>
							<div class="clr"></div>
						</a>
						<button href="#" type="button">Mua ngay</button>
						<label>Hơn 1.300 lượt mua tuần qua</label>
						<a href="dtdd" class="image_off">
							<figure class="bginfo">
							<h3><?php echo $title; ?></h3>
							<strong><?php echo $price; ?></strong>
							<div class="border_bottom"></div>
							<span><?php echo $thongso; ?></span> </figure>
						</a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="clr"></div>
		<div class="moreproduct">
			<a href="/khuyen-mai"> Khuyến mãi tháng 10</a> <a href="/dtdd"><span>200</span>điện thoại</a> <a
				href="/may-tinh-bang"><span>37</span> máy tính bảng</a> <a href="/laptop"><span>45</span> laptop</a>
			<a href="/phu-kien"><span>739</span>phụ kiện</a> <a href="/may-doi-tra"><span>65.511</span> máy
				đã sử dụng</a>
		</div>
		<br>
	</div>
	</div>
	<!--footer>
	<div class="rowfoot2">
		<div class="ctn">
			<p>
				© 2015. Công ty cổ phần Vũ Trụ Di Động - HEDSPI K57
				<br> Văn phòng:<a href="/lien-he"><i class="icontgdd-map"></i>Đại học Bách Khoa
						Hà Nội, số 1 Đại Cồ Việt, q. Hai Bà Trưng.</a><br>
			
			</p>
			<div class="ssl">
				<!-span>Thực hành lập trình WEB</span>
			</div>
		</div>
	</div>
	<br>
	
	</footer--->
	<div class="media-line" style="width: 100%;"></div>
	<!--div class="media-line" style="width: 320px;"></div>
	<div class="media-line" style="width: 480px;"></div>
	<div class="media-line" style="width: 768px;"></div>
	<div class="media-line" style="width: 1024px;"></div>
	
	<div class="media-line" style="width: 1680px;"></div-->
</body>
</html>
