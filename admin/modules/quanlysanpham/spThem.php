<?php

class spThem extends DB {
    
    public function table_Loai() {
        $sql = 'select * from loaiSanPham';
        return $this->select($sql);
    }
    
    public function table_sanpham() {
        $sql = 'select * from sanpham';
        return $this->select($sql);
    }

}

