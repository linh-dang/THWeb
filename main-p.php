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
<link rel="stylesheet" type="text/css" href="css/main-pages.css">

</head>
<body>
	<!--------- START HEADER----------------->
	<div class="container">
		
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
			<?php for($i=0; $i<3; $i++){?>
				<li>
					<div id="home">
						<a href="dtdd" class="image_on">
							<img src="images/samples/oppo-r7-lite.jpg" height="180" alt="logo" />
							<h3>OPPO R7 Lite</h3>
							<strong class="orange">6.990.000₫</strong>
							<div class="clr"></div>
							<label>Hơn 1.300 lượt mua tuần qua</label>
						</a>
						<button onclick="dtdd.php" type="button">Mua ngay</button>
						<a href="dtdd" class="image_off">
							<figure class="bginfo">
							<h3>OPPO R7 Lite</h3>
							<strong>6.990.000₫</strong>
							<div class="border_bottom"></div>
							<span>Màn hình: HD, 5.0 inches</span> <span>HĐH: Android 5.1 (Lollipop)</span> <span>CPU: 8
								nhân, RAM 2GB</span> <span>Camera: 3.0MP</span> <span>Pin: 2320mAh</span> </figure>
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
							<h3>OPPO R7 Lite</h3>
							<strong class="orange">6.990.000₫</strong>
							<div class="clr"></div>
							<label>Hơn 1.300 lượt mua tuần qua</label>
						</a>
						<button href="#" type="button">Mua ngay</button>
						<a href="dtdd" class="image_off">
							<figure class="bginfo">
							<h3>OPPO R7 Lite</h3>
							<strong>6.990.000₫</strong>
							<div class="border_bottom"></div>
							<span>Màn hình: HD, 5.0 inches</span> <span>HĐH: Android 5.1 (Lollipop)</span> <span>CPU: 8
								nhân, RAM 2GB</span> <span>Camera: 3.0MP</span> <span>Pin: 2320mAh</span> </figure>
						</a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="clr"></div>
		<div class="moreproduct">
			<a href="/khuyen-mai"> Khuyến mãi tháng 10</a> <a href="/dtdd"><span>161</span>điện thoại</a> <a
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
