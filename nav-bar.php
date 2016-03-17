<?php
session_start ();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/m-head.css">

	<body>
		<header>
		<div class="wrap-main">
			<form id="search-site" action="search" method="GET"
				onsubmit="return submitSearchForm();" autocomplete="off">
				<input class="topinput" id="search-keyword" name="search"
					placeholder="Bạn tìm gì..." autocomplete="off" value="" type="text">
					<button class="btntop" type="submit">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
			
			</form>
			<nav> <a class="mobile" href="main-p?type=1"><i class="icontgdd-mobile"></i>Điện thoại</a> 
				<a href="main-p?type=2"class="tablet"><i class="icontgdd-tablet"></i>Tablet</a> 
				<a href="main-p?type=3" class="laptop"><i class="icontgdd-laptop"></i>Laptop</a>
			<a href="/didong/hoi-dap" class="ask"><i class="icontgdd-ask"></i>Hỏi đáp</a>
			<a href="/didong/khuyen-mai" class="promo"> <i class="icontgdd-promo"></i>Khuyến
				mãi
			</a>
			<?php
				if(isset($_SESSION['name']))
				{
					if($_SESSION['role']==1)
					{
					?>	
					<a href="admin-user-list" class="shoping-cart"> <img src="images/icon/admin-512.png" height="24"
						class="icon-user" width="25"></img>Quản lý
						</a>
					
						<a href="log-out" class="login"> <img src="images/icon/settings-512.png" height="24"
						class="icon-user" width="25"></img>Đăng xuất
						</a>
						
					<?php					
					}
					else
					{
					?>
					<a href="dat-hang" class="shoping-cart"> <img src="images/icon/shopping_cart_512.png" height="24"
						class="icon-user" width="25"></img>Giỏ hàng
						</a>
					<a href="log-out" class="login"> <img src="images/icon/settings-512.png" height="24"
						class="icon-user" width="25"></img>Đăng xuất</a>
						
					<?php
					}
				}
				else
				{
				?>
					<a href="" data-toggle="modal" data-target="#log-in" data-backdrop="false" data-show="true"
				class="login"> <img src="images/icon/settings-512.png" height="24"
				class="icon-user" width="25"></img>Đăng nhập
			</a>
				<?php
				}
			?>  

		 <!-- Button trigger modal ----> <!-- Modal ---->
			<div class="modal fade in" <?php if(isset($check_login)&&($check_login==0)) echo "style=\"display:block;\""?> id="log-in" tabindex="-1" role="dialog"
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
								<form id="form_login1" method="POST"
									action="main-p">
									<label class="ieLabel">User Name</label> 
									<input
										name="username" id="login"
										placeholder="User Name" type = "text"> 
									<label
										class="ieLabel">Password</label> <input name="password"
										id="login" placeholder="Password" maxlength="30"
										type="password">
											<div id="login_remember_wrap">
												<input name="login_remember" id="login_remember"
													checked="checked" type="checkbox"> <label
													for="login_remember">Keep me logged in</label>
											
											</div>
											<?php 
												
												if(isset($err_login)) {
													echo $err_login;
													
												}
											?>
											<div class="clr"></div>
											<button type="submit" class="btn__" onclick="" name="login" >Đăng nhập</button>
								
								</form>
							</div>
							<div id="emailLogin" class="right">
								<form id="form_login1" method="POST"
									action="main-p.php">
									<label class="ieLabel">User Name</label> <input
				
										name="username1" id="login"
										placeholder="User Name" type = "text"> <label
										class="ieLabel">Password</label> <input name="password1"
										id="login" placeholder="Password" maxlength="30"
										type="password">
										<label
										class="ieLabel">Rewrite Password</label> <input name="re_password"
										id="login" placeholder="Password" maxlength="30"
										type="password">
											<?php 
												
												if(isset($err_login)) {
													echo $err_login;
													
												}
											?>
											<div class="clr"></div>
											<button type="submit" class="btn__" onclick="" name="adduser" >Đăng Kí</button>
								
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
