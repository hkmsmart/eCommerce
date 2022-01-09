@section("header")
<!-- header -->
<header class="header">
	<!-- header top -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<ul class="list-inline">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  src="assets/front/images/is.png" alt="" /> Türkçe <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">English</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Para Birimi ₺ TL <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Para Birimi $ DOLAR</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="list-inline">
						<li><a href="#" ><i class="fa fa-mobile"></i> +88018374345</a></li>
						<li><a href="#" ><i class="fa fa-envelope-o"></i> ornek@gmail.com</a></li>
					</ul>	
				</div>
				<div class="col-sm-5">
					<ul class="list-inline pull-right">
						<li><a href="#" ><i class="fa fa-heart-o"></i> Fovariler (0)</a></li>
						<li><a href="#" ><i class="fa fa-file-o"></i> Karsılastır (0)</a></li>
						<li><a href="/login" ><i class="fa fa-user"></i> Giris</a></li>
						<li><a class="register" href="/register" >Üye Ol</a></li>
					</ul>	
				</div>	
			</div>	
		</div>
	</div>
	
	<!-- logo and adds -->
	<div class="logo-add">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo"><i class="fa fa-diamond"></i>E - Market</div>
				</div>
				<div class="col-sm-8">
					<h3 class="add bb-year-end-ribbon hidden-xs"><img src="assets/front/images/red-tablet.png" width="40px;" alt="" /> 
					<span>Selam! İşinize  <span>Yardımcı</span> Olabiliriz</span> <button class="btn btn-default"> Şimdi Başlayın </button></h3>
				</div>
			</div>
		</div>
	</div>
	
	<!-- header bottom -->
	<div class="header-bottom">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
								<span class="sr-only">Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="header-bottom">
							<ul class="nav navbar-nav">
								<li><a href="/">Anasayfa</a></li>
								</li>
								<li><a href="product-detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a><span class="label label-danger text-center hidden-xs">New <i class="fa fa-caret-right"></i></span>
									<ul class="dropdown-menu">
										<li><a href="product.html">Products</a></li>
										<li><a href="product-detail.html">Product Details</a></li>
										<li><a href="new-product.html">New Products</a></li>
									</ul>	
								</li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-details.html">Blog Detail</a></li>
								<li><a href="about-us.html">About Us</a> <span class="label label-info text-center hidden-xs">New <i class="fa fa-caret-right"></i></span></li>
								<li><a href="contact-us.html">Contac Us</a></li>
							</ul>
							<form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<span class="nav-search"><a href="#"><i class="fa fa-search"></i></a></span>
								</div>	
							</form>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
@endsection