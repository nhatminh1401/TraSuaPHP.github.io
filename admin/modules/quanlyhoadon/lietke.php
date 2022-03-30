<div class="container-fluid">
    <h3>Danh sách Hóa đơn [ <?php echo $hd->count(); ?> Đơn đặt hàng ]</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $hd->perpage($_GET['trang']);
            } else {
                $hd->perpage(1);
            }
            ?>
        </ul>
        <hr>
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>ID hóa đơn</strong></td>
                <td><strong>Tên khách hàng</strong></td>
                <td><strong>Số điện thoại</strong></td>
                <td><strong>Địa chỉ</strong></td>
                <td><strong>Ghi chú</strong></td>
            </tr>
            <?php
            if (empty($_GET['maHoaDon'])) {
                $_GET['maHoaDon'] = 0;
            }
            if ($hd->table_hoadon($SP_BD)):
                foreach ($hd->table_hoadon($SP_BD) as $row):
                    ?>
                    <tr>
                        <td>
                            <a href="index.php?quanly=hoadon&ac=lietke&trang=<?php echo $_GET['trang']; ?>&maHoaDon=<?php echo $row[0]; ?>" class="btn btn-info">
                                <center>
                                    <?php
                                    if ($_GET['maHoaDon'] == $row[0]):
                                        ?>
                                        <span class="icon icon-check"></span> <?php echo $row[0]; ?>
                                    <?php else: ?>
                                        <span class="icon icon-check-empty"></span> <?php echo $row[0]; ?>
                                    <?php endif; ?>
                                </center>
                            </a>
                        </td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
        </table>
    </div>
</div>

<div class="widget-box container">
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $hd->perpage($_GET['trang']);
            } else {
                $hd->perpage(1);
            }
            ?>
        </ul>
        <hr>
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>Mã chi tiết</strong></td>
                <td><strong>Mã hóa đơn</strong></td>
                <td><strong>Tên khách hàng</strong></td>
                <td><strong>Số lượng</strong></td>
                <td><strong>Giá bán</strong></td>
                <td><strong>Thành tiền</strong></td>
            </tr>
            <?php
            if (empty($_GET['maCT'])) {
                $_GET['maCT'] = 0;
            }
            if ($hd->table_chitiethoadon($SP_BD)):
                foreach ($hd->table_chitiethoadon($SP_BD) as $r):
                    ?>
                    <tr>
                        <td>
                            <a href="index.php?quanly=hoadon&ac=lietke&trang=<?php echo $_GET['trang']; ?>&maCT=<?php echo $r[0]; ?>" class="btn btn-info">
                                <center>
                                    <?php
                                    if ($_GET['maCT'] == $r[0]):
                                        ?>
                                        <span class="icon icon-check"></span> <?php echo $r[0]; ?>
                                    <?php else: ?>
                                        <span class="icon icon-check-empty"></span> <?php echo $r[0]; ?>
                                    <?php endif; ?>
                                </center>
                            </a>
                        </td>
                        <td><?php echo $r[2]; ?></td>
                        <td><?php echo $r[1]; ?></td>
                        <td><?php echo $r[3]; ?></td>
                        <td><?php echo $r[4]; ?></td>
                        <td><?php echo $r[5]; ?></td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
        </table>
    </div>
</div>