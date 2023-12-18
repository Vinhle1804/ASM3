<?php
$sql = "SELECT * FROM products";
$query = mysqli_query($connect, $sql);
?>

<div class="danh-sach-san-pham">
	<?php
	while ($row = mysqli_fetch_assoc($query)) {
	?>
		<div class="box-san-pham">
			<img src="img/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" class="anh-san-pham" />
			<div class="ten-san-pham"><?php echo $row['product_name'] ?></div>
			<p class="gia">
				<?php echo number_format($row['price'], 0, '', ',');
				echo "đ" ?>
			</p>
			<p><img src="img/sao.png" alt="" class="sao" /></p>
			<button class="btn-mua-hang">Mua hàng</button>
		</div>
	<?php
	}
	?>
</div>