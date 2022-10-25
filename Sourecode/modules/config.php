<?php
	$con = mysqli_connect("localhost", "root", "");
	$db_selected = mysqli_select_db($con, "ban_sach_chs") or die( mysqli_error($db));
?>