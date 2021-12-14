<?php include 'header.php';?>
		
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
		<?php 
		
		$cat = mysqli_fetch_assoc($query);

		$products = mysqli_query($conn,"SELECT * FROM product");
		 ?>
		
		<!-- Begin Main -->
		<div role="main" class="main">
		
			<!-- Begin page top -->
			<section class="page-top-md">
				<div class="container">
					<div class="page-top-in">
						<h2><span><?php echo $cat['name'] ?></span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
			
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<aside class="sidebar">
							<aside class="block filter-blk">
								<h4>Filter By Price</h4>
								<div id="price-range">
									<div class="padding-range">
										<div id="slider-range"></div>
									</div>
									<label for="amount">Price:</label>
									<input type="text" id="amount">
									<p class="clearfix"><a href="#" class="btn btn-primary btn-sm">Apply Filter</a></p>
								</div>
							</aside>
							<aside class="block blk-cat">
								<h4>Category</h4>
								<ul class="list-unstyled list-cat">
									<li><a href="#">New</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Bottoms</a></li>
									<li><a href="#">Denim</a></li>
									<li><a href="#">Outerwear</a></li>
									<li><a href="#">Shoes</a></li>
									<li><a href="#">Jackets</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</aside>
							<aside class="block blk-brands">
								<h4>Brands</h4>
								<ul class="list-unstyled list-cat">
									<li><a href="#">Louis Vuitton</a></li>
									<li><a href="#">Gucci</a></li>
									<li><a href="#">Levi’s</a></li>
									<li><a href="#">Prada</a></li>
									<li><a href="#">Dolce & Gabbana</a></li>
									<li><a href="#">Dior</a></li>
									<li><a href="#">Burberry</a></li>
								</ul>
							</aside>
							<aside class="block blk-colors">
								<h4>Colors</h4>
								<ul class="list-unstyled list-cat">
									<li><a href="#">Black</a></li>
									<li><a href="#">Blue</a></li>
									<li><a href="#">Navy</a></li>
									<li><a href="#">Pink</a></li>
									<li><a href="#">Purple</a></li>
									<li><a href="#">Old Navy</a></li>
								</ul>
							</aside>
							<aside class="block featured">
								<h4>Featured</h4>
								<ul class="list-unstyled list-thumbs-pro">
									<li class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="public/images/content/products/product-7.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Striped sweater</a></h4>
												<span class="item-cat"><small><a href="#">Stock clearance</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="public/images/content/products/product-8.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Checked shirt with pocket</a></h4>
												<span class="item-cat"><small><a href="#">Shirts</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="public/images/content/products/product-9.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Classic blazer</a></h4>
												<span class="item-cat"><small><a href="#">Outerwear</a></small></span>
												<span class="price">29.99 USD</span>
											</div>
										</div>
									</li>
								</ul>
							</aside>
						</aside>
					</div>
					<div class="col-md-9">
						<!-- Begin Lookbook Women -->
						<section id="lookbook">
							<div class="lookbook">
								<h2><a href="#">Ten danh muc</a></h2>
								<p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est viverra. Vestibulum hendrerit egestas semper.</p>
							</div>
						</section>
						<!-- End Lookbook Women -->
						<div class="catalog">
							<div class="toolbar clearfix">
								<ul class="list-inline list-icons pull-left">
									<li class="active"><a href="shop-sidebar.html"><i class="fa fa-th"></i></a></li>
									<li><a href="shop-list-sidebar.html"><i class="fa fa-th-list"></i></a></li>
								</ul>
								<p class="pull-left">Showing 1-12 of 50 results</p>
								<!-- Ordering -->
								<div class="list-sort pull-right">
									<select class="formDropdown">
										<option>Default Sorting</option>
										<option>Sort by Popularity</option>
										<option>Sort by Newness</option>
									</select>
								</div>
							</div>
							<div class="row">
							<?php foreach($products as $pro) : ?>
								<div class="col-xs-4 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="product-detail.php?id=<?php echo $pro['id'];?>" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="shop-cart.php" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="public/uploads/<?php echo $pro['image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo number_format($pro['price']) ?> USD</span>
												<h4><a href="shop-product-detail2.html">><?php echo $pro['name'] ?></a></h4>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
							</div>
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
						   </ul>
					   </div>
					</div>
				</div>
				
				
			</div>
			
		</div>
		<!-- End Main -->
<?php include 'footer.php'; ?>