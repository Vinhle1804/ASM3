<?php
$id = $_GET['id'];
$sql_up = "SELECT * FROM `products` WHERE product_id = $id";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);

if (isset($_POST['sbm'])) {
	$prd_name = $_POST['product_name'];

	if ($_FILES['product_image']['size'] > 0) {
		$image = $_FILES['product_image']['name'];
		move_uploaded_file($_FILES['product_image']['tmp_name'], 'img/' . $image);
	} else {
		$image = $row_up['image'];
	}

	$prd_price = $_POST['product_price'];

	$sql = "UPDATE products SET product_name = '$prd_name', image = '$image', price = $prd_price WHERE product_id = $id";
	$query = mysqli_query($connect, $sql);
	header('location: admin.php');
}
?>

<div id="myModal" class="modal">
	<div class="modal-content">
		<a href="admin.php"><span class="close">&times;</span></a>
		<h1>Sửa sản phẩm</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="product_name">Tên sản phẩm</label></br>
				<input type="text" name="product_name" placeholder='Example: iPhone 15 Pro Max' required value="<?php echo $row_up['product_name'] ?>" />
			</div>
			<div class=" form-group">
				<label for="product_image">Ảnh sản phẩm</label></br>
				<input accept="image/*" type='file' name="product_image" />
			</div>
			<div class="form-group">
				<label for="product_price">Giá bán</label></br>
				<input type="number" name="product_price" placeholder='Example: 15000000' required value="<?php echo $row_up['price'] ?>" />
			</div>
			<div class=" form-group center"><button name="sbm" type="submit" class="btn_them">Sửa</button>
			</div>
		</form>
	</div>
</div>