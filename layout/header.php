<?php
session_start();
function dangnhap()
{
	if (isset($_SESSION["nguoidung"])) {
		echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"></a>
	<div class="dropdown-menu" aria-labelledby="dropdown-a">
		<a class="dropdown-item"  href="logout.php">Đăng xuất</a>

	</div>
</li>';
	} else {
		echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tài khoản</a>
	<div class="dropdown-menu" aria-labelledby="dropdown-a">
		<a class="dropdown-item" href="register.php">Đăng ký</a>
		<a class="dropdown-item" href="login.php">Đăng nhập</a>
	</div>
</li>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Trà sữa CHNM</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="templateUser/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="templateUser/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templateUser/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="templateUser/css/style.css">   
    <link rel="stylesheet" href="templateUser/css/styles.css">  
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="templateUser/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="templateUser/css/custom.css">
    <!-- bootrap login  -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
		<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Start header -->


<header class="top-navbar">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="/index.jsp"> <img
				src="images/logo.png" alt="" />
			</a>
			
			
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link"
						href="index.php">Trang chủ</a></li>
					<li class="nav-item"><a class="nav-link"
						href="menu.php">Thực đơn</a></li>
						
				</ul>
				<a href="cart.php" class="nav-item nav-link">
                        <i class="fas fa-shopping-cart"></i>
                       <span
              class="icon-shopping-cart"></span> Sản phẩm - <span
              class= "badge badge-warning">  </span></a>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<?php dangnhap(); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- End header -->
