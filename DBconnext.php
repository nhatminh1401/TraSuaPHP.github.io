<?php
$conn = mysqli_connect('localhost', 'root', '', 'wsts-1');

if (mysqli_connect_errno()) {
    echo "Kết nối không thành công!: " . mysqli_connect_error();
}
?>