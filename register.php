<?php
require "layout/header.php"
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .note {
        text-align: center;
        height: 80px;
        background: -webkit-linear-gradient(left, #f9d211, #8811c5);
        color: #fff;
        font-weight: bold;
        line-height: 80px;
    }

    .form-content {
        padding: 5%;
        border: 1px solid #ced4da;
        margin-bottom: 2%;
    }

    .form-control {
        border-radius: 1.5rem;
    }

    .btnSubmit {
        border: none;
        border-radius: 1.5rem;
        padding: 1%;
        width: 20%;
        cursor: pointer;
        background: #f9d211;
        color: #fff;
    }
</style>
<div class="container register-form">
    <div class="form">

        <div class="note">

        </div>
        <div class="note">
            <p>Xin vui lòng nhập đầy đủ thông tin đăng ký!!</p>
        </div>

        <div class="form-content">
            <a style="color: red; ">
                <?php if (isset($_SESSION["thongbao"])) {
                    echo $_SESSION["thongbao"];
                    unset($_SESSION["thongbao"]);
                } ?>
            </a>
            <form action="Xulyregister.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Họ và tên *" name="tenNguoiDung" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Số điện thoại *" name="sdt" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Địa chỉ *" name="diaChi" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a style="color: red;">
                            <?php if (isset($_SESSION["thongbaoem"])) {
                                echo $_SESSION["thongbaoem"];
                                unset($_SESSION["thongbaoem"]);
                            } ?>
                        </a>
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Email *" name="email" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mật Khẩu *" name="matKhau" />
                        </div>

                        <div class="form-group">
                            <a style="color: red;">
                                <?php if (isset($_SESSION["thongbaomk"])) {
                                    echo $_SESSION["thongbaomk"];
                                    unset($_SESSION["thongbaomk"]);
                                } ?>
                            </a>
                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu *" name="nhaplaimatkhau" />
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btnSubmit">Đăng ký</button>
            </form>
        </div>
    </div>
</div>

<?php
require "layout/footer.php"
?>