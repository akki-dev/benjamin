<?php
include 'database/consult.php';
include 'components/cart_value.php';
include 'template/head.php';
include 'template/nav.php';
?>
<!-- Start banner Area -->
<section class="generic-banner3">
	<div class="container">
		<div class="row height align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="generic-banner-content">
					<h1 class="text-white f900">SHOP ONLINE</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start shop Area -->
<section class="shop-area pb-40 pt-100" id="shop">
	<div class="container">
		<div class="row">
			<?php foreach($listaProductos as $producto){ ?>
			<div class="col-lg-4 col-md-6">
				<div class="single-menu">
					<div class="row">
						<div class="imaMedia col-md-12 col-sm-6">
							<img src="<?php echo $producto['Imagen']; ?>" class="img-fluid" alt="" srcset="">
						</div>
						<div class="col-md-12 col-sm-6">
							<div class="title-div justify-content-between d-flex">
								<h4><?php echo $producto['Nombre']; ?></h4>
								<p class="price float-right">
									$ <?php echo $producto['Precio']; ?>
								</p>
							</div>
							<form action="" method="post">
								<input type="hidden" name="id" id="id"
									value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
								<input type="hidden" name="imagen" id="imagen"
									value="<?php echo $producto['Imagen']; ?>">
								<input type="hidden" name="nombre" id="nombre"
									value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
								<input type="hidden" name="precio" id="precio"
									value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
								<input type="number" name="cantidad" id="cantidad" value="<?php echo 1; ?>" min="0" max="12" />
								<div class="puje">
									<button name="btnAccion" value="Agregar" type="submit" class="genric-btn primary radius">Cart Incluide</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
			<?php }  ?>
		</div>
	</div>
</section>
<!-- End shop Area-->
<?php
include 'template/footer.php';
?>