<?php

if (isset($_GET['trang'])) {
    $numPage = $_GET['trang'];
} else {
    $numPage = '';
}
if ($numPage == '' || $numPage == '1') {
    $SP_BD = 0;
} else {
    $SP_BD = ($numPage * 5) - 5;
}

class spLietke extends DB {

    public function table_SanPham($SP_BD) {
        $sql = 'select * from sanpham order by maSanPham desc limit ' . $SP_BD . ',5';
        return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from sanpham';
        $table = $this->select($sql);
        return count($table);
    }

    public function perpage($numPage) {
        $sqlSP = 'select * from sanpham';
        $tableSP = $this->select($sqlSP);
        $count_page = count($tableSP);
        $total_page = ceil($count_page / 5);
        $pg = 1;
        if (isset($_GET['trang'])) {
            $pg = $_GET['trang'];
        }
        if ($numPage > 1) {
            echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=1">1</a></li>';
            echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=' . ($numPage - 1) . '"><<</a></li>';
        }
        for ($i = $numPage - 3; $i <= $numPage + 3; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=' . $i . '" style="background-color: blue; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=' . $i . '"> ' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=' . ($numPage + 1) . '">>></a></li>';
            echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang=' . $total_page . '">'.$total_page.'</a></li>';
        }
    }

    public function row_loai($id) {
        $sql = 'select * from loaisanpham where maLoaiSanPham = ' . $id;
        return $this->select($sql);
    }

}
