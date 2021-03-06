<div class="container-fluid ">
    <h3>Danh sách tài khoản [ <?php echo $lk->count(); ?> Tài khoản ]</h3>
</div>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=taikhoan&ac=them" class="btn btn-default">
            <i class="icon-plus"></i> Thêm tài khoản mới 
        </a>
    </div>
    <div class="widget-content nopadding">
        <ul class="pagination ">
            <?php
            if (@$_GET['trang']) {
                $lk->perpage($_GET['trang']);
            } else {
                $lk->perpage(1);
            }
            ?>
        </ul>
        <?php
        if (@$_GET['tt']) {
            echo $_GET['tt'];
        }
        ?>
        <hr>
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>Tài khoản</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Mật khẩu</strong></td>
                <td><strong>Điện thoại</strong></td>
                <td><strong>Địa chỉ</strong></td>
            </tr>
            <?php
            $tbtk = $lk->table_Taikhoan($SP_BD);
            foreach ($tbtk as $row):
                ?>
                <tr>
                    <td><?php echo $row['tenNguoiDung']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['matKhau']; ?></td>
                    <td><?php echo $row['sdt']; ?></td>
                    <td><?php echo $row['diaChi']; ?></td>
                    <td>
                        <a href="index.php?quanly=taikhoan&ac=sua&id=<?php echo $row['tenNguoiDung']; ?>" class="btn btn-default">
                            <center>
                                <span class="icon icon-pencil"></span> Sửa
                            </center>
                        </a>
                    </td>
                    <td>
                        <a href="modules/quanlytaikhoan/xuly.php?id=<?php echo $row['tenNguoiDung']; ?>" class="btn btn-default">
                            <center>
                                <span class="icon icon-cut"></span> Xóa
                            </center>
                        </a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
        </table>
    </div>
</div>