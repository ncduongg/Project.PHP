<!-- Begin footer -->
	<footer class="footer">
		<div class="container">
			<div class="upper-foot">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<h2>Contact detail</h2>
						<address>
							<i class="fa fa-map-marker"></i> No.123 Pellentesque nec erat.<br>
							Aenean semper, neque non faucibus.<br>
							<i class="fa fa-phone"></i> Phone. (123) 456-7890<br>
							<i class="fa fa-fax"></i> Fax. (123) 456-7890<br>
							<i class="fa fa-envelope"></i> E-mail. <a href="mailto:#">first.last@example.com</a>
						</address>
					</div>
					<div class="col-xs-6 col-sm-3">
						<h2>Useful links</h2>
						<ul class="list-unstyled">
							<li><a href="#">Track Orders</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Free Credit Report</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Community Guidelines</a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-3">
						<h2>Tags</h2>
						<ul class="list-inline tagclouds">
							<li><a href="#">Image</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Post Formats</a></li>
							<li><a href="#">Typography</a></li>
							<li><a href="#">WooCommerce</a></li>
							<li><a href="#">Shortcodes</a></li>
							<li><a href="#">Best Sellers</a></li>
							<li><a href="#">Slideshow</a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-3">
						<h2>Don’t miss out</h2>
						<p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut scelerisque.</p>
						<form class="form-inline form-newsletter" role="form">
							<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email here">
							</div>
							<button type="submit" class="btn"><i class="fa fa-caret-right"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="below-foot">
				<div class="row">
					<div class="col-xs-6 copyrights">
						<p>Copyright © 2013 Flatize. Designed by <a href="http://pixelgeeklab.com/">PixelGeekLab</a><br>
						All rights reserved.</p>
					</div>
					<div class="col-xs-6 text-right">
						<ul class="list-inline social-list">
							<li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a data-toggle="tooltip" data-placement="top" title="RSS" href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
		
</div>

<!-- Begin Quickview -->
<div class="modal fade quickview-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<div class="product-detail">
				<div class="row">
					<div class="col-sm-6">
						<div class="product-preview">
							<ul class="bxslider" id="slider1">
								<li><img alt="" class="img-responsive" ng-src="public/uploads/{{quick.image}}"></li>
							</ul>

							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="summary entry-summary">

							<h3>{{quick.name}}</h3>
							
							<div class="reviews-counter clearfix">
								<div class="rating five-stars pull-left">
									<div class="star-rating"></div>
									<div class="star-bg"></div>
								</div>
								<span>3 Reviews</span>
							</div>

							<p class="price">
								<span class="amount">${{quick.price}}</span>
							</p>
							
							<ul class="list-inline list-select clearfix">
								<li>
									<div class="list-sort">
										<select class="formDropdown">
											<option>Select Size</option>
											<option>XS</option>
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
											<option>XXL</option>
										</select>
									</div>
								</li>
								<li class="color"><a href="#" class="color1"></a></li>
								<li class="color"><a href="#" class="color2"></a></li>
								<li class="color"><a href="#" class="color3"></a></li>
								<li class="color"><a href="#" class="color4"></a></li>
							</ul>

							<form method="post" class="cart">
								<div class="quantity pull-left">
									<input type="button" class="minus" value="-">
									<input type="text" class="input-text qty" title="Qty" value="1" name="quantity" min="1" step="1">
									<input type="button" class="plus" value="+">
								</div>
								<a href="#" class="btn btn-grey">
									<span><i class="fa fa-heart"></i></span>
								</a>
								<button href="#" class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
							</form>
							
							<ul class="list-unstyled product-meta">
								<li>Sku: 54329843</li>
								<li>Categories: <a href="#">Leather</a> <a href="#">Jeans</a> <a href="#">Men</a></li>
								<li>Tags: <a href="#">Shoes</a> <a href="#">Jeans</a> <a href="#">Men</a> <a href="#">T-shirt</a></li>
							</ul>
							
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Description</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body" ng-bind-html="quick.content"> 

										</div>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Quickview -->

<!-- Begin Search -->
<div class="modal fade bs-example-modal-lg search-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<p class="clearfix"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button></p>
			<form class="form-inline form-search" role="form">
				<div class="form-group">
					<label class="sr-only" for="textsearch">Enter text search</label>
					<input type="text" class="form-control input-lg" id="textsearch" placeholder="Enter text search">
				</div>
				<button type="submit" class="btn btn-white">Search</button>
			</form>
		</div>
	</div>
</div>
<!-- End Search -->

<!-- Begin Style Switcher -->

<!-- Begin Style Switcher -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/vendor/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="public/bootstrap/js/bootstrap.min.js"></script>
<script src="public/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
<script src="public/vendor/owl-carousel/owl.carousel.js"></script>
<script src="public/vendor/modernizr.custom.js"></script>
<script src="public/vendor/jquery.stellar.js"></script>
<script src="public/vendor/public/imagesloaded.pkgd.min.js"></script>
<script src="public/vendor/masonry.pkgd.min.js"></script>
<script src="public/vendor/jquery.pricefilter.js"></script>
<script src="public/vendor/bxslider/jquery.bxslider.min.js"></script>
<script src="public/vendor/mediaelement-and-player.js"></script>
<script src="public/vendor/waypoints.min.js"></script>
<script src="public/vendor/flexslider/jquery.flexslider-min.js"></script>

<!-- Theme Initializer -->
<script src="public/js/theme.plugins.js"></script>
<script src="public/js/theme.js"></script>

<!-- Style Switcher -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-sanitize.min.js"></script>
<script type="text/javascript" src="public/js/app.js"></script>

</body>
</html>