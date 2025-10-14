<?php
include("LESSION\07102025\db_connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h2> , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action= "" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Password:</label>
        <input type="password" name="password"> <br> 
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>