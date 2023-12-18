<?php
if (isset($_POST['sbm'])) {
	$prd_name = $_POST['product_name'];
	$image = $_FILES['product_image']['name'];
	$image_tmp = $_FILES['product_image']['tmp_name'];
	$prd_price = $_POST['product_price'];

	$sql = "INSERT INTO `products`(`product_name`, `image`, `price`) VALUES ('$prd_name','$image',$prd_price)";
	$query = mysqli_query($connect, $sql);
	move_uploaded_file($image_tmp, 'img/' . $image);
	header('location: admin.php');
}
?>

<div id="myModal" class="modal">
	<div class="modal-content">
		<a href="admin.php"><span class="close">&times;</span></a>
		<h1>Thêm mới sản phẩm</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="product_name">Tên sản phẩm</label></br>
				<input type="text" name="product_name" placeholder='Example: iPhone 15 Pro Max' required>
			</div>
			<div class="form-group">
				<label for="product_image">Ảnh sản phẩm</label></br>
				<input accept="image/*" type='file' name="product_image" required />
			</div>
			<div class="form-group">
				<label for="product_price">Giá bán</label></br>
				<input type="number" name="product_price" placeholder='Example: 15000000' required />
			</div>
			<div class="form-group center"><button name="sbm" type="submit" class="btn_them">Thêm</button></div>
		</form>
	</div>
</div>