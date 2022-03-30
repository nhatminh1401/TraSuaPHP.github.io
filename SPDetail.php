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
                    

                        <h1>Welcome To <span>Live Dinner Restaurant</span></h1>
                        <span><?php echo $row['tenSanPham']; ?></span>
                        <h2><?php echo $row['tenLoaiSanPham']; ?></h2>
                        <h3><?php echo $row['giaBan']; ?></h3>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Mua hàng</a>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="addCart?maSanPham=<?php echo $row['maSanPham']; ?>">Thêm vào giỏ hàng</a>
                    
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