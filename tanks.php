<?php
include 'database/consult.php';
include 'components/cart_value.php';
include 'template/head.php';
include 'template/nav.php';
?>
<!-- Start banner Area -->
<section class="generic-banner2">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h1 class="text-white f900">THANKS YOU</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start history Area-->
<section class="product-caro-area pb-50 pt-100" id="product-caro-area">
    <div class="container">
        <h1 class="text-center">Thanks for your purchase.</h1>
        <div class="text-center pt-20">
            <form action="components/destroid.php" method="post">
                <button class="genric-btn primary" type="submit" name="sesionDestroy">PLACE ORDER</button>
            </form>
        </div>
    </div>
</section>
<!-- End history Area -->

<?php
include 'template/footer.php';
?>