<?php
require "layout/header.php"
?>
<?php
session_start();
include "thuvien.php";
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
function ifnguoidung()
{
	if (isset($_SESSION["nguoidung"])) {
		echo '<div class="col-xs-6 col-sm-6 col-md-6">
        <address>
            <strong>' . $_SESSION["nguoidung"][3] . '</strong>
            <br>
            <br>
            <abbr title="Phone">Email:' . $_SESSION["nguoidung"][1] . ' </abbr>
        </address>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
        <p>
            <em>Địa chỉ:' . $_SESSION["nguoidung"][4] . ' </em>
        </p>
        <!-- <p>
            <em>Số điện thoại:' . $_SESSION["nguoidung"][5] . '</em>
        </p> -->
    </div>';
	} 
}
function giohang()
{
    if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {
		$tong = 0;
		for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
         
            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;
            echo '<tr>
            <td class="col-md-9">
                <em>' .$_SESSION['giohang'][$i][1]. '</em>
            </td>
            <td class="col-md-1" style="text-align: center"> ' .$_SESSION['giohang'][$i][3]. ' </td>
            <td class="col-md-1 text-center">' .$_SESSION['giohang'][$i][2]. '</td>
            <td class="col-md-1 text-center">' .$tt. '</td>
        </tr>
         
                 ';
        }
    }
}
function done()
{
	if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
		$email=$_POST['email'];
		$name=$_POST['tenNguoiMua'];
		$tel=$_POST['sdt'];
		$diachi=$_POST['diaChi'];
		$ghichu=$_POST['ghiChu'];
  
		$idbill=taodonhang($email,$name, $tel, $diachi,$ghichu);
  
		for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) {
		  $tensp=$_SESSION['giohang'][$i][1];
		  $dongia=$_SESSION['giohang'][$i][2];
		  $soluong=$_SESSION['giohang'][$i][3];
		  $thanhtien=$dongia*$soluong;
		  taogiohang($tensp,$idbill,$soluong,$dongia,$thanhtien);
	  }
  
	  echo '
	 <a style="margin-left: 100px ;">Bạn đã đặt hàng thành công. Đơn hàng của bạn là! '.$idbill.'</a> 
	   ';
  }
}

?>
<div class="all-page-title page-breadcrumb">
		  <div class="container text-center">
			  <div class="row">
				  <div class="col-lg-12">
					  <h1>Thanh toán</h1>
				  </div>
			  </div>
		  </div>
	  </div>
<div class="container" >
    <div style="margin-left: 270px; margin-right: -200px;" class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="text-center">
                <h1>Thông tin đơn hàng</h1>
            </div>
            <div class="row">
            <?php ifnguoidung(); ?>
                

                </div>

            <div class="row">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php giohang(); ?>



                    </tbody>
                </table>
<?php
if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {
	$tong = 0;
	for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

		$tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
		$tong += $tt;		
	}
	echo '
			<h1>Thành tiền:' .$tong. '</h1>          
			 ';
}
?>
                
            </div>

        </div>
    </div>
	<?php done(); ?>

	<div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <td colspan="2" class="hidden-xs"></td>
            <td><a href="menu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td><a href="index.php" class="btn btn-success btn-block">Trở về trang chủ <i class="fa fa-angle-right"></i>
                </a></td>

        </table>
    </div> 

<?php
require "layout/footer.php"
?>
    