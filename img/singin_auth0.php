
<!-- //xác thực người dùng đã đăng nhập -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location:dangnhap.php");
exit(); }
?>
