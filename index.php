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
	<?php 
	$banner = mysqli_query($conn,"SELECT * FROM  banner WHERE status = 1 Order By ordering ASC LIMIT 3");
	 ?>
	<div role="main" class="main">
		<!-- Begin Main Slide -->
		<section class="main-slide">
			<div id="owl-main-demo" class="owl-carousel main-demo">
				<?php foreach($banner as $bn) { ?>
				<div class="item" id="item1"><img src="public/uploads/<?php echo $bn['link_image'];?>" class="img-responsive" alt="Photo">
					<div class="item-caption">
						<div class="item-caption-inner">
							<div class="item-caption-wrap">
								<h2><?php echo $bn['name'];?></h2>
								<a href="<?php echo $bn['link_href'];?>" class="btn btn-white hidden-xs">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
		<!-- End Main Slide -->
		
		<!-- Begin Ads -->
		<section class="ads">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 animation">
						<a href="#"><img src="https://bizweb.dktcdn.net/100/131/018/themes/788098/assets/banner_1.jpg" class="img-responsive" alt="Ad"></a>
					</div>
					<div class="col-xs-4 animation">
						<a href="#"><img src="https://bizweb.dktcdn.net/100/131/018/themes/788098/assets/banner_2.jpg" class="img-responsive" alt="Ad"></a>
					</div>
					<div class="col-xs-4 animation">
						<a href="#"><img src="https://bizweb.dktcdn.net/100/131/018/themes/788098/assets/banner_3.jpg" class="img-responsive" alt="Ad"></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Ads -->
		<?php 
			$topproduct = mysqli_query($conn,"SELECT * FROM  product WHERE status = 1 Order By id DESC LIMIT 4");
	 ?>
		<!-- Begin Top Selling -->
		<section class="products-slide">
			<div class="container">
				<h2 class="title"><span>Top Selling</span></h2>
				<div class="row">
					<div id="owl-product-slide" class="owl-carousel product-slide">
					<?php foreach($topproduct as $top) : ?>						
						<div class="col-md-12 animation">
							<div class="item product">
								<a href="shop-product-detail1.html">
									<span class="bag bag-cool">Cool</span>
								</a>
								<div class="product-thumb-info">
									<div class="product-thumb-info-image">
										<span class="product-thumb-info-act">
											<a href="product-detail.php?id=<?php echo $top['id'] ?>" ng-click="quick_view(<?php echo $top['id'] ?>)" class="view-product">
												<span><i class="fa fa-external-link"></i></span>
											</a>
											<a href="shop-cart.php?id=<?php echo $top['id'] ?>" class="add-to-cart-product">
												<span><i class="fa fa-shopping-cart"></i></span>
											</a>
										</span>
										<img alt="" class="img-responsive" src="public/uploads/<?php echo $top['image'] ?>">
									</div>
									<div class="product-thumb-info-content">
										<span class="price pull-right"><?php echo $top['price'] ?> USD</span>
										<h4><a href="shop-product-detail2.html"><?php echo $top['name'] ?></a></h4>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- End Top Selling -->
		
		<!-- Begin Lookbook Women -->
		<section id="lookbook">
			<div class="container">
				<div class="lookbook">
					<h2><a href="#">Lookbook Women</a></h2>
					<p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est viverra. Vestibulum hendrerit egestas semper.</p>
				</div>
			</div>
		</section>
		<!-- End Lookbook Women -->
		
		<!-- Begin New Products -->
		<section class="product-tab">
			<div class="container">
				<h2 class="title"><span>New Products</span></h2>
				<!-- Nav tabs -->
				
				<ul class="nav nav-tabs pro-tabs text-center animation" role="tablist">
					<li ng-class="$index == 0 ? 'active': '' " ng-repeat="c in cats"><a href="#tab" role="tab" data-toggle="tab" ng-click="get_pro_by_cat(c.id)">{{c.name}}</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				
					<div class="tab-pane" id="tab">
						<div class="row">
							<div class="col-xs-6 col-sm-3 animation" ng-repeat="p in products">
								<div class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);"  class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" ng-src="public/uploads/{{p.image}}">
										</div>
										<div class="product-thumb-info-content">
											<span class="price pull-right">39.99 USD</span>
											<h4><a href="shop-product-detail2.html">{{p.name}}</a></h4>
											<span class="item-cat"><small><a href="#">Jeans</a></small></span>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
		</section>
		<!-- End New Products -->
		
		<!-- Begin Parallax -->
		<section class="pi-parallax" data-stellar-background-ratio="0.6">
			<div class="container">
				<div id="owl-text-slide" class="owl-carousel">
					<div class="item">
						<blockquote>
							<p>Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it’s really how it works.</p>
							<footer>by <cite title="Steve Jobs">Steve Jobs</cite></footer>
						</blockquote>
					</div>
					<div class="item">
						<blockquote>
							<p>They may forget what you said, but they will never forget how you made them feel.</p>
							<footer>by <cite title="Steve Jobs">Carl W. Buechner</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</section>
		<!-- End Parallax -->
		
		<!-- Begin Latest Blogs -->
		<section class="latest-blog">
			<div class="container">
				<h2 class="title"><span>Latest from the blog</span></h2>
				<div class="row">
					<div class="col-xs-6 animation">
						<article class="post">
							<div class="post-image">
								<span class="post-info-act">
									<a href="blog-single.html"><i class="fa fa-caret-right"></i></a>
								</span>
								<img class="img-responsive" src="public/images/content/blog/demo-1.jpg" alt="Blog">
							</div>
							<h3><a href="blog-single.html">Paris Fashion Week S/S 2014: womenswear collections</a></h3>
							<p class="post-meta">15th December 2014</p>
						</article>
					</div>
					<div class="col-xs-6 animation">
						<article class="post">
							<div class="post-image">
								<span class="post-info-act">
									<a href="blog-single.html"><i class="fa fa-camera"></i></a>
								</span>
								<img class="img-responsive" src="public/images/content/blog/demo-2.jpg" alt="Blog">
							</div>
							<h3><a href="blog-single.html">Show tunes: London Fashion Week S/S 2014's runway playlist</a></h3>
							<p class="post-meta">15th December 2014</p>
						</article>
					</div>
				</div>
			</div>
		</section>
		<!-- End Latest Blogs -->
		
	</div>
		<!-- End Main -->
		
<?php include 'footer.php'; ?>