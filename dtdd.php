<?php
	session_start();
	$ID=$_GET['id'];
	if(!$ID) header('location:main-p.php');
						$conn=mysqli_connect("localhost","root","","didong");
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						mysqli_set_charset($conn,"utf8");
						
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Vũ trụ di động</title>
<!--link rel="stylesheet" type="text/css" href="css/content.css"/>
<link rel="stylesheet" type="text/css" href="css/1.css" /-->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="js/include.js"></script>

<link rel="stylesheet" type="text/css"
	href="css/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/dtdd.css">

</head>
<body>
	 <a href="#" class="back-to-top">Back to Top</a>
	<div class="container">
		<div id="header"></div> 
		<!--------- HEADER----------------->
		<div class="wrapbread">
			<div class="rowtop">
				<div class="clr"></div>
				<?php $sql="SELECT * FROM sanpham,image WHERE sanpham.id_sanpham = image.id_sanpham AND sanpham.id_sanpham = $ID";
						$query=mysqli_query($conn,$sql);
						if($query==false)
						{die(mysqli_error($conn));
						}
						mysqli_close($conn);
						while ($data = mysqli_fetch_assoc($query) )
						{
							$img=$data['image'];
							$title=$data['tensp'];
						//$ID=//$data['id_sanpham'];
						$author=$data['hang'];
						$price=$data['price'];
						$thongso=$data['thongso'];
						$sale_off=$data['sale_off'];
						?>
				
				<h1><?php echo $title; ?></h1>
				<span>Hơn 3.800 lượt mua tuần qua</span>
				<div class="clr"></div>
			</div>
		</div>
		<section class="">
		<div class="boxright">
			<aside class="picture "> 
			
			<img alt="Samsung Galaxy S6 Edge Plus"
				src="images/<?php echo $img; ?>" height="533"
				width="300">
				<ul class="ls p-select-color">
				
					<li><a class="active" href="javascript:;" data-toggle="modal" data-target="#image-modal"
						title=" Điện thoại Samsung Galaxy J5 J500 White"> <img
							src="http://img.mediamart.vn/Product/tiny_27077_17913_dien-thoai-samsung-galaxy-j5.jpg"
							alt=" Điện thoại Samsung Galaxy J5 J500 White"
							title=" Điện thoại Samsung Galaxy J5 J500 White"><span></span></a>
						
						<!-- Modal -->
						<div class="modal fade" id="image-modal" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header" >
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Samsung Galaxy S6 Edge Plus</h4>
									</div>
									<div class="modal-body">
									<img alt="Samsung Galaxy S6 Edge Plus"
											src="images/samsung-galaxy-s6-edge-plus-400x533.png" >
									</div>
									
								</div>
							</div>
						</div></li>
				</ul></aside>
			<div class="wrap-right-pd">
				<div class="pro-detail">
				
					<div class="p-model">	
						<strong><?php echo $title;?> </strong>
						<strong><?php echo number_format($price);?> </strong>
						<span><?php echo "Ma hang :"; echo $ID; ?></span>
						<span style="color: #ff8a00; font: bold 12px/27px Arial;">Còn hàng</span>
					</div>
					<div class="border-line"></div>
					<div class="p-spec" itemprop="description">
						<p>
						- Bộ xử lý: 4 nhân 1.2GHz, Qualcomm MSM8916 Snapdragon 410<br> -
								Màn hình: 5.0 inch, HD 720 x 1280 pixels<br> - Bộ nhớ: 8GB, RAM:
								Màn hình: 5.0 inch, HD 720 x 1280 pixels<br> - Bộ nhớ: 8GB, RAM:
									1,5GB<br> - Thẻ nhớ ngoài lên đến 64GB<br> - Camera chính:
											13MP, 1080p @30fps/ Camera phụ: 5MP<br> - Dual-Sim, 4G LTE,
												Wifi, bluetooth, GPS<br> - Hệ điều hành: Android 5.1
													Lollipop<br> - Pin: 2600mAh 
						</p>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
					<div class="border-line"></div>
					<ul class="ls p-program">
						<li><i class="icondetail-check"></i>Mua phụ kiện, điện thoại di
							động, máy tính bảng, Đổi mới miễn phí trong 30 ngày. <span>
								<a>Xem chi tiết</a>
							</span>.</li>
						<li><i class="icondetail-check"></i>Chuyên trang Ưu đãi trả góp
							0%, Tặng quà trị giá đến 590.000đ với, ANZ, ACS, PPF, FECredit..
						</li>
						<li><i class="icondetail-check"></i> Chính sách vận chuyển miễn
							phí toàn miền Bắc đến 200km. Chi tiết xem <span>tại đây</span>.</li>
					</ul>
					<div class="clr"></div>
					<a href="addcart?item=<?php echo $ID;?>" class="buynow">Mua ngay<span>Giao
							tận nơi hoặc nhận ở cửa hàng</span></a>
					<div class="clr"></div>
				</div>
			</div>
			<div class="clr"></div>
						
						<?php
						}
						?>
		</div>
		
		</section>
		
	</div>
</body>
</html>