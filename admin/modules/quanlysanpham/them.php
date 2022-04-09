<div class="container-fluid ">
    <h3>Thêm sản phẩm</h3>
</div>
<div class="widget-box" >
    <div class="widget-title">
        <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i>
            Liệt kê sản phẩm 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên sản phẩm : </label>
                <div class="controls">
                    <input name="tensp" type="text"> *
                </div>
            </div>
            
            <!-- <div class="control-group">
            <label class="control-label">
            <div class="controls">
                <form method="POST" action="upload.php" enctype="multipart/form-data"> 
                    <input type="hidden" name="size" value="1000000"> 
                    <input type="file" name="image"> 
                </form> 
            </div>
            </label>
            </div> -->

            <div class="control-group">
                <label class="control-label">Giá bán: </label>
                <div class="controls">
                    <input type="text" name="giaBan" placeholder="Giá bán"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Loại sản phẩm : </label>
                <div class="controls">
                    <select name="loaiSanPham">
                        <?php
                        $tb_loai = $sp->table_Loai();
                        foreach ($tb_loai as $r):
                            ?>
                            <option value="<?php echo $r['maLoaiSanPham'] ?>"><?php echo $r['tenLoaiSanPham'] ?></option>
                            <?php
                        endforeach;
                        ?>
                    </select> *
                </div>
            </div>
            <div class="control-group align-center">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
                    <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>