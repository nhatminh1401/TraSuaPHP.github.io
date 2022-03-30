<?php

class spSua extends DB {

    public function row_SanPham($id) {
        $sql = 'select * from sanpham where maSanPham=' . $id;
        return $this->select($sql)[0];
    }
    
    public function rows_Loai() {
        $sql = 'select * from loaisanpham';
        return $this->select($sql);
    }

}
