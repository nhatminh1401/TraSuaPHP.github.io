<?php
session_start();
unset($_SESSION["nguoidung"]);
header("location:login.php");
