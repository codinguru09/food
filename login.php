<!DOCTYPE html>
<html lang="en">

<head>
	<title>Restaurano</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link type="image/x-icon" href="images/fav-icon.png" rel="icon">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

	<div class="sb-preloader">
		<div class="sb-preloader-bg"></div>
		<div class="sb-preloader-body">
			<div class="sb-loading">
				<div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
			</div>
			<div class="sb-loading-bar">
				<div class="sb-bar"></div>
			</div>
		</div>
	</div>

	<header class="header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-4 col-lg-3 col-md-4 col-12">
					<div class="header-logo">
						<a href="index.html"><img src="images/logo.png" alt="Brand Logo"></a>
					</div>
				</div>
				<div class="col-xl-8 col-lg-9 col-md-8 col-12">
					<div class="main-menu align-items-center">
						<div class="sidemenu-overlay"></div>
						<div class="menu">
							<div class="sidemenu-header">
								<div class="sidemenu-logo">
									<img src="images/sidemenu-logo.png" alt="Brand Logo">
								</div>
								<div class="sidemenu-close">
									<span></span>
								</div>
							</div>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="menu.html">Menu</a></li>
								<li class="has-child-iteam">
									<a href="javascript:void(0)">Shop</a>
									<ul>
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="shop-detail.html">Shop Detail</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="has-child-iteam active">
									<a href="javascript:void(0)">Pages</a>
									<ul>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="book-now.html">Book Now</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="404.html">404</a></li>
										<li class="active"><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
									</ul>
								</li>
								<li class="has-child-iteam">
									<a href="javascript:void(0)">Blog</a>
									<ul>
										<li><a href="blog-right.html">Blog Right</a></li>
										<li><a href="blog-left.html">Blog Left</a></li>
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-detail.html">Blog Detail</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="menu-icon">
							<ul>
								<li class="header-search"><a href="javascript:void(0)"><img src="images/search.png" class="transition" alt="Search Icon"></a></li>
								<li class="admin-user"><a href="login.html"><img src="images/user.png" class="transition" alt="User Icon"></a></li>
								<li class="cart">
									<a href="javascript:void(0)" class="cart-link"><img src="images/cart.png" class="transition" alt="Cart Icon"><span class="count">0</span></a>
									<div class="cart-menu">
										<ul class="cart-listing">
											<li>
												<div class="item-content">
													<a href="shop-detail.html" class="item-img"><img src="images/recipe-2.jpg" alt="Item Image" class="transition"></a>
													<div class="item-text">
														<a href="shop-detail.html" class="item-title">Fast Platter</a>
														<span class="sprice">$66.70</span>
														<div class="quantity">
															<label>Qty:</label>
															<input type="number" name="quantity" class="form-control" value="1" min="1" max="10">
														</div>
													</div>
												</div>
												<a href="#" class="remove-item">×</a>
											</li>
											<li>
												<div class="item-content">
													<a href="shop-detail.html" class="item-img"><img src="images/recipe-3.jpg" alt="Item Image" class="transition"></a>
													<div class="item-text">
														<a href="shop-detail.html" class="item-title">Special Poha</a>
														<span class="sprice">$65.77</span>
														<div class="quantity">
															<label>Qty:</label>
															<input type="number" name="quantity" class="form-control" value="1" min="1" max="10">
														</div>
													</div>
												</div>
												<a href="#" class="remove-item">×</a>
											</li>
											<li>
												<div class="item-content">
													<a href="shop-detail.html" class="item-img"><img src="images/recipe-4.jpg" alt="Item Image" class="transition"></a>
													<div class="item-text">
														<a href="shop-detail.html" class="item-title">Adana Kabab</a>
														<span class="sprice">$75.88</span>
														<div class="quantity">
															<label>Qty:</label>
															<input type="number" name="quantity" class="form-control" value="1" min="1" max="10">
														</div>
													</div>
												</div>
												<a href="#" class="remove-item">×</a>
											</li>
										</ul>
										<div class="sub-total">
											<strong>Subtotal:</strong> <span class="sprice">$66.70</span>
										</div>
										<div class="cart-button">
											<ul>
												<li><a href="cart.html" class="button">View Cart</a></li>
												<li><a href="checkout.html" class="button">Checkout</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="toggle-menu"><span></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="search-popup">
			<div class="search-popup-overlay transition"></div>
			<div class="search-popup-inner">
				<div class="container">
					<div class="search-box">
						<input type="text" name="search" class="form-control" placeholder="Search Here">
						<button class="search-icon"><img src="images/search.png" class="transition" alt="Search Icon"></button>
						<a href="javascript:void(0)" class="close-search">×</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main id="main" class="main">

		<section class="page-banner overflow-hidden">
			<div class="banner-bg" style="background-image: url(images/sub-page-banner.png)"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="page-banner-content wow fadeInLeft">
							<h1 class="sub-page-title">Login</h1>
							<div class="sub-page-content">
								<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum
									ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at,
									neque.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="breadcum wow fadeInRight">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Pages</li>
								<li>Login</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="customer-form overflow-hidden ptb-100">
			<div class="container">
				<div class="customer-form-inner">
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-12 order-t-2">
							<div class="customer wow fadeInLeft">
								<div class="section-headding pb-35">
									<span class="sub-title text-uppercase">Login</span>
									<h2>Customer Login</h2>
								</div>


								<form method="post">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email*" required="">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Your Password*" required="">
											</div>
										</div>
									</div>
									<div class="row login-btn-group align-items-center">
										<div class="col-xl-6 col-lg-6 col-md-6 order-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="Remember">
												<label class="form-check-label" for="Remember">Remember Me</label>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 order-1">
											<button class="button">Login</button>
										</div>
									</div>
								</form>


								<div class="account-info">
									<p>Don't have an account? <a href="register.html">Create New Account</a></p>
									<p><a href="404.html">Forgot your password?</a></p>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 order-t-1">
							<div class="customer-img wow fadeInRight">
								<img src="images/customer.png" alt="Customer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<footer class="footer wow fadeInUp">
		<div class="container">
			<div class="footer-inner ptb-100">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 order-t-1">
						<div class="footer-box-logo">
							<a href="index.html" class="footer-logo"><img src="images/footer-logo.png" alt="Brand Logo"></a>
							<p>Lectus magna fringilla urna row porttitor rhoncus. Velit sed se ullamcorper morbio</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 order-t-3">
						<div class="footer-box">
							<h6 class="footer-title text-uppercase">Opening Hours</h6>
							<ul>
								<li>Monday - Friday</li>
								<li>10.00 AM - 11.00 PM</li>
							</ul>
						</div>
						<div class="footer-box">
							<h6 class="footer-title text-uppercase">Phone</h6>
							<ul>
								<li><a href="telto:+68123456789">(+68) 123 456 789</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 order-t-4">
						<div class="footer-box">
							<h6 class="footer-title text-uppercase">Address</h6>
							<ul>
								<li>570 8th Ave, New York, NY 10018 United States</li>
							</ul>
						</div>
						<div class="footer-box">
							<h6 class="footer-title text-uppercase">Email</h6>
							<ul>
								<li><a href="mailto:info@example.com">info@example.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 order-t-2">
						<div class="footer-box newsletter-box">
							<h6 class="footer-title text-uppercase">Newsletter</h6>
							<form>
								<div class="form-group">
									<input type="text" name="text" class="form-control" placeholder="Email Address" required>
								</div>
								<button class="button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="text-center">
					<p>Restaurano all Rights Reserved. Designed By <a href="#">TemplatesCoder.com</a></p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/animation.js"></script>
	<script src="js/custom.js"></script>


	<?php
	include 'database/connect.php';

	$mysqli = new mysqli('localhost', 'root', '', 'FoodWebsiteDb');

	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$password = $_POST["password"];

		echo ($email);
		echo ($password);

		// Check if the email exists in the database
		$sql = "SELECT * FROM usertable WHERE email='$email'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			// Email exists, now check if the password matches
			$row = $result->fetch_assoc();
			$stored_password = $row["password"];
			if ($password == $stored_password) {
				// Password matches
				echo "Login successful";
			} else {
				// Password doesn't match
				echo "Incorrect password";
			}
		} else {
			// Email doesn't exist in the database
			echo "Email not found";
		}
	}
	?>



</body>

</html>