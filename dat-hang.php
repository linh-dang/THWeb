
<?php
	session_start();
	
	//Kiểm tra có submit giỏ hàng hay ko
	/*	if(isset($_POST['cap_nhat']))
			{
			 foreach($_POST['qty'] as $key=>$value)
			 {
			  if( ($value == 0) and (is_numeric($value)))
			  {
			   unset ($_SESSION['cart'][$key]);
			  }
			  elseif(($value > 0) and (is_numeric($value)))
			  {
			   $_SESSION['cart'][$key]=$value;
			  }
			 }
			 header("location:dat-hang.php");
			}
		*/
	//end kiểm tra
	//kiem tra  dang nhap
	
	if(!isset($_SESSION['name'])) header('location:main-p.php');
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
	$sex=$data['sex'];
	$phone=$data['phone'];
	$email=$data['email'];
	$address=$data['address'];
	$birth=$data['birth'];
	$password=$data['password'];
	$role=$data['role'];
	mysqli_close($conn);
?>

<?php
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
					  //echo '(Bạn chưa có sản phẩm nào trong giỏ hàng)';
					 } else {
					  $items = $_SESSION['cart'];
					//  echo '(Đang có '.count($items).' sản phẩm)';
					 }
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
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css"
	href="css/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/dat-hang.css">

</head>
<body>
	<div class="container">
		<div id="header"></div>
		<!--------- HEADER----------------->
		<section class="">
		<div class="wrap-middle-pd">
			<form action="order" method="post" id ="order_from" >
				<div class="p-cart-info fl_left">
					<h4 class="title">
						<span>Thông tin khách hàng</span>
						<span class="border"></span>
					</h4>
					<table class="p-cart-customer">
						<tbody>
							<tr>
								<td valign="top">Email<span class="require">(*)</span>
								</td>
								<td><input name="Email" value="<?php echo $email ;?>"
									data-val-required="- Chưa nhập email?"
									data-val-regex-pattern="^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$"
									data-val-regex="- Chưa đúng định dạng email?" data-val="true"
									type="text"> <span class="field-validation-valid"
											data-valmsg-for="UserName" data-valmsg-replace="true"></span></td>
							</tr>
							<tr>
								<td valign="top">Họ và tên<span class="require">(*)</span>
								</td>
								<td><input name="FullName" value="<?php echo $name ;?>"
									data-val-required="- Chưa nhập họ và tên?" data-val="true"
									type="text"> <span class="field-validation-valid"
											data-valmsg-for="FullName" data-valmsg-replace="true"></span></td>
							</tr>
							<tr>
								<td valign="top">Số điện thoại<span class="require">(*)</span>
								</td>
								<td><input name="Phone" value="<?php echo $phone ;?>"
									data-val-required="- Chưa nhập số điện thoại?"
									data-val-regex-pattern="[0-9]+"
									data-val-regex="- Điện thoại phải là số!" data-val="true"
									type="text"> <span class="field-validation-valid"
											data-valmsg-for="Phone" data-valmsg-replace="true"></span></td>
							</tr>
							<tr>
								<td colspan="2" valign="top">Địa chỉ nhận hàng</td>
							</tr>
							<tr>
								<td colspan="2"><textarea name="address" 
										placeholder="Vui lòng cho chúng tôi biết thời gian nhận hàng trong ngày hoặc ghi chú thêm ....."
										data-val-required="- Chưa nhập địa chỉ nhận hàng?"
										data-val="true"><?php echo $address ;?></textarea> <span
										class="field-validation-valid" data-valmsg-for="Message"
										data-valmsg-replace="true"></span></td>
							</tr>
							<tr>
								<td colspan="2" valign="top"><input name="chinhsach"
									value="chinhsach" checked="checked" class="chinhsach"
									type="checkbox"> Tôi đồng ý với các điều khoản của công ty bán
										hàng </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="m-update-cart">
					<div class="p-cart-info fl_right">
						<h4 class="title">
							<span>Thông tin giỏ hàng</span>
							<span class="border"></span>
						</h4>
						<div class="scroll_cartorder">
				
							<table class="p-cart-order" id="table-1">
								<thead>
									<tr>
										<th style="width: 115px;">Ảnh</th>
										<th>Tên</th>
										<th style="width: 16%">Giá khuyến mại</th>
										<th style="width: 7%;">Số lượng</th>
										<th style="width: 10%;" >Thành tiền</th>
										
									</tr>
								</thead>
								<tbody>	
								<?php
								$ok=1;
								$total=0;
								if(isset($_SESSION['cart']))
								{
								 foreach($_SESSION['cart'] as $k => $v)
								 {
								  if($v)
								  {
								   $ok=2;
								  }
								 }
								}
								if($ok == 2)
								{
									$i=0;
									foreach($_SESSION['cart'] as $key => $value)
									{
									if($_SESSION['cart'][$key])
									 $item[$i]=$key;
									 $i++;
									}
									$str=implode(",",$item);
									$connect=mysqli_connect("localhost","root","","didong") or die("Can not connect database");
									mysqli_set_charset($connect,"utf8");
									$sql2="select * from sanpham where id_sanpham in ($str)";
									$query2=mysqli_query($connect,$sql2);
									if($query2==false)
										{
										die(mysqli_error($connect));
										}									
									while($row=mysqli_fetch_assoc($query2))
									{
									?>
									
									<tr>
										<td>
											<a
											href="dtdd.php?id=<?php echo $row['id_sanpham'];?>"
											title="<?php echo $row['tensp'];?>"
											target="_blank"> <img
												src="images/<?php echo $row['image'];?>"
												title="<?php echo $row['tensp'];?>"></a></td>
										<td><a href="dtdd.php?id=<?php echo $row['id_sanpham'];?>"> <?php echo $row['tensp'];?> </a></td>
										<td>
											<p class="price1"> <?php $gia_ban=$row['price']; echo number_format($row['price']);?></p>
										</td>
										<td><input name="num" class="quantity-input" value="<?php echo $_SESSION['cart'][$row['id_sanpham']];?>"  type="number"></td>
										<td>
											<p class="price3"><?php $gia_ban*$_SESSION['cart'][$row['id_sanpham']];echo number_format($gia_ban );?></p>
										</td>
										
									</tr>
								<?php
									$total+=$gia_ban*$_SESSION['cart'][$row['id_sanpham']];
									}
									mysqli_close($connect);
								}
								else
								{
									echo" Bạn không lua chon san pham nào trong giỏ hàng";
								}
								?>
								</tbody>
							</table>
						</div>
						<table class="p-cart-order">
							<tbody>
								<tr>
									<td style="width: 100px; font: bold 13px Arial;">
									<a href="del.php" style="color: red"  >Xoá đơn hàng</a>
									</td>
									<td
										style="text-align: right; width: 240px; text-transform: uppercase; font: bold 13px Arial;">
										<span>Tổng giá trị thanh toán:</span>
									</td>
									<td style="text-align: right; width: 150px;">
										<p class="price3"><?php echo number_format($total); ?> đ</p>
										<p
											style="color: #999999; text-align: center; font-weight: normal;">(Đã
											gồm VAT)</p>
									</td>
								</tr>
							</tbody>
						</table>
					
					</div>
					<div class="clr"></div>
					<div class="p-cart-info">
						<h4 class="title">
							<span>Phương thức thanh toán</span>
							<span class="border"></span>
						</h4>
						<ul class="method-pay ls">
							<li><input id="radioMethodPay1" class="radio_mp"
								name="PaymentMethod" value="method1" checked="checked"
								type="radio"> Thanh toán tiền mặt <a href="" target="_blank"
									style="color: #ff0000; text-decoration: underline;">(Xem chi
										tiết)</a></li>
							<li><input id="radioMethodPay2" class="radio_mp"
								name="PaymentMethod" value="method2" type="radio"> Thanh toán
									chuyển khoản ngân hàng <a href="" target="_blank"
									style="color: #ff0000; text-decoration: underline;">(Xem chi
										tiết)</a>
									<table class="radioMethodPay2 mp_detail"
										style="display: none; border: none; width: 100%;">
										<tbody>
											<tr>
												<td colspan="3">Đơn vị thụ hưởng: Công ty Cổ phẩn XXXXX
													Việt Nam</td>
											</tr>
											<tr>
												<td><span>NGÂN HÀNG</span></td>
												<td><span>SỐ TÀI KHOẢN</span></td>
												<td><span>ĐỊA CHỈ NGÂN HÀNG</span></td>
											</tr>
											<tr>
												<td>Ngân hàng TMCP Quân đội - Chi nhánh Hoàn Kiếm</td>
												<td>057 110XXXXXXXXXXXXXXX</td>
												<td>28 XXXXXXXX - Hoàn Kiếm – Hà Nội</td>
											</tr>
										</tbody>
									</table></li>
							<li><input id="radioMethodPay3" class="radio_mp"
								name="PaymentMethod" value="method3" type="radio"> Cà thẻ tại
									nhà</li>
						</ul>
						<div class="p-cart-process">
							
							
									<input type="hidden" name="total" value="<?php echo $total;?>">
									<input type="hidden" name="cus_id" value = <?php echo $_SESSION['id']; ?>>
									<input id="btnOrder" type="submit" name="dat_hang" value="GỬI ĐƠN HÀNG">
						</div>
						</form>
						
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
					<div class="clr"></div>
				</div>
				
				
				<div id="csvc" class="p-cart-info">
			
					<h4 class="title">
						<span>Đơn hàng của tôi </span>
						<span class="border"></span>
						
					</h4>
					<table class="p-cart-order">
						<tbody>
							<tr>
								<th style="width: 9%;">Đơn hàng</th>
								<th>Ngày mua</th>
								<th style="width: 18%;">Người nhận</th>
								<th style="width: 18%;">Tổng tiền</th>
								<th style="width: 18%;">Trạng thái</th>
								<th></th>
							</tr>
							<?php 
								$conn=mysqli_connect("localhost","root","","didong");
								mysqli_set_charset($conn,"utf8");
						if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
								$sql3= "select order_ID,orders.date,cus_name,total,status from orders,customers where orders.cus_id = customers.cus_id and customers.cus_id = ".$_SESSION['id'] ;
								
								$query=mysqli_query($conn,$sql3);
								if($query==false)
								{die(mysqli_error($conn));
									}
								//mysqli_close($conn);
								while ($data = mysqli_fetch_assoc($query) )
								{
									$orderid=$data['order_ID'];
									$ngaymua=$data['date'];
									$tenngnhan=$data['cus_name'];
									$tongtien=$data['total'];
									$trangthai=$data['status'];
								?>
					
							<tr>
								<td><a title="Xem đơn hàng" href="#"><?php echo $orderid; ?></a></td>
								<td><strong><?php echo $ngaymua; ?></strong></td>
								<td><?php echo $tenngnhan; ?></td>
								<td> <span style="color: #090;"> <?php echo number_format($tongtien,0,",","."); ?> </span>
								</td>
								<td ><a title="Xem đơn hàng" href="don-hang">
												<em> <?php if(!$trangthai) echo "Chưa "; ?>Hoàn Thành</em>&nbsp;
									</a></td>
								<td> <a href="del2?id= <?Php echo $orderid?>" style="blue">Xoá</a></td>
							</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clr"></div>
				<script type="text/javascript">
			showMethodPay();
			checked();
			function showMethodPay() {
				$(".radio_mp").click(function(){
					$(".method-pay").find(".mp_detail").css({ "display": "none" });	
					$(this).parent().children(".mp_detail").css({ "display": "block" });
				});
				if($("#checkbox").prop("checked", false)){
				//	$("#btnOrder").hide();
				}
			}
			$('.chinhsach').click(function(){
				checked();
			}) 
			function checked(){
				if ($('.chinhsach').attr('checked')) {
					$("#btnOrder").removeAttr('disabled').removeClass('disabled');
					$('.icon_disabled').remove();
				}
				else{
					$("#btnOrder").addClass("disabled").after('<p class="icon_disabled"></p>').attr("disabled");
				}
			}
				
		</script>
				<div class="clr"></div>
			</form>
		</div>
		</section>
	</div>
</body>
</html>