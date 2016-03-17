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
<title>Vũ trụ di động | Danh sách khách hàng</title>
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
				<div class="search-customer">
					<div class="c-id">
						<span>
							<b>CustomerId</b>
						</span>
						<input id="customer-id" name="cus_ID" placeholder="CustomerId"
							title="CustomerId" style="width: 100px;" class="form-text"
							maxlength="7" type="text" ng-model="query.ID" >
					
					</div>
					<div class="c-name">
						<b>Tên khách hàng</b> <input id="customer-name" name="cus_name"
							placeholder="Tên khách hàng" title="Tên khách hàng"
							style="width: 150px;" class="form-text" maxlength="50"
							type="text" ng-model="query.Name">
					
					</div>
				</div>
				<div class="clr"></div>
				<h4 class="title">
					<span>Đơn hàng của tôi </span>
					<span class="border"></span>
				</h4>
				<table class="p-cart-order">
					<thead>
						<tr class="first last">
							<th style="width: 5%;">ID&nbsp;#</th>
							<th style="width: 20%;">Tên khách hàng</th>
							<th style="width: 14%;">SĐT</th>
							<th style="width: 14%;">email</th>
							<th style="">Địa chỉ</th>
							<th style="width: 10%;">Ngày sinh</th>
							<th style="width: 14%;">Tổng đơn hàng</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="x in names | filter:query" >
							<td>{{ x.ID }}</td>
							<td>{{ x.Name }}</td>
							<td>{{ x.phone }}</td>
							<td>{{ x.email }}</td>
							<td>{{ x.address }}</td>
							<td>{{ x.birth }}</td>
							<td>{{ x.count}}</td>
						</tr>
					</tbody>
				</table>
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