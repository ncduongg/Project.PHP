<?php 
ob_start();
session_start();
include 'config/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="AppCtrl">
<head>
<meta charset="utf-8">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
<meta name="author" content="pixelgeeklab.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Flatize - Shop HTML5 Responsive Template</title>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Icon Fonts -->
<link href="public/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Owl Carousel Assets -->
<link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="public/vendor/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="public/vendor/owl-carousel/owl.transitions.css" rel="stylesheet">

<!-- bxslider -->
<link href="public/vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
<!-- flexslider -->
<link rel="stylesheet" href="public/vendor/flexslider/flexslider.css" media="screen">

<!-- Theme -->
<link href="public/css/theme-animate.css" rel="stylesheet">
<link href="public/css/theme-elements.css" rel="stylesheet">
<link href="public/css/theme-blog.css" rel="stylesheet">
<link href="public/css/theme-shop.css" rel="stylesheet">
<link href="public/css/theme.css" rel="stylesheet">

<!-- Style Switcher-->
<link rel="stylesheet" href="public/style-switcher/css/style-switcher.css">
<link href="public/css/colors/cyan/style.html" rel="stylesheet" id="layoutstyle">

<!-- Theme Responsive-->
<link href="public/css/theme-responsive.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="page">
	<header>
		<div id="top">
			<div class="container">
				<p class="pull-left text-note">Free Shipping on all U.S orders over $50</p>
				<ul class="nav nav-pills nav-top navbar-right">
					<?php if(isset($_SESSION['cus_login'])) : 
						$cus = $_SESSION['cus_login'];
						?>
					<li class="dropdown my-account">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi: <?php echo $cus['name'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">My Dashboard</a></li>
							<li><a href="#">Account Information</a></li>
							<li><a href="#">Address Book</a></li>
							<li><a href="my-order.php">My Orders</a></li>
							<li><a href="logout.php">Thoát</a></li>
						</ul>
					</li>
					<?php else: ?>
						<li class="dropdown my-account">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Đăng nhập</a></li>
							<li><a href="#">FFawng ký</a></li>
						</ul>
					</li>
					<?php endif; ?>

					<?php $carts = !empty($_SESSION['cart']) ? $_SESSION['cart'] : []; ?>
					<li class="dropdown menu-shop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> <span class="shopping-bag"><?php echo totalQtt() ?></span></a>
						<div class="dropdown-menu">
							<h3>Recently added item(s)</h3>
							<ul class="list-unstyled list-thumbs-pro">
							<?php foreach ($carts as $key => $cart) {  ?>
								<li class="product">
									<div class="product-thumb-info">
										<a href="shop-cart.php?id=<?php echo $cart['id'];?>&action=delete" class="product-remove"><i class="fa fa-trash-o"></i></a>
										<div class="product-thumb-info-image">
											<a href="shop-product-detail1.html"><img alt="" width="60" src="public/uploads/<?php echo $cart['image'];?>"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="shop-product-detail2.html">Denim <?php echo $cart['name'];?></a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price"><?php echo $cart['price'];?> USD</span>
										</div>
									</div>
								</li>
							<?php } ?>
								
							</ul>
							<ul class="list-inline cart-subtotals text-right">
								<li class="cart-subtotal"><strong>Subtotal</strong></li>
								<li class="price"><span class="amount"><strong>$ <?php echo number_format( totalPrice() ) ?></strong></span></li>
							</ul>
							<div class="cart-buttons text-right">
								<a href="cart-list.php" class="btn btn-white">View Cart</a>
								<a href="checkout.php" class="btn btn-primary">Checkout</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<?php 
			$cats = mysqli_query($conn,"SELECT * FROM category Order By name ASC");

		 ?>
		<nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="logo" href="index.php"><img src="public/images/logo.png" alt="Flatize"></a> </div>
				<ul class="nav navbar-nav navbar-act pull-right">
					<li class="login"><a href="javascript:void(0);"><i class="fa fa-user"></i></a></li>
					<li class="search"><a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a></li>
				</ul>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown active"><a href="index.php" >Home</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
							<ul class="dropdown-menu">
							<?php foreach($cats as $cat) : ?>
								<li><a href="category.php?id=<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></a></li>
							<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="">Blogs</a></li>
						
					</ul>
				</div><!--/.nav-collapse --> 
			</div><!--/.container-fluid --> 
		</nav>
	</header>