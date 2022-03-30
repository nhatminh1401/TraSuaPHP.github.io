<?php

require '../../DB.php';

class spXulyTaiKhoan extends DB {

    public function themTaiKhoan() {
        if (@$_POST) {
            $tenkhachhang = "'" . $_POST['tenNguoiDung'] . "'";
            $email = "'" . $_POST['email'] . "'";
            $matkhau = "'" . $_POST['matKhau'] . "'";
            $dienthoai = "'" . $_POST['sdt'] . "'";
            $diachinhan = "'" . $_POST['diaChi'] . "'";
            $sql = 'insert into taikhoan (tenNguoiDung,email,matKhau,sdt,diaChi) value(' . $tenkhachhang . ',' . $email . ',' . $matkhau . ',' . $dienthoai . ',' . $diachinhan . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm tài khoản mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        }
    }

    public function suaTaiKhoan() {
        if (isset($_GET['id'])) {
            $tenkhachhang = "'" . $_POST['tenNguoiDung'] . "'";
            $email = "'" . $_POST['email'] . "'";
            $matkhau = "'" . $_POST['matKhau'] . "'";
            $dienthoai = "'" . $_POST['sdt'] . "'";
            $diachinhan = "'" . $_POST['diaChi'] . "'";
            $id = "'" . $_GET['id'] . "'";
            $sql = 'update taikhoan set email = ' . $email . ',matKhau = ' . $matkhau . ',sdt = ' . $dienthoai . ',diaChi = ' . $diachinhan . ' where tenNguoiDung like ' . $id . '';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã sửa tài khoản ' . $tenkhachhang . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaTaiKhoan() {
        if (isset($_GET['id'])) {
            $sql = "delete from taikhoan where tenNguoiDung like '" . $_GET['id'] . "';";
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa tài khoản thành công.</div>');
            } else {
                header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=taikhoan&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyTaiKhoan = new spXulyTaiKhoan();

if (isset($_POST['them'])) {
    $xulyTaiKhoan->themTaiKhoan();
} else if (isset($_POST['sua'])) {
    $xulyTaiKhoan->suaTaiKhoan();
} else {
    $xulyTaiKhoan->xoaTaiKhoan();
}
?>
