<div class="container-fluid ">
    <h3>Thêm Tài khoản mới</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Hiển thị danh sách tài khoản 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlytaikhoan/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên tài khoản : </label>
                <div class="controls">
                    <input type="text" name="tenNguoiDung">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email : </label>
                <div class="controls">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mật khẩu : </label>
                <div class="controls">
                    <input type="password" name="matKhau">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số điện thoại : </label>
                <div class="controls">
                    <input type="text" name="sdt">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Địa chỉ nhận : </label>
                <div class="controls">
                    <input type="text" name="diaChi">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=taikhoan&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>
