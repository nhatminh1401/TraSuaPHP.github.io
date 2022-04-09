<?php
require "layout/header.php"
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
require 'DBconnext.php';
include "thuvien.php";
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//Xoá toàn bộ giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinh = $_POST['hinhAnh'];
    $tensp = $_POST['tenSanPham'];
    $gia = $_POST['giaBan'];
    $soluong = $_POST['soLuong'];

    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $fl += 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    if ($fl == 0) {
        //Thêm sản phẩm vào giỏ hàng
        $sp = [$hinh, $tensp, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
        // var_dump($ SESSION['giohang']);
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
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Chi tiết giỏ hàng</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: 20px; color: orange">
                    <h2>Chi tiết giỏ hàng</h2>
                </div>
                <div class="col-12">
                    <a href="index.php">Trang chủ</a> <a href="">sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width: 30%">Sản phẩm</th>
                    <th style="width: 30%">Tên Sản phẩm</th>
                    <th style="width: 8%">Giá</th>
                    <th style="width: 12%">Số lượng</th>
                    <th style="width: 2%" class="text-center">xoá</th>
                    <th style="width: 10%">Thành tiền</th>

                </tr>
            </thead>
            <?php showgiohang(); ?>
            <td>
                <a href="cart.php?delcart=1" class="btn btn-warning"><i class="fa fa-angle-left"></i> Xoá giỏ hàng</a>
            </td>
            <td colspan="2" class="hidden-xs"></td>

            <td><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td><a href="checkout.php" class="btn btn-success btn-block">Thanh
                    toán <i class="fa fa-angle-right"></i>
                </a></td>

        </table>
    </div>

</body>

</html>
<?php
require "layout/footer.php"
?>