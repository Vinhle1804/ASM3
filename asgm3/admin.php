<?php
require_once 'config/db.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style/admin_style.css">
	<title>Admin page - Management Products</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
	<a href="index.php" class="btn_back" title="Go to the homepage"><i class='bx bx-arrow-back'></i></a>
	<h1 class="title">Danh sách sản phẩm</h1>
	<div class="them_san_pham">
		<a href="admin.php?page_layout=add" class="btn_add">
			<i class='bx bx-plus'></i>
			<p>Thêm sản phẩm</p>
		</a>
	</div>
	<?php
	require 'action/admin_list.php';
	if (isset($_GET['page_layout'])) {
		switch ($_GET['page_layout']) {
			case 'add':
				require 'action/add.php';
				break;

			case 'delete':
				require_once 'action/delete.php';
				break;

			case 'update':
				require_once 'action/update.php';
				break;

			default:
				require_once 'action/admin_list.php';
				break;
		}
	}
	?>
</body>

</html>