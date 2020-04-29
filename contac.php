<?php
include 'database/consult.php';
include 'components/cart_value.php';
include 'template/head.php';
include 'template/nav.php';
?>
<!-- Start banner Area -->
<section class="generic-banner4">
	<div class="container">
		<div class="row height align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="generic-banner-content">
					<h1 class="text-white f900">CONTACT US</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start Contact Area-->
<section class="contact-area pb-40 pt-100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>GET IN TOUCH</h1>
				<div>
					<p class="5">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea.
					</p>
				</div>
				<ul class="unordered-list">
					<li>Lorem ipsum dolor sit.</li>
					<li>Lorem ipsum dolor sit.</li>
					<li>Lorem ipsum dolor sit.</li>
					<li>Lorem ipsum dolor sit.</li>
				</ul>

			</div>
			<div class="col-md-6 br">
				<form class="was-validated">
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" placeholder="Name" class="form-control" id="inputEmail4" required>
						</div>
						<div class="form-group col-md-6">
							<input type="email" placeholder="Email" class="form-control" id="inputPassword4" required>
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject" id="inputAddress" required>
					</div>
					<textarea class="form-control is-invalid" id="validationTextarea" placeholder="Message here..."
						required></textarea>
					<br>
					<button type="submit" class="genric-btn primary">SEN MESSAGE</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
include 'template/footer.php';
?>