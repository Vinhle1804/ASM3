<?php
$connect = mysqli_connect('localhost', 'root', '', 'car');
if ($connect) {
	mysqli_query($connect, "SET NAMES 'UTF8'");
} else {
	echo "<script type='text/javascript'>alert('Connect to database failed');</script>";
}
