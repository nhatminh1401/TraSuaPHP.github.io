<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
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
                            $result = mysqli_query($conn, 'select count(maSanPham) as total from sanpham');
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];

                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 6;

                            $total_page = ceil($total_records / $limit);

                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            $start = ($current_page - 1) * $limit;
                            $query = mysqli_query($conn, "select * from sanpham a, loaisanpham b where a.maLoaiSanPham = b.maLoaiSanPham LIMIT $start, $limit");
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
                            <div class="pagination">
                                <?php
                                if ($current_page > 1 && $total_page > 1) {
                                    echo '<a href="index.php?page=' . ($current_page - 1) . '">Prev</a> | ';
                                }
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $current_page) {
                                        echo '<span>' . $i . '</span> | ';
                                    } else {
                                        echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
                                    }
                                }
                                if ($current_page < $total_page && $total_page > 1) {
                                    echo '<a href="index.php?page=' . ($current_page + 1) . '">Next</a> | ';
                                }
                                ?>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>

    </div>
</div>