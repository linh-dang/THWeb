<?php
session_start();
session_destroy();
unset($_SESSION['name']);

?>
		
		Bạn đã đăng xuất thành công.  
<head>
<meta http-equiv="refresh" content="2; url=main-p.php" />
</head>		