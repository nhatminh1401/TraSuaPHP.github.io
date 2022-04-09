<?php
require "layout/header.php"
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
require 'DBconnext.php';
include "thuvien.php";
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
function dathang()
{
	if (isset($_SESSION["nguoidung"])) {
		echo '<div class="row">
        <div class="col-md-12">
            <h2>Thông tin khách hàng</h2>
        </div>
        <div class="col-md-12">
            
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="exampleFormControlInput4">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" value="'.$_SESSION["nguoidung"][1].'" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Họ tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="tenNguoiMua" value="'.$_SESSION["nguoidung"][3].'" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="sdt" value="'.$_SESSION["nguoidung"][5].'" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Địa chỉ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="diaChi" value="'.$_SESSION["nguoidung"][4].'" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ghi chú</label>
                            <textarea class="form-control" name="ghiChu" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="btn btn-primary">Đặt hàng</button>
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </div>';
	} else {
		echo '<div class="row">
        <div class="col-md-12">
            <h2>Thông tin khách hàng</h2>
        </div>
        <div class="col-md-12">
            
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="exampleFormControlInput4">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Họ tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="tenNguoiMua" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="sdt" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Địa chỉ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="diaChi" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ghi chú</label>
                            <textarea class="form-control" name="ghiChu" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="btn btn-primary">Đặt hàng</button>
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </div>';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
</head>

<body>
<div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Thanh toán</h1>
                </div>
            </div>
        </div>
    </div>
<form action="bill.php" method="post">
<?php dathang(); ?>
    
            </form>
</body>

</html>
<?php
require "layout/footer.php"
?>