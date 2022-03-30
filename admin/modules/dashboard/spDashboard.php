<?php

class spDashboard extends DB {
    
    public function countLoaiSP() {
        $sql = 'select * from loaiSanPham';
        $table = $this->select($sql);
        return count($table);
    }
    public function countSanPham() {
        $sql = 'select * from sanpham';
        $table = $this->select($sql);
        return count($table);
    }   
    public function countTaiKhoan() {
        $sql = 'select * from taikhoan';
        $table = $this->select($sql);
        return count($table);
    }
}
