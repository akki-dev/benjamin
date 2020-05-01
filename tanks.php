<?php
include 'database/consult.php';
include 'components/cart_value.php';
?>
<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="vinz">
    <!-- Meta Description -->
    <meta name="description" content="coffe benjamin's">
    <!-- Meta Keyword -->
    <meta name="keywords" content="HTML - PHP - CSS - JS">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Benjamin's Coffee</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

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
    <!-- Start thanks Area-->
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
    <!-- End thanks Area -->

    <?php
include 'template/footer.php';
?>