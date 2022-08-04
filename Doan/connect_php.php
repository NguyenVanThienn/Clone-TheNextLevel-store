<?php
	$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
	mysqli_select_db($conn, "doan") or die ("Connected false");
?>