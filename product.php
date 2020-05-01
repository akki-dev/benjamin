<?php
include 'database/consult.php';
include 'components/cart_value.php';
include 'template/head.php';
include 'template/nav.php';
$idP = openssl_decrypt( $_GET['id'], COD, KEY );
$nombreP = openssl_decrypt( $_GET['nombre'], COD, KEY );
$imgP = $_GET['imagen'];
$priceP = openssl_decrypt( $_GET['precio'], COD, KEY );
$descripcionP = openssl_decrypt( $_GET['descrip'], COD, KEY );
?>
<!-- Start banner Area -->
<section class="generic-banner">
	<div class="container">
		<div class="row height align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="generic-banner-content">
					<h1 class="text-white f900">SHOPPING COFFE</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- Start video-sec Area -->
<section class="product-area pb-40 pt-100" id="product">
	<div class="container">
		<div class="row">
			<div class="productO col-sm-6">
				<img src="<?php echo $imgP ?>" alt="" srcset="" class="img-fluid">
			</div>
			<div class="desProduct col-sm-6">
				<h6>COFFER BENJAMINS</h6>
				<h1><?php echo $nombreP?></h1>
				<p><span>We are here to help coffee lovers around the world.</span></p>
				<p>
					<div class="5"><?php echo $descripcionP?></div>
					<div class="5"><?php echo $descripcionP?></div>
				</p>
				<h3 class="price">$ <?php echo $priceP?></h3>
				<p></p>
				<form action="" method="post">
					<input type="hidden" name="id" id="id"
						value="<?php echo openssl_encrypt($idP,COD,KEY); ?>">
					<input type="hidden" name="imagen" id="imagen" value="<?php echo $imgP; ?>">
					<input type="hidden" name="nombre" id="nombre"
						value="<?php echo openssl_encrypt($nombreP,COD,KEY); ?>">
					<input type="hidden" name="precio" id="precio"
						value="<?php echo openssl_encrypt($priceP,COD,KEY); ?>">
					<input type="number" name="cantidad" id="cantidad" value="<?php echo 1; ?>" min="0" max="12" />
					<p></p>
					<div class="puje">
						<button name="btnAccion" value="Agregar" type="submit" class="genric-btn primary radius">Cart
							Incluide</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End video-sec Area -->
<?php
include 'template/footer.php';
?>