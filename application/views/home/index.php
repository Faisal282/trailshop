<?php if ($_SESSION['role'] == 1) : ?>
	<!-- ini berfungsi untuk view admin saja -->
<?php else: ?>
	<!-- ini berfungsi untuk view pelanggan saja -->
<?php endif; ?>


<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="wrap_header">
			<!-- Logo -->
			<a href="index.html" class="logo">
				<img src="<?= base_url('assets/') ?>images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Menu -->
			<div class="wrap_menu">
				<nav class="menu">
					<ul class="main_menu">
						<li>
							<a href="<?= base_url('') ?>">Home</a>
						</li>
						<li>
							<a href="<?= base_url('users/store') ?>">Store</a>
						</li>
						<li>
							<a href="<?= base_url('users/cart') ?>">Cart</a>
						</li>
						<li>
							<a href="<?= base_url('login/logout') ?>">Logout</a>
						</li>
					</ul>
				</nav>
			</div>

			<!-- Header Icon -->
			<div class="header-icons">
				<p>
					<?= $_SESSION['nama'] ?>&nbsp;&nbsp;</p>
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="<?= base_url('assets/') ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide1"></span>

				<div class="header-wrapicon2">
					<img src="<?= base_url('assets/') ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown"
					 alt="ICON">
					<span class="header-icons-noti">0</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">
						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										White Shirt With Pleat Detail Back
									</a>

									<span class="header-cart-item-info">
										1 x $19.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-02.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Converse All Star Hi Black Canvas
									</a>

									<span class="header-cart-item-info">
										1 x $39.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-03.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Nixon Porter Leather Watch In Tan
									</a>

									<span class="header-cart-item-info">
										1 x $17.00
									</span>
								</div>
							</li>
						</ul>

						<div class="header-cart-total">
							Total: $75.00
						</div>

						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Log Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="index.html" class="logo-mobile">
			<img src="<?= base_url('assets/') ?>images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="<?= base_url('assets/') ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide2"></span>

				<div class="header-wrapicon2">
					<img src="<?= base_url('assets/') ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown"
					 alt="ICON">
					<span class="header-icons-noti">0</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">
						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										White Shirt With Pleat Detail Back
									</a>

									<span class="header-cart-item-info">
										1 x $19.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-02.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Converse All Star Hi Black Canvas
									</a>

									<span class="header-cart-item-info">
										1 x $39.00
									</span>
								</div>
							</li>

							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="<?= base_url('assets/') ?>images/item-cart-03.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										Nixon Porter Leather Watch In Tan
									</a>

									<span class="header-cart-item-info">
										1 x $17.00
									</span>
								</div>
							</li>
						</ul>

						<div class="header-cart-total">
							Total: $75.00
						</div>

						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Log Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
	</div>

	<!-- Menu Mobile -->
	<div class="wrap-side-menu">
		<nav class="side-menu">
			<ul class="main-menu">
				<li class="item-menu-mobile">
					<a href="<?php base_url('') ?>">Home</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Shop</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Sale</a>
				</li>

				<li class="item-menu-mobile">
					<a href="cart.html">Features</a>
				</li>

				<li class="item-menu-mobile">
					<a href="blog.html">Blog</a>
				</li>

				<li class="item-menu-mobile">
					<a href="about.html">About</a>
				</li>

				<li class="item-menu-mobile">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('assets/') ?>bgstore.jpg);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						Koleksi Motor
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						Terbaru
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<!-- Button -->
						<a href="<?= base_url('users/store') ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Beli Sekarang
						</a>
					</div>
				</div>
			</div>

			<div class="item-slick1 item2-slick1" style="background-image: url(<?= base_url('assets/') ?>bgcart.jpg);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
						Motor Keluaran 2019
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
						Baru Datang
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
						<!-- Button -->
						<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Beli Sekarang
						</a>
					</div>
				</div>
			</div>

			<div class="item-slick1 item3-slick1" style="background-image: url(<?= base_url('assets/') ?>bghome.jpg); background-position: 0vh -10vh;">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Dengan Harga Murah, Hemat dan Terjangkau
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
						BURUAN BELI
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
						<!-- Button -->
						<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Beli Sekarang
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/banner-02.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							Dresses
						</a>
					</div>
				</div>

				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/banner-05.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							Sunglasses
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/banner-03.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							Watches
						</a>
					</div>
				</div>

				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/banner-07.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							Footerwear
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/banner-04.jpg" alt="IMG-BENNER">

					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
							Bags
						</a>
					</div>
				</div>

				<!-- block2 -->
				<div class="block2 wrap-pic-w pos-relative m-b-30">
					<img src="<?= base_url('assets/') ?>images/icons/bg-01.jpg" alt="IMG">

					<div class="block2-content sizefull ab-t-l flex-col-c-m">
						<h4 class="m-text4 t-center w-size3 p-b-8">
							Sign up & get 20% off
						</h4>

						<p class="t-center w-size4">
							Be the frist to know about the latest fashion news and get exclu-sive offers
						</p>

						<div class="w-size2 p-t-25">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Featured Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							<img src="<?= base_url('assets/') ?>images/item-02.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Herschel supply co 25l
							</a>

							<span class="block2-price m-text6 p-r-5">
								$75.00
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="<?= base_url('assets/') ?>images/item-03.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Denim jacket blue
							</a>

							<span class="block2-price m-text6 p-r-5">
								$92.50
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="<?= base_url('assets/') ?>images/item-05.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Coach slim easton black
							</a>

							<span class="block2-price m-text6 p-r-5">
								$165.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
							<img src="<?= base_url('assets/') ?>images/item-07.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Frayed denim shorts
							</a>

							<span class="block2-oldprice m-text7 p-r-5">
								$29.50
							</span>

							<span class="block2-newprice m-text8 p-r-5">
								$15.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							<img src="<?= base_url('assets/') ?>images/item-02.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Herschel supply co 25l
							</a>

							<span class="block2-price m-text6 p-r-5">
								$75.00
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="<?= base_url('assets/') ?>images/item-03.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Denim jacket blue
							</a>

							<span class="block2-price m-text6 p-r-5">
								$92.50
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative">
							<img src="<?= base_url('assets/') ?>images/item-05.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Coach slim easton black
							</a>

							<span class="block2-price m-text6 p-r-5">
								$165.90
							</span>
						</div>
					</div>
				</div>

				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
							<img src="<?= base_url('assets/') ?>images/item-07.jpg" alt="IMG-PRODUCT">

							<div class="block2-overlay trans-0-4">
								<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
									<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
									<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
								</a>

								<div class="block2-btn-addcart w-size1 trans-0-4">
									<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
										Add to Cart
									</button>
								</div>
							</div>
						</div>

						<div class="block2-txt p-t-20">
							<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
								Frayed denim shorts
							</a>

							<span class="block2-oldprice m-text7 p-r-5">
								$29.50
							</span>

							<span class="block2-newprice m-text8 p-r-5">
								$15.90
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- Banner2 -->
<section class="banner2 bg5 p-t-55 p-b-55">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
				<div class="hov-img-zoom pos-relative">
					<img src="<?= base_url('assets/') ?>images/banner-08.jpg" alt="IMG-BANNER">

					<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
						<span class="m-text9 p-t-45 fs-20-sm">
							The Beauty
						</span>

						<h3 class="l-text1 fs-35-sm">
							Lookbook
						</h3>

						<a href="#" class="s-text4 hov2 p-t-20 ">
							View Collection
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
				<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
					<img src="<?= base_url('assets/') ?>images/shop-item-09.jpg" alt="IMG-BANNER">

					<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
						<div class="t-center">
							<a href="product-detail.html" class="dis-block s-text3 p-b-5">
								Gafas sol Hawkers one
							</a>

							<span class="block2-oldprice m-text7 p-r-5">
								$29.50
							</span>

							<span class="block2-newprice m-text8">
								$15.90
							</span>
						</div>

						<div class="flex-c-m p-t-44 p-t-30-xl">
							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 days">
									69
								</span>

								<span class="s-text5">
									days
								</span>
							</div>

							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 hours">
									04
								</span>

								<span class="s-text5">
									hrs
								</span>
							</div>

							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 minutes">
									32
								</span>

								<span class="s-text5">
									mins
								</span>
							</div>

							<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
								<span class="m-text10 p-b-1 seconds">
									05
								</span>

								<span class="s-text5">
									secs
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
				Our Blog
			</h3>
		</div>

		<div class="row">
			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="<?= base_url('assets/') ?>images/blog-01.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								Black Friday Guide: Best Sales & Discount Codes
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

						<p class="s-text8 p-t-16">
							Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et
							malesuada fames
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="<?= base_url('assets/') ?>images/blog-02.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								The White Sneakers Nearly Every Fashion Girls Own
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

						<p class="s-text8 p-t-16">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam
							nec ornare tellus, ac fringilla lacus. Ut sit ame
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="<?= base_url('assets/') ?>images/blog-03.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								New York SS 2018 Street Style: Annina Mislin
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

						<p class="s-text8 p-t-16">
							Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula
							porttitor. Fusce sit amet maximus nunc
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>

			<div>
				<p class="s-text7 w-size27">
					Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716
					6879
				</p>

				<div class="flex-m p-t-30">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Categories
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Men
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Women
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Dresses
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Sunglasses
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Links
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Search
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						About Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Contact Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Help
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Track Order
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Shipping
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						FAQs
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Newsletter
			</h4>

			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
					<span class="effect1-line"></span>
				</div>

				<div class="w-size2 p-t-20">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
						Subscribe
					</button>
				</div>

			</form>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<a href="#">
			<img class="h-size2" src="<?= base_url('assets/') ?>images/icons/paypal.png" alt="IMG-PAYPAL">
		</a>

		<a href="#">
			<img class="h-size2" src="<?= base_url('assets/') ?>images/icons/visa.png" alt="IMG-VISA">
		</a>

		<a href="#">
			<img class="h-size2" src="<?= base_url('assets/') ?>images/icons/mastercard.png" alt="IMG-MASTERCARD">
		</a>

		<a href="#">
			<img class="h-size2" src="<?= base_url('assets/') ?>images/icons/express.png" alt="IMG-EXPRESS">
		</a>

		<a href="#">
			<img class="h-size2" src="<?= base_url('assets/') ?>images/icons/discover.png" alt="IMG-DISCOVER">
		</a>

		<div class="t-center s-text8 p-t-20">
			Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
			by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div>
	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<?php endif; ?>
<?php if ($_SESSION['role'] == 1) : ?>
<!-- preloader area start -->
<div id="preloader">
	<div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
	<!-- sidebar menu area start -->
	<div class="sidebar-menu">
		<div class="sidebar-header">
			<div class="logo">
				<a href="<?= base_url('') ?>"><img src="<?=base_url('assets')?>/images/icon/logo.png" alt="logo"></a>
			</div>
		</div>
		<div class="main-menu">
			<div class="menu-inner">
				<nav>
					<ul class="metismenu" id="menu">
						<li>
							<a href="<?= base_url('') ?>"><i class="ti-map-alt"></i> <span>Produk</span></a>
						</li>
						<li>
							<a href="<?= base_url('admin/pesanan') ?>"><i class="ti-map-alt"></i> <span>Pesanan</span></a>
						</li>
						<li>
							<a href="<?= base_url('admin/brand') ?>"><i class="ti-map-alt"></i> <span>Brand</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- sidebar menu area end -->
	<!-- main content area start -->
	<div class="main-content">
		<!-- header area start -->
		<div class="header-area">
			<div class="row align-items-center">
				<!-- nav and search button -->
				<div class="col-md-6 col-sm-8 clearfix">
					<div class="nav-btn pull-left">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="search-box pull-left">
						<form action="#">
							<input type="text" name="search" placeholder="Search..." required>
							<i class="ti-search"></i>
						</form>
					</div>
				</div>
				<!-- profile info & task notification -->
				<div class="col-md-6 col-sm-4 clearfix">
					<ul class="notification-area pull-right">
						<li id="full-view"><i class="ti-fullscreen"></i></li>
						<li id="full-view-exit"><i class="ti-zoom-out"></i></li>
						<li class="dropdown">
							<i class="ti-bell dropdown-toggle" data-toggle="dropdown">
								<span>2</span>
							</i>
							<div class="dropdown-menu bell-notify-box notify-box">
								<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
								<div class="nofity-list">
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
										<div class="notify-text">
											<p>New Commetns On Post</p>
											<span>30 Seconds ago</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
										<div class="notify-text">
											<p>Some special like you</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
										<div class="notify-text">
											<p>New Commetns On Post</p>
											<span>30 Seconds ago</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
										<div class="notify-text">
											<p>Some special like you</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
							<div class="dropdown-menu notify-box nt-enveloper-box">
								<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
								<div class="nofity-list">
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img1.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img2.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">When you can connect with me...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img3.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">I missed you so much...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img4.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Your product is completely Ready...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img2.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img1.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img3.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="settings-btn">
							<i class="ti-settings"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- header area end -->
		<!-- page title area start -->
		<div class="page-title-area">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="breadcrumbs-area clearfix">
						<h4 class="page-title pull-left">Dashboard</h4>
						<ul class="breadcrumbs pull-left">
							<li><a href="<?= base_url('') ?>">Home</a></li>
							<li><span>Produk</span></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 clearfix">
					<div class="user-profile pull-right">
						<img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
						<h4 class="user-name dropdown-toggle" data-toggle="dropdown">
							<?= $_SESSION['nama'] ?> <i class="fa fa-angle-down"></i></h4>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url('login/logout') ?>">Log Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- page title area end -->
		<div class="main-content-inner">
			<div class="row">
				<!-- Dark table start -->
				<div class="col-12 mt-5">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title">Data Produk</h4>
							<?php if ($this->session->flashdata('pesan')) : ?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>
									<?= $this->session->flashdata('pesan') ?></strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
								</button>
							</div>
							<?php endif; ?>
							<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">Tambah</button>
							<div class="data-tables datatable-dark">
								<table id="dataTable3" class="text-center">
									<thead class="text-capitalize">
										<tr>
											<th>No</th>
											<th>Nama Produk</th>
											<th>Jenis Produk</th>
											<th>Brand</th>
											<th>OPSI</th>
											<!--  <th>OPSI</th> -->
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($produk as $p ) : ?>
										<tr>
											<td>
												<?= $no ?>
											</td>
											<td>
												<?= $p['nama_produk'] ?>
											</td>
											<td>
												<?= $p['jenis_produk'] ?>
											</td>
											<td>
												<?= $p['nama_brand'] ?>
											</td>
											<td>
												<button type="button" class="btn btn-success btn-flat btn-lg mt-3" onclick="window.location.href='<?= base_url('admin/updateView/') . 'produk/' . $p['id_produk'] ?>'">Update</button>
												<button type="button" class="btn btn-danger btn-flat btn-lg mt-3" onclick="window.location.href='<?= base_url('admin/deleteProduk/') . $p['id_produk'] ?>'">Hapus</button>
											</td>
											<input type="hidden" name="id_produk" value="<?= $p['id_produk'] ?>">
										</tr>
										<?php $no++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Dark table end -->
			</div>
		</div>
	</div>
	<!-- main content area end -->
</div>
<!-- page container area end -->
<!-- offset area start -->
<div class="offset-area">
	<div class="offset-close"><i class="ti-close"></i></div>
	<ul class="nav offset-menu-tab">
		<li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
		<li><a data-toggle="tab" href="#settings">Settings</a></li>
	</ul>
	<div class="offset-content tab-content">
		<div id="activity" class="tab-pane fade in show active">
			<div class="recent-activity">
				<div class="timeline-task">
					<div class="icon bg1">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-check"></i>
					</div>
					<div class="tm-title">
						<h4>Added</h4>
						<span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>You missed you Password!</h4>
						<span class="time"><i class="ti-time"></i>09:20 Am</span>
					</div>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="fa fa-bomb"></i>
					</div>
					<div class="tm-title">
						<h4>Member waiting for you Attention</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="ti-signal"></i>
					</div>
					<div class="tm-title">
						<h4>You Added Kaji Patha few minutes ago</h4>
						<span class="time"><i class="ti-time"></i>01 minutes ago</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg1">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="tm-title">
						<h4>Ratul Hamba sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Hello sir , where are you, i am egerly waiting for you.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="fa fa-bomb"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="ti-signal"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
			</div>
		</div>
		<div id="settings" class="tab-pane fade">
			<div class="offset-settings">
				<h4>General Settings</h4>
				<div class="settings-list">
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Notifications</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch1" />
								<label for="switch1">Toggle</label>
							</div>
						</div>
						<p>Keep it 'On' When you want to get all the notification.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show recent activity</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch2" />
								<label for="switch2">Toggle</label>
							</div>
						</div>
						<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show your emails</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch3" />
								<label for="switch3">Toggle</label>
							</div>
						</div>
						<p>Show email so that easily find you.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show Task statistics</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch4" />
								<label for="switch4">Toggle</label>
							</div>
						</div>
						<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Notifications</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch5" />
								<label for="switch5">Toggle</label>
							</div>
						</div>
						<p>Use checkboxes when looking for yes or no answers.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Data Produk</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('produk/tambah') ?>" method="POST">
								<div class="form-group">
									<label for="nama_produk">Nama Produk</label>
									<input type="text" class="form-control" id="nama_produk" aria-describedby="emailHelp" placeholder="Enter Produk Nama"
									 name="nama_produk">
								</div>
								<div class="form-group">
									<label class="col-form-label">Jenis Produk</label>
									<select class="form-control" name="jenis_produk">
										<option value="trail">trail</option>
										<option value="sport">sport</option>
										<option value="bebek">bebek</option>
										<option value="street">street</option>
										<option value="matic">matic</option>
									</select>
								</div>
								<div class="form-group">
									<label class="col-form-label">Brand</label>
									<select class="form-control" name="brand">
										<?php foreach ($brand as $b ) : ?>
										<option value="<?= $b['id_brand'] ?>">
											<?= $b['nama_brand'] ?>
										</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input type="text" class="form-control" id="harga" aria-describedby="emailHelp" placeholder="Enter Harga"
									 name="harga">
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- basic modal end -->
<script type="text/javascript">
	var url = "<?= base_url('') ?>";

	function delete(id) {
		var r = confirm("Apakah Anda Yakin ingin menghapus?");
		// if (r == true){
		// 	windows.location.href = url + "admin/deleteProduk/" + id;
		// } else{
		// 	return false;
		// }
	}

</script>
<?php endif ?>
