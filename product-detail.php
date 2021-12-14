<?php include 'header.php'; ?>
		<!-- Begin Login -->
		<div class="login-wrapper">
			<form id="form-login" role="form">
				<h4>Login</h4>
				<p>If you're a member, login here.</p>
				<div class="form-group">
					<label for="inputusername">Username</label>
					<input type="text" class="form-control input-lg" id="inputusername" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="inputpassword">Password</label>
					<input type="password" class="form-control input-lg" id="inputpassword" placeholder="Password">
				</div>
				<ul class="list-inline">
					<li><a href="#">Create new account</a></li>
					<li><a href="#">Request new password</a></li>
				</ul>
				<button type="submit" class="btn btn-white">Log in</button>
			</form>
		</div>
		<!-- End Login -->
		
		
		<!-- Begin Main -->
		<div role="main" class="main">
		
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<ol class="breadcrumb pull-left">
							<li><a href="#">Men</a></li>
							<li><a href="#">Jeans</a></li>
							<li class="active">Checked Jeans</li>
						</ol>
						<ul class="pager pull-right">
							<li><a href="#">&laquo; Previous</a></li>
							<li><a href="#">Next &raquo;</a></li>
						</ul>
					</div>
				</div>
			</section>
			<!-- End page top -->
			<?php 
				$id = $_GET['id'];

				$query = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");

				$pro = mysqli_fetch_assoc($query);

				$image_list = json_decode($pro['image_list']);


			 ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="product-preview">
							<p><img alt="" id="big_img" class="img-responsive" src="public/uploads/<?php echo $pro['image'];?>"></p>
						</div>

						<div class="owl-carousel owl-theme" id="list_thumb">
							<?php foreach($image_list as $img) : ?>
							<div class="item">
								<img  alt="" class="img-responsive img_thumb" src="public/uploads/<?php echo $img;?>">
							</div>
						<?php endforeach; ?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="summary entry-summary">

							<h3>Denim Trousers with faux leather details</h3>
							
							<div class="reviews-counter clearfix">
								<div class="rating five-stars pull-left">
									<div class="star-rating"></div>
									<div class="star-bg"></div>
								</div>
								<span>3 Reviews</span>
							</div>

							<p class="price">
								<span class="amount">$29.99</span>
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

							<form method="get" class="cart" action="shop-cart.php">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="quantity pull-left">
									<input type="button" class="minus" value="-">
									<input type="text" class="input-text qty" title="Qty" value="1" name="quantity" min="1" step="1">
									<input type="button" class="plus" value="+">
								</div>
								<a href="#" class="btn btn-grey">
									<span><i class="fa fa-heart"></i></span>
								</a>
								<button  class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
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
										<div class="panel-body"> 
											<p>Korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. qui dolorem ipsum quia dolor sit amet.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Addition Information</a> </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body"> <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> </div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Reviews (3)</a> </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body post-comments">
											<ul class="comments">
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> January 12, 2013</small></span>
															<p>Lorem ipsum dolor sit amet.</p>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
															<p>Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae</p>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- Begin Related Products -->
						<section class="products-slide">
							
							<h2 class="title"><span>Related Products</span></h2>
							<div class="row">
								<div class="col-xs-6">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="shop-cart-full.html" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/product-1.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Denim shirt</a></h4>
												<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="product">
										<a href="shop-product-detail1.html">
											<span class="bag bag-hot">Hot</span>
										</a>
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="shop-cart-full.html" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/product-2.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Poplin shirt with fine pleated bands</a></h4>
												<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-xs-6">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="shop-cart-full.html" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/product-3.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Contrasting shirt</a></h4>
												<span class="item-cat"><small><a href="#">Stock clearance</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="product">
										<a href="shop-product-detail1.html">
											<span class="bag bag-cool">Cool</span>
										</a>
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="shop-cart-full.html" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/product-4.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Waistcoat with top stitching</a></h4>
												<span class="item-cat"><small><a href="#">Blazers</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</section>
						<!-- End Related Products -->
					</div>
				</div>
			</div>
			
		</div>
		<!-- End Main -->
		<?php include 'footer.php'; ?>

		<script type="text/javascript">
			$('#list_thumb').owlCarousel({
				items:3,
				margin:10,
				autoPlay:1000,
				stopOnHover: true
			});

			$('img.img_thumb').click(function(event) {
				var _img = $(this).attr('src');
				$('img#big_img').attr('src',_img);
			});


		  $('.plus').click(function(event) {
		    var _qtt = $(this).parent().find('input.qty').val();
		    var _newqtt  = parseInt(_qtt) +1;
		    $(this).parent().find('input.qty').val(_newqtt);
		    console.log(_qtt);
		  });

		   $('.minus').click(function(event) {
		    var _qtt = $(this).parent().find('input.qty').val();
		    var _newqtt  = _newqtt > 1 ? parseInt(_qtt) - 1 : 1;
		    $(this).parent().find('input.qty').val(_newqtt);
		    console.log(_qtt);
		  });

		</script>