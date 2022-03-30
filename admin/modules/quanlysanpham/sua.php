<div class="container-fluid ">
    <h3>Sửa sản phẩm</h3>
</div>
<?php
$row = $sp->row_SanPham($_GET['id']);
?>
<div class="widget-box">
    <div class="widget-title"> 
        <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">
            <i class="icon-table"></i> Liệt kê sản phẩm 
        </a>
    </div>
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="modules/quanlysanpham/xuly.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
            <h5>&nbsp;</h5>
            <div class="control-group">
                <label class="control-label">Tên sản phẩm : </label>
                <div class="controls">
                    <input name="tensp" type="text" value="<?php echo $row['tenSanPham'] ?>"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Hình ảnh : </label>
                <div class="controls">
                    <!--<input type="button" onclick="document.getElementById('images').style.display = 'block'" value="Kho ảnh của tôi" class="btn btn-default">-->
                    <input type="hidden" name="file" value="<?php echo @$_GET['H'];?>">
                    <h5>&nbsp;</h5>
                    <div class="row-fluid">
                        <?php
                        $arr = explode("p", @$_GET['H']);
                        foreach ($arr as $r):
                            if (!empty($r)):
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-4" title="Đang chọn hình <?php echo "[" . $load->row($r)['id_image'] . "] " . $load->row($r)['name_image']; ?>">
                                    <img src="../public/images/<?php echo $load->row($r)['url_image']; ?>" class="img-responsive"  width="60" height="60">
                                </div>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Giá bán : </label>
                <div class="controls">
                    <input type="text" name="giaBan"  value="<?php echo $row['giaBan'] ?>"/> *
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Loại sản phẩm : </label>
                <div class="controls">
                    <select name="loaisp">
                        <?php
                        $tb_loai = $sp->rows_Loai();
                        foreach ($tb_loai as $r):
                            if ($row['loaiSanPham'] == $r['maLoaiSanPham']):
                                ?>
                                <option selected="selected" value="<?php echo $r['maLoaiSanPham']; ?>"><?php echo $r['tenLoaiSanPham']; ?></option>
                                <?php
                            else :
                                ?>
                                <option value="<?php echo $r['maLoaiSanPham']; ?>"><?php echo $r['tenLoaiSanPham']; ?></option>
                            <?php
                            endif;
                        endforeach;
                        ?>
                    </select> *
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="sua" value="Lưu lại" class="btn btn-default">
                    <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
            <h5>&nbsp;</h5>
        </form>
    </div>
</div>

