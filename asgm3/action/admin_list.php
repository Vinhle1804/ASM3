<?php
$sql = "SELECT * FROM products";
$query = mysqli_query($connect, $sql);
?>
<div class="danh_sach_san_pham">
	<table>
		<thead>
			<div class="head">
				<tr class="tr-head">
					<th><span>#</span></th>
					<th><span>Tên sản phẩm</span></th>
					<th>Ảnh</th>
					<th>Giá</th>
					<th></th>
				</tr>
			</div>
		</thead>
		<tbody>
			<?php
			$i = 1;
			while ($row = mysqli_fetch_assoc($query)) {
			?>
				<tr>
					<td style="text-align: center; font-weight: bolder;">
						<?php echo $row['product_id'] ?>
					</td>
					<td><?php echo $row['product_name'] ?></td>
					<td style="padding-block: 10px;">
						<img style='display: block; width: 150px; margin: 0 auto;;' src="img/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
					</td>
					<td style="text-align: center;">
						<?php
						echo number_format($row['price'], 0, '', ',');
						echo "đ"
						?>
					</td>
					<td>
						<a href="admin.php?page_layout=update&id=<?php echo $row['product_id'] ?>" class="btn_action">
							<i class='bx bxs-pencil'></i>
						</a>
						<a href="admin.php?page_layout=delete&id=<?php echo $row['product_id'] ?>" class="btn_action" onclick="return AlertNotification('<?php echo $row['product_name'] ?>')">
							<i class='bx bx-x'></i>
						</a>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
<script>
	function AlertNotification(productName) {
		return confirm(`Bạn có chắc chắn muốn xoá sản phẩm ${productName} ?`);
	}
</script>