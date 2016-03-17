<?php
session_start ();
?>

<?php
	 
if (isset ( $_POST ['login'] ))
{
  $u = $_POST ['username'];
  $p = $_POST ['password'];
  if ($u == NULL)
  {
    echo "Bạn phải nhập Tên đăng nhập<br />";
  }
  if ($p == NULL)
  {
    echo "Bạn phải nhập Mật khẩu<br />";
  }
  if ($u && $p)
  {
    $conn = mysqli_connect ( "localhost", "root", "", "didong" );
    if (mysqli_connect_errno ())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error ();
    }
    $sql = "select * from customers where username='" . $u . "' and password='" . $p . "'";
    $query = mysqli_query ( $conn, $sql );
    $data = mysqli_fetch_assoc ( $query );
    $check_login = mysqli_num_rows ( $query );
    
    if (mysqli_num_rows ( $query ) == 0)
    {
      
      // $check_login = mysql_num_rows;
      $err_login = "<font color='red'>Đăng nhập không hợp lệ hoặc tài khoản đã bị khóa</font>";
    } else
    {
      $_SESSION ["name"] = $u;
      $_SESSION ['id'] = $data ['cus_ID'];
      echo $data ['cus_ID'];
      $row = mysqli_fetch_assoc ( $query );
      $_SESSION ['role'] = $data['role'];
      header ( 'location:dat-hang.php' );
    }
    mysqli_close ( $conn );
  }
}
?>

<?php
if (isset ( $_POST ['adduser'] ))
{
  $username = $_POST ["username1"];
  $password = $_POST ["password1"];
  $repassword = $_POST ["re_password"];
  
  if ($username && $password && $repassword)
  {
    if ($password != $repassword)
    {
      $err_login= "Mật khẩu không khớp nhau";
    } else
    {
      if (strlen ( $username ) > 30 || strlen ( $username ) < 3)
      {
        $err_login = "Tên Đăng Nhập phải chứa từ 6 đến 30 kí tự";
      } else
      {
        if (strlen ( $password ) > 30 || strlen ( $password ) < 4)
        {
          $err_login= "Mật Khẩu phải chứa từ 6 đến 10 kí tự";
        } else
        {
          $conn = mysqli_connect ( "localhost", "root", "", "didong" );
          if (mysqli_connect_errno ())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error ();
          }
          mysqli_set_charset ( $conn, "utf8" );
          $namecheck = mysqli_query ( $conn, "select * from customers where username='$username'" );
          $count = mysqli_num_rows ( $namecheck );
          if ($count != 0)
          {
            $err_login = "Tên đăng nhập đã được sử dụng<br/>";
          } else
          {
            $l = 0;
            $active = 1;
            $conn = mysqli_connect ( "localhost", "root", "", "didong" );
            if (mysqli_connect_errno ())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error ();
            }
            $sql = "INSERT INTO `didong`.`customers` (`cus_ID`, `cus_name`, `phone`,`sex`, `email`, `address`, `birth`, `username`, `password`, `role`, `date`, `active`) VALUES (NULL, '', '','', '', '', '', '$username', '$password', '0', '', '')";
            mysqli_set_charset ( $conn, "utf8" );
            $query2 = mysqli_query ( $conn, $sql );
            
            if ($query2)
            {
              echo "Bạn đã đăng ký thành công!";
              ?>
<a href="main-p.php">Click here</a><?php
              echo " để chuyển đến trang chủ";
              die ();
            }
            
            mysqli_close ( $conn );
          }
        }
      }
    }
  } else
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
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="css/bootstrap-3.3.5-dist/js/bootstrap.js"></script>
<script src="js/include.js"></script>
<link rel="stylesheet" type="text/css"
	href="css/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/m-head.css">
		<link rel="stylesheet" type="text/css" href="css/main-pages.css">

</head>
<body>
<a href="#" class="back-to-top">Back to Top</a>
	<!--------- START HEADER----------------->
	<div class="container">
		<header>
		<div class="wrap-main">
			<form id="search-site" action="search" method="GET"
				>
				<input class="topinput" id="search-keyword" name="search"
					placeholder="Bạn tìm gì..." autocomplete="off" value="" type="text">
					<button class="btntop" type="submit">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
			
			</form>
			<nav> <a class="mobile" href="main-p?type=1"><i
				class="icontgdd-mobile"></i>Điện thoại</a> <a href="main-p?type=2"
				class="tablet"><i class="icontgdd-tablet"></i>Tablet</a> <a
				href="main-p?type=3" class="laptop"><i class="icontgdd-laptop"></i>Laptop</a>
			<a href="/didong/hoi-dap" class="ask"><i class="icontgdd-ask"></i>Hỏi
				đáp</a> <a href="/didong/khuyen-mai" class="promo"> <i
				class="icontgdd-promo"></i>Khuyến mãi
			</a>
<?php
if (isset ( $_SESSION ['name'] ))
{
  if ($_SESSION ['role'] == 1)
  {
    ?>
            <a href="admin-user-list" class="shoping-cart"> <img src="images/icon/admin-512.png" height="24"
						class="icon-user" width="25"></img>Quản lý
						</a>
					
						<a href="log-out" class="login"> <img src="images/icon/settings-512.png" height="24"
						class="icon-user" width="25"></img>Đăng xuất
						</a>
        <?php
  } else
  {
    ?>
             <a href="dat-hang" class="shoping-cart"> <img src="images/icon/shopping_cart_512.png" height="24"
						class="icon-user" width="25"></img>Giỏ hàng
						</a>
			<a href="log-out" class="login"> <img src="images/icon/settings-512.png" height="24"
						class="icon-user" width="25"></img>Đăng xuất</a>
        <?php
  }
} else
{
  ?>
                                            <a href=""
				data-toggle="modal" data-target="#log-in" data-backdrop="false"
				data-show="true" class="login"> <img src="images/icon/settings-512.png"
				height="24" class="icon-user" width="25"></img>Đăng nhập
			</a>
			<div class="modal fade in"
				<?php if (isset($check_login) && ($check_login == 0)) echo "style=\"display:block;\""?>
				id="log-in" tabindex="-1" role="dialog"
				aria-labelledby="Đăng nhập/ Đăng ký">
				<div class="modal-dialog" role="document" id="container">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title popup-title" id="myModalLabel">Đăng nhập/
								Đăng ký</h4>
						</div>
						<div class="modal-body " id="">
							<div id="emailLogin" class="left">
								<form id="form_login1" method="POST" action="main-p">
									<label class="ieLabel">User Name</label> <input name="username"
										id="login" placeholder="User Name" type="text"> <label
										class="ieLabel">Password</label> <input name="password"
										id="login" placeholder="Password" maxlength="30"
										type="password">
											<div id="login_remember_wrap">
												<input name="login_remember" id="login_remember"
													checked="checked" type="checkbox"> <label
													for="login_remember">Keep me logged in</label>
											
											</div>
    <?php
  if (isset ( $err_login ))
  {
    echo $err_login;
  }
  ?>
                                                                            <div
												class="clr"></div>
											<button type="submit" class="btn__" onclick="" name="login">Đăng
												nhập</button>
								
								</form>
							</div>
							<div id="emailLogin" class="right">
								<form id="form_login1" method="POST" action="main-p.php">
									<label class="ieLabel">User Name</label> <input
										name="username1" id="login" placeholder="User Name"
										type="text"> <label class="ieLabel">Password</label> <input
										name="password1" id="login" placeholder="Password"
										maxlength="30" type="password"> <label class="ieLabel">Rewrite
												Password</label> <input name="re_password" id="login"
											placeholder="Password" maxlength="30" type="password">
    <?php
  if (isset ( $err_login ))
  {
    echo $err_login;
  }
  ?>
                                                                                                <div
													class="clr"></div>
												<button type="submit" class="btn__" onclick=""
													name="adduser">Đăng Kí</button>
								
								</form>
							</div>
							<div class="clr"></div>
						</div>
					</div>
				</div>
			</div>
                                                                            <?php
}
?>  
 </nav>
		</div>
		</header>
		<!--------------***************************-------------->
		<div class="section">
			<aside class="homebanner">
			<div id="myCarousel" class="carousel slide mycarousel"
				data-ride="carousel">
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
				<a class="left carousel-control my-carousel-control"
					href="#myCarousel" role="button" data-slide="prev"> <span
						class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a> <a class="right carousel-control my-carousel-control"
					href="#myCarousel" role="button" data-slide="next"> <span
						class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</aside>
			<div class="clr"></div>
			<!-----START CONTENT --------->
			<ul class="homeproduct">
<?php
$conn = mysqli_connect ( "localhost", "root", "", "didong" );
mysqli_set_charset ( $conn, "utf8" );
if (mysqli_connect_errno ())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error ();
}
$sql = "SELECT * FROM `sanpham`,`image` WHERE image.loai=1 and sanpham.id_sanpham=image.id_sanpham LIMIT 12 ";
// $query=mysqli_query($conn,$sql);
if (isset ( $_GET ['type'] ))
{
  $type = " and typesp=" . $_GET ['type'];
  $sql = "SELECT * FROM `sanpham`,`image` WHERE image.loai=1 and sanpham.id_sanpham=image.id_sanpham" . $type . " LIMIT 12";

}
$query = mysqli_query ( $conn, $sql );
if ($query == false)
{
  die ( mysqli_error ( $conn ) );
}
mysqli_close ( $conn );
while ( $data = mysqli_fetch_assoc ( $query ) )
{
  $img = $data ['link_img'];
  $title = $data ['tensp'];
  $ID = $data ['id_sanpham'];
  $author = $data ['hang'];
  $price = $data ['price'];
  $thongso = $data ['thongso'];
  $sale = $data ['sale_off'];
  ?>
                                                                                                        <li>
					<div id="home">
						<a class="image_on" href="dtdd.php?id=<?php echo $ID; ?>"> <img
							src="images/baner/<?php echo $img . ".jpg"; ?>" height="180" />
							<h3><?php echo $title; ?></h3> <strong class="orange"><?php echo number_format($price); ?> </strong>
							<div class="clr"></div>
						</a>
						<button
							onclick="window.location.href = 'dtdd.php?id=<?php echo $ID; ?>'"
							type="button">Mua ngay</button>
						<label>Hơn 1.300 lượt mua tuần qua</label> <a
							href="dtdd.php?id=<?php echo $ID; ?>" class="image_off"> <figure
								class="bginfo">
							<h3><?php echo $title; ?></h3>
							<strong><?php echo number_format($price); ?></strong>
							<div class="border_bottom"></div>
							<span><?php echo $thongso; ?> </span> </figure>
						</a>
					</div>
				</li>
                                                                                                    <?php } ?>
                                                                                                </ul>

		</div>
		<div class="clr"></div>
		<div class="moreproduct">
			<a href="/khuyen-mai"> Khuyến mãi tháng 12</a> <a href="/dtdd"><span>200</span>điện
				thoại</a> <a href="/may-tinh-bang"><span>37</span> máy tính bảng</a>
			<a href="/laptop"><span>45</span> laptop</a> <a href="/phu-kien"><span>739</span>phụ
				kiện</a> <a href="/may-doi-tra"><span>65.511</span> máy đã sử dụng</a>
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
