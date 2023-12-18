<?php
require_once 'config/db.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css" />
	<title>JK Shop - Điện thoại, laptop, đồ dùng công nghệ</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
	<div class="main">
		<div class="banner">
			<object data="img/banner.png"></object>
		</div>
		<div class="menu">
			<div>
				<a href="#">Trang chủ</a>
				<a href="#">Giới thiệu</a>
				<a href="#">Dịch vụ</a>
				<a href="#">Sản phẩm</a>
				<a href="#">Liên hệ</a>
			</div>
			<div>
			<a href="admin.php">admin</a>
			<a href='Login.php'><i class='bx bxs-face-mask'></i></a>
			</div>
		</div>
		<div class="clear"></div>
		<div class="trai">
			<h3>Danh mục sản phẩm</h3>
			<ul>
				<li><a href="#">Điện thoại</a></li>
				<ul>
					<li><a href="#">iPhone</a></li>
					<li><a href="#">Xiaomi</a></li>
					<li><a href="#">Oppo</a></li>
					<li><a href="#">Asus</a></li>
					<li><a href="#">Realme</a></li>
				</ul>
				<li><a href="#">Tivi</a></li>
				<li><a href="#">Laptop</a></li>
				<ul>
					<li><a href="#">Macbook</a></li>
					<li><a href="#">Asus</a></li>
					<li><a href="#">HP</a></li>
				</ul>
			</ul>
		</div>
		<div class="phai">
			<div class="slide"><img src="img/banner.webp" /></div>
			<div class="sanpham">
				<h1>Sản phẩm nổi bật</h1>
				<?php
				require_once 'action/home_list_show.php';
				?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<div class="menuduoi">
				<a href="#">Trang chủ</a>
				<a href="#">Giới thiệu</a>
				<a href="#">Dịch vụ</a>
				<a href="#">Sản phẩm</a>
				<a href="#">Liên hệ</a>
			</div>
			<p align="center">
				&copy; 2014 Designed by <a href="#">devprofuture</a>
			</p>
		</div>
	</div>
</body>

</html>