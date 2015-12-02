<?php
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/m-head.css">
	<body>
		<header>
		<div class="wrap-main">
			<form id="search-site" action="/tim-kiem" method="get"
				onsubmit="return submitSearchForm();" autocomplete="off">
				<input class="topinput" id="search-keyword" name="search-keyword"
					placeholder="Bạn tìm gì..." autocomplete="off" value="" type="text">
					<button class="btntop" type="submit">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
			
			</form>
			<nav> <a class="mobile" href="/didong/main-p"><i
				class="icontgdd-mobile"></i>Điện thoại</a> <a href="/may-tinh-bang"
				class="tablet"><i class="icontgdd-tablet"></i>Tablet</a> <a
				href="/laptop" class="laptop"><i class="icontgdd-laptop"></i>Laptop</a>
			<a href="/hoi-dap" class="ask"><i class="icontgdd-ask"></i>Hỏi đáp</a>
			<a href="/khuyen-mai" class="promo"> <i class="icontgdd-promo"></i>Khuyến
				mãi
			</a> <a href="" data-toggle="modal" data-target="#log-in"
				class="login"> <img src="images/settings-512.png" height="24"
				class="icon-user" width="25"></img>Đăng nhập
			</a> <!-- Button trigger modal --> <!-- Modal -->
			<div class="modal fade in" id="log-in" tabindex="-1" role="dialog"
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
								<form id="form_login1" method="post"
									action="/dynamic/client_login/mediafire.php"
									target="widgetwork">
									<label class="ieLabel">Email address</label> <input
										pattern="^(.)+@[A-Za-z0-9]([A-Za-z0-9\.-]*[A-Za-z0-9])?\.[A-Za-z]{1,13}$"
										name="login_email" id="widget_login_email"
										placeholder="Email address" type="email"> <label
										class="ieLabel">Password</label> <input name="login_pass"
										id="widget_login_pass" placeholder="Password" maxlength="30"
										type="password">
											<div id="login_remember_wrap">
												<input name="login_remember" id="login_remember"
													checked="checked" type="checkbox"> <label
													for="login_remember">Keep me logged in</label>
											
											</div>
											<div class="clr"></div>
											<button type="submit" class="btn__" onclick="">Đăng nhập</button>
								
								</form>
							</div>
							<div id="emailLogin" class="right">
								<form id="form_login1" method="post"
									action="/dynamic/client_login/mediafire.php"
									target="widgetwork">
									<label class="ieLabel">Email address</label> <input
										pattern="^(.)+@[A-Za-z0-9]([A-Za-z0-9\.-]*[A-Za-z0-9])?\.[A-Za-z]{1,13}$"
										name="login_email" id="widget_login_email"
										placeholder="Email address" type="email"> <label
										class="ieLabel">Password</label> <input name="login_pass"
										id="widget_login_pass" placeholder="Password" maxlength="30"
										type="password"> <label class="ieLabel">Password</label> <input
											name="login_pass" id="widget_login_pass"
											placeholder="Password" maxlength="30" type="password">
												<button type="submit" class="buynow" onclick="">Đăng ký</button>
								
								</form>
							</div>
							<div class="clr"></div>
						</div>
					</div>
				</div>
			
			</nav>
		</div>
		</header>
		<script type="text/javascript">
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
 	</script>
	</body>

</html>
