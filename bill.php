
<?php
session_start();
include "thuvien.php";
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

    echo "Bạn đã đặt hàng thành công. Đơn hàng của bạn là!" . $idbill;
}
?>

    