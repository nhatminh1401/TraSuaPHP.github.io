<?php
require "layout/header.php"
?>
<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="templateUser/images/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Chào mừng <br> đến với CHNM</strong></h1>
						<p class="m-b-40">BẠN CÓ MUỐN THỬ MỘT CHÚT <br>
							HƯƠNG VỊ CỦA SỰ SAY MÊ.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Menu</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="templateUser/images/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<h1 class="m-b-20"><strong>Chào mừng <br> đến với CHNM</strong></h1>
						<p class="m-b-40">Dăm ba cây kẹo mút  <br>
						sao có sức hút bằng CHNM.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Menu</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="templateUser/images/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<h1 class="m-b-20"><strong>Chào mừng <br> đến với CHNM</strong></h1>
						<p class="m-b-40">CHNM - Quán ăn ONLINE ship đồ về tận nơi bạn ở, một hình thức tiện lợi
							cho những tín đồ ăn đam mê ăn uống <br>
							nhưng lại không muốn đi ra ngoài vì ngại đường xa
							hoặc không tìm được quán ưng ý.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Menu</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Đến với <span>CHNM</span></h1>
					<p style="font-weight: bold ;color:black" >MENU quán vô cùng phong phú với các món ăn hấp dẫn</p>
						<p style="font-weight: bold ;color: black">được chế biến bởi đầu bếp
							chuyên đồ Hàn. Thực phẩm được chọn lựa cẩn thận, đảm bảo an toàn từ khâu chế biến
							lẫn đóng gói, để bạn có thể yên tâm thưởng thức ngay khi nhận.</p>
							<p style="font-weight: bold ;color: black">Bên cạnh đồ ăn ngon chất lượng, CHNM còn thỏa măn ví tiền của bạn với
				giá cả "hạt rẻ" bất ngờ, giúp bạn ăn uống thỏa thích mà không lo đau ví.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Menu</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="templateUser/images/about-img.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead ">
				 Với CHNM, bạn chỉ cần nằm nhà đặt đồ là có ngay món ngon giá rẻ để lấp đầy chiếc bụng
				đói của mình rồi.
				</p>
				<!-- <span class="lead">Michael Strahan</span> -->
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
	<div class="container">
		<?php
		require "SPIndex.php"
		?>
	</div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Sản phẩm mới nhất</p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<?php
				$conn = mysqli_connect('localhost', 'root', '', 'wsts-1');
				require 'DBconnext.php';
				$result = mysqli_query($conn, 'select count(maSanPham) as total from sanpham');
				$row = mysqli_fetch_assoc($result);
				$total_records = $row['total'];

				$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
				$limit = 6;

				$total_page = ceil($total_records / $limit);

				if ($current_page > $total_page) {
					$current_page = $total_page;
				} else if ($current_page < 1) {
					$current_page = 1;
				}

				$start = ($current_page - 1) * $limit;
				$query = mysqli_query($conn, "SELECT * FROM sanpham  ORDER BY maSanPham DESC LIMIT $start, $limit");
				while ($row = mysqli_fetch_array($query)) {
				?>


					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="templateUser/images/<?php echo $row['hinhAnh']; ?>">
							<img class="img-fluid" src="templateUser/images/<?php echo $row['hinhAnh']; ?>" alt="Gallery Images">
						</a>
					</div>
				<?php
				}
				?>
				<div class="pagination">
					<?php
					if ($current_page > 1 && $total_page > 1) {
						echo '<a href="index.php?page=' . ($current_page - 1) . '">Prev</a> | ';
					}
					for ($i = 1; $i <= $total_page; $i++) {
						if ($i == $current_page) {
							echo '<span>' . $i . '</span> | ';
						} else {
							echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
						}
					}
					if ($current_page < $total_page && $total_page > 1) {
						echo '<a href="index.php?page=' . ($current_page + 1) . '">Next</a> | ';
					}
					?>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<div class="carousel-item text-center active">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="templateUser/images/quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
							<h6 class="text-dark m-0">Web Developer</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="templateUser/images/quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
							<h6 class="text-dark m-0">Web Designer</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
						<div class="carousel-item text-center">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="templateUser/images/quotations-button.png" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
							<h6 class="text-dark m-0">Seo Analyst</h6>
							<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						</div>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- End Customer Reviews -->
<?php
require "layout/footer.php"
?>