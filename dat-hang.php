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
			<form action="/gio-hang" method="post">
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
								<td><input name="UserName" value=""
									data-val-required="- Chưa nhập email?"
									data-val-regex-pattern="^[a-z0-9_\+-]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$"
									data-val-regex="- Chưa đúng định dạng email?" data-val="true"
									type="text"> <span class="field-validation-valid"
										data-valmsg-for="UserName" data-valmsg-replace="true"></span>
								</td>
							</tr>
							<tr>
								<td valign="top">Họ và tên<span class="require">(*)</span>
								</td>
								<td><input name="FullName"
									data-val-required="- Chưa nhập họ và tên?" data-val="true"
									type="text"> <span class="field-validation-valid"
										data-valmsg-for="FullName" data-valmsg-replace="true"></span>
								</td>
							</tr>
							<tr>
								<td valign="top">Số điện thoại<span class="require">(*)</span>
								</td>
								<td><input name="Phone"
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
								<td colspan="2"><textarea name="Message"
										placeholder="Vui lòng cho chúng tôi biết thời gian nhận hàng trong ngày hoặc ghi chú thêm ....."
										data-val-required="- Chưa nhập địa chỉ nhận hàng?"
										data-val="true"></textarea> <span
										class="field-validation-valid" data-valmsg-for="Message"
										data-valmsg-replace="true"></span></td>
							</tr>
							
							<tr>
								<td colspan="2" valign="top"><input name="chinhsach"
									value="chinhsach" checked="checked" class="chinhsach"
									type="checkbox"> Tôi đồng ý với các điều khoản của công ty bán hàng  </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="m-update-cart">
					<div class="p-cart-info fl_right">
						<h4 class="title">
							<span>Thông tin đơn hàng</span>
							<span class="border"></span>
						</h4>
						<div class="scroll_cartorder">
							<table class="p-cart-order" id="table-1">
								<thead>
									<tr>
										<th>Ảnh</th>
										<th style="width: 200px;">Tên</th>
										<th>Giá khuyến mại</th>
										<th>Thành tiền</th>
										<th style="width: 35px;">Xóa</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a
											href="/smartphones-samsung/dien-thoai-samsung-galaxy-j5.htm"
											title=" Điện thoại Samsung Galaxy J5 J500 White"
											target="_blank"> 
											<img
												src="http://img.mediamart.vn/Product/small_27077_17913_dien-thoai-samsung-galaxy-j5.jpg"
												title=" Điện thoại Samsung Galaxy J5 J500 White"
												alt=" Điện thoại Samsung Galaxy J5 J500 White">
										</a></td>
										<td><a
											href=""> Điện thoại
												Samsung Galaxy J5 J500 White </a></td>
										<td>
											<p class="price1">4.488.000 đ</p>
								
										</td>
										<td>
											<p class="price3">4.488.000 đ</p>
											
										</td>
										<td><a class="delete"
											href="">(Xóa)</a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<table class="p-cart-order">
							<tbody>
								<tr>
									<td
										style="text-align: right; width: 564px; text-transform: uppercase; font: bold 13px Arial;">
										<span>Tổng giá trị thanh toán:</span>
									</td>
									<td style="text-align: right; width: 150px;">
										<p class="price3">4.488.000 đ</p>
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
								type="radio"> Thanh toán tiền mặt <a
								href=""
								target="_blank"
								style="color: #ff0000; text-decoration: underline;">(Xem chi
									tiết)</a></li>
							<li><input id="radioMethodPay2" class="radio_mp"
								name="PaymentMethod" value="method2" type="radio"> Thanh toán
								chuyển khoản ngân hàng <a
								href=""
								target="_blank"
								style="color: #ff0000; text-decoration: underline;">(Xem chi
									tiết)</a>
								<table class="radioMethodPay2 mp_detail"
									style="display: none; border: none; width: 100%;">
									<tbody>
										<tr>
											<td colspan="3">Đơn vị thụ hưởng: Công ty Cổ phẩn Media Mart
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
								</table>
							</li>
							<li><input id="radioMethodPay3" class="radio_mp"
								name="PaymentMethod" value="method3" type="radio"> Cà thẻ tại
								nhà</li>
							
							
						</ul>
						<div class="p-cart-process">
        
            <input id="btnOrder" value="Gửi đơn hàng" type="submit">
    </div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
					
					<div class="clr"></div>
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