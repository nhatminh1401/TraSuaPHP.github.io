<?php
session_start();
require 'DBconnext.php';

if (isset($_POST['submit']) && $_POST["tenNguoiDung"] != '' && $_POST["sdt"] != '' && $_POST["diaChi"] != '' && $_POST["email"] != '' && $_POST["matKhau"] != '' && $_POST["nhaplaimatkhau"] != '') {
    $tenNguoiDung = $_POST["tenNguoiDung"];
    $sdt = $_POST["sdt"];
    $diaChi = $_POST["diaChi"];
    $email = $_POST["email"];
    $matKhau = $_POST["matKhau"];
    $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
    $status = 0;
    $ngayTao = '';
    $ngayCapNhat = '';
    $hinhanh = '';

    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $user = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($user);
    if ($rows > 0) {
        $_SESSION["thongbaoem"] = "Email đã tồn tại!!";
        header("location:register.php");
    } else {
        if ($matKhau != $nhaplaimatkhau) {
            $_SESSION["thongbaomk"] = "Vui lòng nhập lại mật khẩu chính xác!!";
            header("location:register.php");
        } else {
            $matKhau = md5($matKhau);
            $sql = "INSERT INTO taikhoan (email,matKhau,tenNguoiDung,diaChi,sdt,ngayTao,ngayCapNhat,status,hinhanh) VALUES ('{$email}','{$matKhau}','{$tenNguoiDung}','{$diaChi}','{$sdt}','{$ngayTao}','{$ngayCapNhat}','{$status}','{$hinhanh}') ";
            $check = mysqli_query($conn, $sql);
            if ($check > 0) {
                header("location:login.php");
            }
        }
    }
} else {
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin!!";
    header("location:register.php");
}
