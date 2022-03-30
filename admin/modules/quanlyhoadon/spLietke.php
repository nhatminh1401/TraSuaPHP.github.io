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

    public function table_hoadon($SP_BD) {
        $sql = 'SELECT * FROM hoadon order by maHoaDon desc limit ' . $SP_BD . ',5';
        if (@$this->select($sql))
            return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from hoadon';
        if (@$this->select($sql)) {
            $table = $this->select($sql);
            return count($table);
        }
    }

    public function perpage($numPage) {
        $sql = 'select * from hoadon';
        $table = $this->select($sql);
        $count_page = count($table);
        $total_page = ceil($count_page / 5);
        $pg = 1;
        if (isset($_GET['trang'])) {
            $pg = $_GET['trang'];
        }
        if ($numPage > 1) {
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=1">1</a></li>';
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . ($numPage - 1) . '"><<</a></li>';
        }
        for ($i = $numPage - 2; $i <= $numPage + 2; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $i . '" style="background-color: blue; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $i . '"> ' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . ($numPage + 1) . '">>></a></li>';
            echo '<li><a href="index.php?quanly=hoadon&ac=lietke&trang=' . $total_page . '">'.$total_page.'</a></li>';
        }
    }

    public function table_chitiethoadon() {
        $sql = 'SELECT * FROM cthd  ' ;
        if (@$this->select($sql))
            return $this->select($sql);
    }

    public function xoa_CTHD($id) {
        $sql = 'delete FROM cthd where maHoaDon like ' . $id;
        if (@$this->select($sql))
            $this->querry($sql);
    }

    public function xoa_HD($id) {
        $sql = 'delete FROM hoadon where maHoaDon like ' . $id;
        if (@$this->select($sql))
            $this->querry($sql);
    }

}
