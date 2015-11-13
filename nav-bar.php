<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/m-head.css">
<body>
	<header>
		<div class="wrap-main">
			<form id="search-site" action="/tim-kiem" method="get" onsubmit="return submitSearchForm();"
				autocomplete="off">
				<input class="topinput" id="search-keyword" name="search-keyword" placeholder="Bạn tìm gì..."
					autocomplete="off" value="" type="text">
					<button class="btntop" type="submit">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
			
			</form>
			<nav> <a class="mobile" href="/didong/main-p"><i class="icontgdd-mobile"></i>Điện thoại</a> <a
				href="/may-tinh-bang" class="tablet"><i class="icontgdd-tablet"></i>Tablet</a> <a href="/laptop"
				class="laptop"><i class="icontgdd-laptop"></i>Laptop</a> <a href="/hoi-dap" class="ask"><i
				class="icontgdd-ask"></i>Hỏi đáp</a> <a href="/khuyen-mai" class="promo"><i
				class="icontgdd-promo"></i>Khuyến mãi</a> </nav>
		</div>
	</header>
	<script type="text/javascript">
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
</script>
</body>
</html>
