<?php
	session_start();
	if(isset($_GET['search']))
		{
			if($_GET['search'])
			{
			$search=$_GET['search'];
			$str=" AND tensp LIKE '%$search%'";
			}
			else $str=" 0";
		}			
	else $str=" 0"; 
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
                <link rel="stylesheet" type="text/css" href="css/main-pages.css">

                    </head>
                    <body>
                        <!--------- START HEADER----------------->
                    <div class="container">
                    <div id="header"></div>
               
                                                                                            <!--------------***************************-------------->
                                                                                            <div class="section">
                                                                                                
                                                                                                <!-----START CONTENT --------->
                                                                                                <ul class="homeproduct">
<?php
					$conn=mysqli_connect("localhost","root","","didong");
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					mysqli_set_charset($conn,"utf8");
					$sql="SELECT DISTINCT * FROM sanpham, image WHERE sanpham.id_sanpham = image.id_sanpham ".$str;
					$query=mysqli_query($conn,$sql);
			
					$check=0;
					if($query==false) echo"<font color='red'>Không tìm thấy kết quả phù hợp</font>";
					elseif(!mysqli_num_rows($query)) echo"<font color='red'>Không tìm thấy kết quả phù hợp</font>";
					else{
					while ($data = mysqli_fetch_assoc($query) )
					{					
						$img=$data['link_img'];
						$title=$data['tensp'];
						$ID=$data['id_sanpham'];
						$price=$data['price'];
						$sale_off=$data['sale_off'];
						$hang=$data['hang'];
						$thongso=$data['thongso'];
						?>                                                                                  
																											<li>

                                                                                                            <div id="home">

                                                                                                                <a class="image_on" href="dtdd.php?id=<?php echo $ID; ?>">
                                                                                                                    <img src="images/baner/<?php echo $img.".jpg"; ?>."  height="180" />
                                                                                                                    <h3><?php echo $title; ?></h3>
                                                                                                                    <strong class="orange"><?php echo number_format($price); ?> </strong>
                                                                                                                    <div class="clr"></div>
                                                                                                                </a>
                                                                                                                <button onclick="window.location.href = 'dtdd.php?id=<?php echo $ID; ?>'" type="button">Mua ngay</button>
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
																												<?php
						$check++;
						if(($check % 4)==0)
							{
								?><div class="clr"></div><?php
							}
					}
					}
					?>	
                                                                                                 
                                                                                                     <!--?php } ?--> 
                                                                                                </ul>
                                                                                                
                                                                                            </div>
                                                                                            <div class="clr"></div>
                                                                                            <div class="moreproduct">
                                                                                                <a href="/didong/khuyen-mai"> Khuyến mãi tháng 12</a> <a href="main-p?type=1"><span>200</span>điện thoại</a> <a
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
                                                                                            
                                                                                                <!--/footer--->
                                                                                                < div class="media-line" style="width: 100%;"></div>
                                                                                                <!--div class="media-line" style="width: 320px;"></div>
                                                                                                <div class="media-line" style="width: 480px;"></div>
                                                                                                <div class="media-line" style="width: 768px;"></div>
                                                                                                <div class="media-line" style="width: 1024px;"></div>
                                                                                                
                                                                                                <div class="media-line" style="width: 1680px;"></div-->
																								
                                                                                                </body>
                                                                                                </html>

