<?php
	session_start();
	if(isset($_POST['submit']))
		{
			if($_POST['search'])
			{
			$search=$_POST['search'];
			$str=" title LIKE '%$search%'";
			}
			else $str=" 0";
		}
	elseif(isset($_POST['timnangcao']))
		{
			if($_POST['title'])
			{
				$title=$_POST['title'];
				$strtitle=" title LIKE '%$title%'";
			}
			else $strtitle="1";
			if($_POST['author'])
			{
				$author=$_POST['author'];
				$strauthor="author LIKE '%$author%'";
			}
			else $strauthor="1";
			if($_POST['company'])
			{
				$company=$_POST['company'];
				$strcompany="company LIKE '%$company%'";
			}
			else $strcompany="1";
			if($_POST['publishing_house'])
			{
				$publishing_house=$_POST['publishing_house'];
				$strpublishing_house="publishing_house LIKE '%$publishing_house%'";
			}
			else $strpublishing_house="1";
			if(isset($_POST['category']))
			{
			$strcate="";
			foreach($_POST['category'] as $theloai)
				{
				$strcate=$strcate." OR book_cate.cate_ID ='$theloai'";
				}
			$str=" books.book_ID=book_cate.book_ID $strcate AND $strtitle AND $strauthor AND $strcompany AND $strpublishing_house";
			}
			else
			  $str=" $strtitle AND $strauthor AND $strcompany AND $strpublishing_house";			
		}
	else $str=" 0";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Kết quả tìm kiếm</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/left_content.css"/>
        <link rel="stylesheet" type="text/css" href="css/middle_content.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
		<link rel="stylesheet" href="css/upload_book.css">
		<style type="text/css">
			a:link{
				text-decoration:none;
				color:#05b2e9;
			}
			a:visited {
				color: #05b2e9;
			}
			a:hover {
				color: #3C3;
			}
			a:active {			
				color: #F00;
			}
		</style>
</head>
<body>
    <div class="top">
    	<center><a href="index.php"><img src="images/File-1414989219.png" alt="" width="1140" height="65" /></a></center>
	</div>
    <!--------- START HEADER----------------->
	<div class="header">
        <div id="homepage_icon"><a href="index.php"><abbr title="Home Page"><img src="images/Homepage_icon.jpg" width="80" height="97"/></abbr></a></div>
	  	<div class="search_area">
            <form action="search_result.php" method="post">
            	<div class="search_div"><input type="text" name="search" placeholder="Tìm theo tên sách" class="search"/></div>
            	<input name="submit" type="submit" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="search.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/<?php if(isset($_SESSION['role'])){if($_SESSION['role']==1) echo "admin_icon.png"; else echo"login_icon.png";}else echo"login_icon.png";?>" width="45" height="41" align="middle" /></div>
			<?php
				if(isset($_SESSION['name']))
				{
					if($_SESSION['role']==1)
					{
					?>
						<div class="login_text">Chào Admin</div>
						<div class="login_text"><a href="ad_account.php">Trang quản lý</a> | <a href="logout.php">Đăng Xuất</a></div>
					<?php					
					}
					else
					{
					?>
						<div class="login_text"> Chào <?php echo $_SESSION['name'];?> - <a href="logout.php">Log out</a></div>
						<div class="login_text"><a href="cus_account.php">Trang cá nhân</a> | <a href="cus_cart.php">Giỏ hàng</a></div>
					<?php
					}
				}
				else
				{
				?>
				<div class="login_text1"><a href="login.php">Đăng nhập</a> | <a href="registered.php">Đăng ký</a></div>
				<?php
				}
			?>  
            <div class="hotline"><img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size:12px">(8-21h kể cả T7,CN)</span></div>
        </div>
    </div>
    <br />
	<hr />
    <!--------- END HEADER ------------------>
    <div class="main">
    	<!----- START CONTENT --------->
        	<div class="start">
            	<span><a href="index.php">Trang chủ</a></span> / <strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong>
            </div>
            <!----- START left_content ------->
            <div class="left_content">
            	<div class="title_box1">DANH MỤC SÁCH</div>
                <div class="left_menu1">
                    <ul class="left_menu_content1">
						<li><a href="category.php?cate_ID=1">Sách Tiếng Anh</a></li>
                        <li><a href="category.php?cate_ID=2">Sách Văn Học - Tiểu Thuyết</a></li>
                        <li><a href="category.php?cate_ID=3">Sách Kinh Tế</a></li>
                        <li><a href="category.php?cate_ID=4">Sách Chuyên Ngành</a></li>
						<li><a href="category.php?cate_ID=5">Sách Kỹ Năng Sống - Nghệ Thuật Sống</a></li>
                        <li><a href="category.php?cate_ID=6">Sách Giáo Khoa - Tham Khảo</a></li>
                        <li><a href="category.php?cate_ID=7">Sách Học Ngoại Ngữ - Từ Điển</a></li>
                        <li><a href="category.php?cate_ID=8">Sách Cho Tuổi Mới Lớn</a></li>
                        <li><a href="category.php?cate_ID=9">Sách Truyện Thiếu Nhi</a></li>
						<li><a href="category.php?cate_ID=10">Sách Thường Thức - Đời Sống</a></li>
						<li><a href="category.php?cate_ID=11">Truyện Tranh, Manga, Comic</a></li>
						<li><a href="category.php?cate_ID=12">Sách Văn Hóa - Nghệ Thuật - Du Lịch</a></li>
                        <li style="border: none;"><a href="category.php?cate_ID=13">Sách Nuôi Dạy Con</a></li>
                    </ul>
                </div>
            </div>
            <!------- END left_content ------->
            
            <!------- START Middle_content ------->
          <div class="middle_content">
			<div class="title" id="no_border">
                	<p class="font_title">Kết quả tìm kiếm</p>
			</div>
			<div class="divider xam">
			</div>
                <div class="list_book1">
					<?php
					$conn=mysqli_connect("localhost","root","","bookstore");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT DISTINCT books.book_ID,books.title,books.author,books.price,books.sale_off,books.image FROM books,book_cate WHERE $str ORDER BY publish_date DESC";
					$query=mysqli_query($conn,$sql);
					echo $sql;
					$check=0;
					if($query==false) echo"<font color='red'>Không tìm thấy kết quả phù hợp</font>";
					elseif(!mysqli_num_rows($query)) echo"<font color='red'>Không tìm thấy kết quả phù hợp</font>";
					else{
					while ($data = mysqli_fetch_assoc($query) )
					{					
						$img=$data['image'];
						$title=$data['title'];
						$ID=$data['book_ID'];
						$author=$data['author'];
						$price=$data['price'];
						$sale_off=$data['sale_off'];
						?>
							<div class="book">
								<div class="book_icon"><a href="book_info.php?book_ID=<?php echo $ID;?>"><img src="images/<?php echo $img; ?>" width="130" height="182" /></a></div>
								<div class="book_title"><a href="book_info.php?book_ID=<?php echo $ID;?>"><?php echo $title;?></a></div>
								<div class="book_note"><?php echo $author; ?></div>
								<div class="book_cost"><?php $gia_ban=(int)($price*(100-$sale_off)/100); echo $gia_ban;?>.000₫</div>
								<div class="book_note">-<?php echo $sale_off;?>%</div>
							</div>
						<?php
						$check++;
						if(($check % 5)==0)
							{
								?><div class="clr"></div><?php
							}
					}
					}
					?>	
                </div>
				<div class="clr"></div>
            <!------- END Middle_content ------->
			</div>
	</div>
        <div class="clr"></div>
        <!--------------- FOOTER ------------------>
		<div class="footer">
       		<div class="leter_icon"><img src="images/Homepage/icon_sign.png" width="25" height="25" /></div>
			<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span style="font-weight:normal">Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
        	<div class="hand_icon"><img src="images/Homepage/hand-right-128.png" width="40" height="40" /></div>
        	<form>
            	<div class="input"><input type="text" name="input" class="input_class"/></div>
            	<input name="button" type="button" class="button_class" value="Đăng Ký - Nhận Tiện Ích" />
            </form>
             <div class="clr"></div>
            <p>© Đại Học Bách Khoa Hà Nội<br /><br />Lớp Thực Hành Cơ Sở Dữ Liệu - Việt Nhật B- K57<br />Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh, Đồng Xuân Mạnh</p>
        </div>
</body>
</html>
