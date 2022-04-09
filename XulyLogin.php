<?php
session_start();
require 'DBconnext.php';

if (isset($_POST["login"]) && $_POST["email"] != '' && $_POST["matKhau"] != '') {
    $email = $_POST["email"];
    $matKhau = $_POST["matKhau"];
    $matKhau = md5($matKhau);
    $sql = "SELECT * FROM taikhoan WHERE email='$email' AND matKhau='$matKhau'";
    $user = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_row($user);
    if ($rows>0) {
        $_SESSION["nguoidung"] = $rows;
        header("location:index.php");
    } else {
        $_SESSION["thongbaodn"] = "Thông tin đăng nhập không chính xác!";
        header("location:login.php");
    }
} else {
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin!";
    header("location:login.php");
}
