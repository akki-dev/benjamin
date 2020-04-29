<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
							<ul>
								<li>
									Mon-Fri: 8am to 2pm
								</li>
								<li>
									Sat-Sun: 11am to 4pm
								</li>
								<li>
									<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.php"><img src="img/logo-2.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="index.php">Home</a></li>
							<li><a href="story.php">Our Story</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="story.php">Wholesale</a></li>
							<li><a href="contac.php">Contact</a></li>
							<li><a href="cart.php" class="genric-btn primary circle arrow small">Cart (<?php echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>)</samp></a></li>
						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->