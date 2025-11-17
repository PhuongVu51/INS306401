<?php
$link = mysqli_connect("localhost", "root", "$link");
if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($link , "cookie_session_authentication") or die(mysqli_error($link));
?>