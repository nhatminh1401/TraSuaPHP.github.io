<?php

class spSua extends DB {

    function row_Taikhoan($id) {
        $sql_Gallery = 'select * from taikhoan where tenNguoiDung = ' .$id;
        return $this->select($sql_Gallery)[0];
    }

}

