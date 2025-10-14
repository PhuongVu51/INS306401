<?php
$link = mysqli_connect("localhost", "root", "$link");
if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($link , "login_demo") or die(mysqli_error($link));
?>