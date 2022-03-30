<div id="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['quanly']) && isset($_GET['ac'])) {
            $get1 = $_GET['quanly'];
            $get2 = $_GET['ac'];
        } else {
            $get1 = '';
            $get2 = '';
        }
        if (($get1 == 'loaisp') && ($get2 == 'them')) {
            require ('modules/quanlyloaisp/them.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'lietke')) {
            require 'modules/quanlyloaisp/spLietke.php';
            $loai = new spLietke();
            require('modules/quanlyloaisp/lietke.php');
        } else if (($get1 == 'loaisp') && ($get2 == 'sua')) {
            require 'modules/quanlyloaisp/spSua.php';
            $loai = new spSua();
            require('modules/quanlyloaisp/sua.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'them')) {
            include 'modules/quanlysanpham/spThem.php';
            $sp = new spThem();
            require('modules/quanlysanpham/them.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'lietke')) {
            require 'modules/quanlysanpham/spLietke.php';
            $sp = new spLietke();
            require('modules/quanlysanpham/lietke.php');
        } else if (($get1 == 'sanpham') && ($get2 == 'sua')) {
            require 'modules/quanlysanpham/spSua.php';
            $sp = new spSua();
            require('modules/quanlysanpham/sua.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'them')) {
            require('modules/quanlytaikhoan/them.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'lietke')) {
            require 'modules/quanlytaikhoan/spLietke.php';
            $lk = new spLietke();
            require('modules/quanlytaikhoan/lietke.php');
        } else if (($get1 == 'taikhoan') && ($get2 == 'sua')) {
            require 'modules/quanlytaikhoan/spSua.php';
            $tk = new spSua();
            require('modules/quanlytaikhoan/sua.php');
        } else if (($get1 == 'hoadon') && ($get2 == 'lietke')) {
            require 'modules/quanlyhoadon/spLietke.php';
            $hd = new spLietke();
            require('modules/quanlyhoadon/lietke.php');
        } else if (($get1 == 'admin') && ($get2 == 'xuly')) {
            require 'modules/admin/spXuly.php';
            $xuly = new spXuly();
            require('modules/admin/xuly.php');
        } else {
            require 'modules/dashboard/spDashboard.php';
            $sp = new spDashboard();
            require ('modules/dashboard/dashboard.php');
        }
        ?>
    </div>
</div>
<div class="clear"></div>