<?php
function taogiohang( $tensp,$idbill,$soluong,$dongia,$thanhtien){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wsts-1";
     
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO cthd (tenSanPham,maHoaDon,soLuong,giaBan,thanhTien)
        VALUES ('{$tensp}','{$idbill}', '{$soluong}', '{$dongia}','{$thanhtien}')";
        
        // use exec() because no results are returned
        $conn->exec($sql);
      
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
           
}


function taodonhang($email,$name, $tel, $diachi,$ghichu){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wsts-1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO hoadon (email,tenNguoiMua,sdt,diaChi,ghiChu)
  VALUES ('{$email}','{$name}', '{$tel}', '{$diachi}','{$ghichu}')";
  
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
return $last_id;
}

function showgiohang()
{
    if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {
        $tong = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

            $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
            $tong += $tt;
            echo '
                 <tbody>
                 <tr>
                 <td data-th="Product">
                     <div class="row">
                         <div class="col-sm-4 hidden-xs">
                             <img
                                 src="templateUser/images/' .$_SESSION['giohang'][$i][0]. '"
                                 class="img-fluid" alt="Image">
                         </div>

                     </div>
                 </td>
                 <td data-th="tenSanPham" ><span>' .$_SESSION['giohang'][$i][1]. '</span></td>
                 <td data-th="giaBan"><span>' . $_SESSION['giohang'][$i][2] . ' đ</span></td>
                 <td data-th="soLuong" ><span>' .$_SESSION['giohang'][$i][3]. '</span></td>
                 <td class="actions"data-th=""><a
                     href="cart.php?delid='.$i. '">
                         <button class="btn btn-danger btn-sm">
                             <i class="fa fa-trash-o">Xoá</i>
                         </button>
                 </a></td>

                 <td><span>' .$tt. ' đ</span></td>
             </tr>
			</tbody>
                 
                 ';
        }
        echo '
             <tfoot>
				<tr>
					
					<td class="hidden-xs text-center"
						style="margin-right: 5px; font-size: 18px";><strong>Tổng:
							<span>' .$tong. 'đ</span>
					</strong></td>
					
				</tr>
			</tfoot>
             ';
    }
}
?>