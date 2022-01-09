@section('best_selling')
<!-- best selling -->
<section class="best-selling">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><span class="t-color-2">Best</span> Selling
					<small class="btn-group hidden-xs">
						<a class=" btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
						   aria-expanded="false">All Categries <i class="fa fa-bars"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Option 1</a></li>
							<li><a href="#">Option 2</a></li>
						</ul>
					</small>
				</h1>
				<div class="heading-border b-color-2"></div>
			</div>
		</div> <!-- section title -->
		<div id="best-selling" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#best-selling" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
				<li data-target="#best-selling" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-sm-6">
							<div class="media">
								<div class="media-left"><img class="img-responsive" src="assets/front/images/e-add-1.jpg" alt=""></div>
								<div class="media-body">
									<div class="category"> category
										<div class="pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
									<strong>$899.00</strong>
									<div>
										<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="media">
								<div class="media-left"><img src="assets/front/images/e-add-1.jpg" alt=""></div>
								<div class="media-body">
									<div class="category"> category
										<div class="pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
									<strong>$899.00</strong>
									<div>
										<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-6">
							<div class="media">
								<div class="media-left"><img src="assets/front/images/e-add-1.jpg" alt=""></div>
								<div class="media-body">
									<div class="category"> category
										<div class="pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
									<strong>$899.00</strong>
									<div>
										<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="media">
								<div class="media-left"><img src="assets/front/images/e-add-1.jpg" alt=""></div>
								<div class="media-body">
									<div class="category"> category
										<div class="pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
									<strong>$899.00</strong>
									<div>
										<a href="#" class="btn btn-default" role="button">Add to Cart</a><span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
