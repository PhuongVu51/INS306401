<?php
session_start();

/* connect to database check user*/
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login_demo');

/* create variables to store data */
$name =$_POST['user'];
$pass =$_POST['password'];
$namsinh = (int)$_POST['namsinh'];
$quoctich = $_POST['quoctich'];
$mssv = (int)$_POST['mssv'];
$gioitinh = $_POST['gioitinh'];

/* select data from DB */
$s="select * from users where username='$name'";

/* result variable to store data */
$result = mysqli_query($con,$s);

/* check for duplicate names and count records */
$num =mysqli_num_rows($result);
if($num==1){
    echo "Username Exists";
}else{
    $reg = "INSERT INTO users(username, password, namsinh, quoctich,mssv, gioitinh) VALUES ('$name', md5('$pass'), '$namsinh', '$quoctich', '$mssv', '$gioitinh')";

    mysqli_query($con,$reg);
    echo "registration successful";
}
