
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Title</title>
	</head>
	<body>
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<h1 class="navbar-brand">Furni.</h1>
				<div class="collapse navbar-collapse">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Home</a></li>
						<li class="nav-item" ><a class="nav-link" href="{{url('/shop')}}">Shop</a></li>
						<li class="nav-item" ><a class="nav-link" href="#">About us</a></li>
						<li class="nav-item" ><a class="nav-link" href="#">Services</a></li>
						<li class="nav-item" ><a class="nav-link" href="#">Blog</a></li>
						<li class="nav-item" ><a class="nav-link" href="#">Contact us</a></li>
					</ul>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li class="nav-item" ><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>	
		</nav>

		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-4">
						<div class="intro-excerpt">
								@yield('hero')
						</div>
					</div>
					<div class="col-lg-8">
					</div>
				</div>
			</div>
		</div>
		<div class="product-section">
			<div class="container">
				<div class="row">
                      @yield('products')
				</div>
			</div>
		</div>
		
		<footer class="footer-section">
			<div class="container relative">
				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap">Funi.</div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. 
							Donec vitae odio quis nisl dapibus malesuada. 
							Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. 
							Pellentesque habitant</p>
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
				   </div>
					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li>About us</li>
									<li>Service</li>
									<li>Blog</li>
									<li>Contact us</li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright All Rights Reserved. Designed with love by Untree.co Distributed By ThemeWagon </p>
						</div>
						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4">Terms Conditions</li>
								<li>Privacy Policy</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
