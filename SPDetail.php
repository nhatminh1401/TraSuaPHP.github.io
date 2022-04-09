<?php
require "layout/header.php"
?>
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Chi tiết sản phẩm</h1>

            </div>
        </div>
    </div>
</div>

<!-- End All Pages -->
<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
        <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
                    require 'DBconnext.php';
                    $masp = $_GET['maSanPham'];
                    $query = mysqli_query($conn, "select * from sanpham a, loaisanpham b where a.maLoaiSanPham = b.maLoaiSanPham and a.maSanPham = $masp ");
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
            <div class="col-lg-6 col-md-6 text-center">
                <div class="inner-column">
                    

                        <h1>Chào mừng <span>đến với CHNM</span></h1>
                        <form action="cart.php" method="post">
                        <table>
                        <thead>
                            <tr>
                                <th style="width: 80%"><span style="color:cornflowerblue; font-size: x-large;"><?php echo $row['tenSanPham']; ?></span> :</th>
                                <th style="width: 40%"><span style="color:cornflowerblue; font-size: x-large;"><?php echo $row['giaBan']; ?></span></th>
                                <th > <input type="number" name="soLuong" min="1" max="10" value="1"></th>
                            </tr>
                        </thead>
                        </table>
                        <input class="btn btn-lg btn-circle btn-outline-new-white"
                             type="submit" name="addcart" value="Mua hàng">
                        
                            <!-- <input type="number" name="soLuong" min="1" max="10" value="1"> -->
                            <input class="btn btn-lg btn-circle btn-outline-new-white"
                             type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="hinhAnh" value="<?php echo $row['hinhAnh']; ?>">
                            <input type="hidden" name="tenSanPham" value="<?php echo $row['tenSanPham']; ?>">
                            <input type="hidden" name="giaBan" value="<?php echo $row['giaBan']; ?>">
                         </form>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="templateUser/images/<?php echo $row['hinhAnh']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-12">
                <div class="inner-pt">
                </div>

            </div>
            <?php
                    }
                    ?>

        </div>
    </div>
</div>

<!-- End About -->
<?php
require "layout/footer.php"
?>