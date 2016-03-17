<?php
	session_start();
	
	if(!isset($_SESSION['name'])) header('location:main-p.php');
	if($_SESSION['role']==0)header('location:main-p.php');
					
	$username=$_SESSION['name'];
	$conn=mysqli_connect("localhost","root","","didong");
	mysqli_set_charset($conn,"utf8");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$sql="select * from customers WHERE cus_id =" .$_SESSION['id'];
	$query=mysqli_query($conn,$sql);
	/*if(mysqli_num_rows($query) == 0)
		{
			 header('location:dat-hang.php');
		}
		*/
	$data=mysqli_fetch_assoc($query);
	$name=$data['cus_name'];
	$role=$data['role'];
	mysqli_close($conn);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Vũ trụ di động | Đơn hàng của tôi</title>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/include.js"></script>
<link rel="stylesheet" type="text/css"
	href="css/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/dat-hang.css">
		<link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body>
	<div class="container">
		<div id="header"></div>
		<!--------- HEADER----------------->
		<section class="">
		<div class="wrap-middle-pd">
			<div id="csvc" class="p-cart-info" ng-app="myApp"
				ng-controller="customersCtrl">
				<h4 class="title">
					<span>Tìm kiếm khách hàng </span>
					<span class="border"></span>
				</h4>
				<div class="main-5 a-input">
				<?php
					if(isset($_POST['submit']))
					{
						$title=$_POST['title'];
						$image=$_POST['image'];
						$author=$_POST['author'];
						$price=$_POST['price'];
						$number_page=$_POST['number_page'];
						$cover=$_POST['cover'];
						$description=$_POST['description'];
						$store=$_POST['store'];
						$sale_off=$_POST['sale_off'];
						$company=$_POST['company'];
						$publish_date=$_POST['publish_date'];
						$publishing_house=$_POST['publishing_house'];
						if($title&&$image&&$author&&$price&&$number_page&&$store&&isset($_POST['category']))
						{
							$sql="INSERT INTO books VALUE('','$title','$image','$author','$price','$cover','$company','$publishing_house','$publish_date','$number_page','$description','$sale_off','$store')";
							$query=mysqli_query($conn,$sql);
							$book_ID=mysqli_insert_id($conn);
							foreach($_POST['category'] as $theloai)
							{
								$sql="INSERT INTO book_cate VALUE('$book_ID','$theloai')";
								$query=mysqli_query($conn,$sql);
							}
							echo "<span style='color: #F0601C'>Bạn đã thêm sách mới thành công !</span>";
						}
						else echo"<span style='color: #F0601C'>Bạn phải nhập đầy đủ các thông tin yêu cầu</span>";
					}
				?>
					<form id="upload-new-book" action="upload_book.php" method="post">
						<fieldset id="field-box">
						<ul>
							<li>
						<h4 class="orange">Thông tin sách</h4>
						</li>
							<li class="info">
								<div class = "book"> 
									<label for="book name">Tên sách </label> </br>
									<input type="text" name="title"  title="Tên sách" style="width: 350px;" class="form-text" maxlength="50" >
								</div>
								<div class = "image "> 
									<label for="image">File ảnh bìa </label> </br>
									<input type="text" name="image" title="Ảnh bìa" class="form-text" maxlength="50">
								</div>								
							</li>
							<li class="info">
								<div class="author"> 
									<label for="author-name">Tên tác giả </label> </br>
									<div class = "author-box" >
										<input type="text" name="author" title="Tên tác giả" style="width: 350px;"class="form-text" maxlength="30">
									</div>
								</div>
								<div class="input-price"> 
									<label for="price">Giá tiền</label> </br>
									<div class = "price-box" >
										<input type="text" name="price" title="Giá tiền" class="form-text" maxlength="10"> .000 &nbsp;₫
									</div>
								</div>
								<div class="pages"> 
									<label for="pages">Số trang </label> </br>
									<div class = "page-box" > 
										<input type="text" name="number_page" title="Số trang" class="form-text" maxlength="5">
									</div>
								</div>
								<div class = "cover">
									<label for="cover"></label> </br>
									<div class="left"><input type="radio" name="cover" value="0" checked>Bìa mềm</div>
									<div class="right"><input type="radio" name="cover" value="1">Bìa cứng</div>
								</div>
							</li>
							<li class="info">
								<div class="category"> 
									<label for="category">
										<div class="inner-head">
											<h5>Thể loại</h5>
										</div>
									</label> </br>
									<table style="width:100%">
										<tbody>
									  <tr>
										<td><input type="checkbox" name="category[]" value="1"> Sách Tiếng Anh</td>
										<td><input type="checkbox" name="category[]" value="5"> Sách Kỹ Năng Sống - Nghệ Thuật Sống</td> 
										<td><input type="checkbox" name="category[]" value="4"> Sách Chuyên Ngành</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="3"> Sách Kinh Tế</td>
										<td><input type="checkbox" name="category[]" value="6"> Sách Giáo Khoa - Tham Khảo</td> 
										<td><input type="checkbox" name="category[]" value="9"> Sách Truyện Thiếu Nhi</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="7"> Sách Học Ngoại Ngữ - Từ Điển</td>
										<td><input type="checkbox" name="category[]" value="2"> Sách  Văn Học - Tiểu Thuyết</td> 
										<td><input type="checkbox" name="category[]" value="8"> Sách Cho Tuổi Mới Lớn</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="10"> Sách Thường Thức - Đời Sống</td>
										<td><input type="checkbox" name="category[]" value="13"> Sách Nuôi Dạy Con</td> 
										<td><input type="checkbox" name="category[]" value="12"> Sách Văn Hóa - Nghệ Thuật - Du Lịch</td>
									  </tr>
									  <tr>
										<td><input type="checkbox" name="category[]" value="11"> Truyện Tranh - Manga - Comic</td>
									  </tr>
									  <tbody>
									</table>
								</div>
							</li>
							<li class="info">
								<div class="description"> 
									<label for="sales-off">
											Miêu tả
									</label> </br>
									<textarea name="description" title="Miêu tả" maxlength="1000"></textarea>
								</div>
							</li>
						</ul>
						</fieldset>
						<fieldset id="field-box">
						<ul>
							<li>
								<h4 class="orange">Thông tin thêm</h4>
							</li>
							<li class="info">
								<div class="sales-off"> 
									<label for="sales-off">Khuyến mãi <i> (nếu có)</i></label> </br>
									<input type="text" name="sale_off" title="Khuyến mãi" class="form-text" maxlength="10"> %
								</div>
								<div class="store"> 
									<label for="store">Tồn kho</label> </br>
									<input type="text" name="store" title="Tồn kho" class="form-text" maxlength="10"> 
								</div>
							</li>	
							<li class="info">
								<div class="author"> 
									<label for="company">Công ty phát hành</label> </br>
									<div class = "author-box" >
										<input type="text" name="company" title="Công ty phát hành" class="form-text" maxlength="30">
									</div>
								</div>
								<div class="author"> 
									<label for="publishing_house">Nhà xuất bản</label> </br>
									<div class = "author-box" >
										<input type="text"  name="publishing_house" title="Nhà xuất bản" class="form-text" maxlength="30"> 
									</div>
								</div>
								<div class="dates"> 
									<label for="dates">Ngày phát hành <i>(Y-m-d)</i> </label> </br>
									<div class = "page-box" > 
										<input type="text" name="publish_date" title="Số trang" class="form-text" maxlength="30">
									</div>
								</div>
							</li>
							
								
						</ul>
						</fieldset>
						<input type="submit" name="submit" value="Tạo sách mới" class="signin-button">
					</form>				
				</div>
			</div>
		</div>
		<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("db/customer.php").then(function (response) {$scope.names = response.data.records;});
    $scope.toggleGuess=function(){
            if($scope.query=='') $('tr').hide();
            else $('tr').show(); }
});
</script> </section>
	</div>
</body>
</html>