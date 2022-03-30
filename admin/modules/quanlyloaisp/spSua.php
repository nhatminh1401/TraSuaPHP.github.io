<?php

class spSua extends DB {

    public function row_Loai($id) {
        $sql_sp = 'select * from loaiSanPham where maLoaiSanPham = '.$id;
        return $this->select($sql_sp)[0];
    }

}