<?php
require "layout/header.php"
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
                    <h1>Special Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row inner-menu-box">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
                require 'DBconnext.php';
                $query = mysqli_query($conn, "select tenLoaiSanPham , maLoaiSanPham from loaisanpham");
                while ($row = mysqli_fetch_array($query)) {
                ?>


                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a href="SPcategory.php?maLoaiSanPham=<?php echo $row['maLoaiSanPham']; ?>"><button class="nav-link active" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $row['tenLoaiSanPham']; ?></button></a>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
                                require 'DBconnext.php';
                                $query = mysqli_query($conn, "select * from sanpham a, loaisanpham b where a.maLoaiSanPham = b.maLoaiSanPham ");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-lg-4 col-md-6 special-grid drinks" style="margin-top: 25px;">
                                        <div class="gallery-single fix">
                                            <img src="templateUser/images/<?php echo $row['hinhAnh']; ?>" class="img-fluid" alt="Image" style="height: 200px;">
                                            <div class="why-text">
                                                <h4><?php echo $row['tenSanPham']; ?></h4>
                                                <p><?php echo $row['tenLoaiSanPham']; ?></p>
                                                <h5> <?php echo $row['giaBan']; ?></h5>
                                                <a href="SPDetail.php?maSanPham=<?php echo $row['maSanPham']; ?>"><button style="color: white; background-color: #D65106; border-color: #D65106;">Chi
                                                        tiết sản phẩm</button></a>
                                                <form action="cart.php" method="post">
                                                    <input type="number" name="soLuong" min="1" max="10" value="1">
                                                    <input type="submit" name="addcart" value="Đặt hàng">
                                                    <input type="hidden" name="hinhAnh" value="<?php echo $row['hinhAnh']; ?>">
                                                    <input type="hidden" name="tenSanPham" value="<?php echo $row['tenSanPham']; ?>">
                                                    <input type="hidden" name="giaBan" value="<?php echo $row['giaBan']; ?>">                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>


                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- End Menu -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead ">" If you're not the one cooking, stay out of
                        the way and compliment the chef. "</p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Customer Reviews -->
    <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"></div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0">
                                    <strong class="text-warning text-uppercase">Paul
                                        Mitchel</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Developer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.
                                    Mauris magna metus, dapibus nec turpis vel, semper malesuada
                                    ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0">
                                    <strong class="text-warning text-uppercase">Steve
                                        Fonsi</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Designer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.
                                    Mauris magna metus, dapibus nec turpis vel, semper malesuada
                                    ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
                                </div>
                                <h5 class="mt-4 mb-0">
                                    <strong class="text-warning text-uppercase">Daniel
                                        vebar</strong>
                                </h5>
                                <h6 class="text-dark m-0">Seo Analyst</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.
                                    Mauris magna metus, dapibus nec turpis vel, semper malesuada
                                    ante. Idac bibendum scelerisque non non purus. Suspendisse
                                    varius nibh non aliquet.</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span>
                        </a> <a class="carousel-control-next" href="#reviews" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Reviews -->

</body>

</html>
<?php
require "layout/footer.php"
?>