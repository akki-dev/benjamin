<?php
include 'database/consult.php';
include 'components/cart_value.php';
include 'template/head.php';
include 'template/nav.php';
?>
<!-- Start banner Area -->
<section class="generic-banner5">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h1 class="text-white f900">SHOPPING CART</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start cart Area -->
<?php if(!empty($_SESSION['CARRITO'])){?>
<section class="cart-area pb-40 pt-100" id="cart">
    <div class="container">
        <form action="" method="post">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="tablecenter">
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <?php $total=0;?>
                    <tbody>
                        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
                        <tr class="tablecenter">
                            <th scope="row">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 tableIma">
                                        <img src="<?php echo $producto['IMAGEN']; ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 col-sm-12 align-self-center">
                                        <p><?php echo $producto['NOMBRE']; ?></p>
                                    </div>
                                </div>
                            </th>
                            <td class="tableVertical">
                                <p><?php echo $producto['PRECIO']; ?></p>
                            </td>
                            <td class="tableVertical">
                                <form action="" method="post">
                                    <div class="tableUpgrate">
                                        <div class="input-group">
                                            <input type="hidden" name="id" id="id"
                                                value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                                            <input type="text" name="canta" id="canta"
                                                value="<?php  echo $producto['CANTIDAD']; ?>" class="form-control"
                                                aria-label="Example text with button addon" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button name="btnAccion" value="add" type="submit"
                                                    class="genric-btn primary ">Refresh</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="tableVertical">
                                <p><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></p>
                            </td>
                            <td class="tableVertical">
                                <form action="" method="post">
                                    <input type="hidden" name="id" id="id"
                                        value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                                    <button class="genric-btn primary-border " type="submit" name="btnAccion"
                                        value="Eliminar">X</button>
                                </form>
                            </td>
                        </tr>
                        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="input-group COUPON">
            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="genric-btn primary " type="button" id="button-addon2">Apply Coupon</button>
            </div>
        </div>
    </div>
</section>
<!-- End cart Area -->

<!-- Star checkout Area-->
<section class="cheackout-area pd-40 pt-100" id="cart">
    <div class="container">
        <div class="col-12">
            <h1>Cart Totals</h1>
        </div>
        <div>
            <table class="table">
                <tbody>
                <?php $igv=$total*0.18; ?>
                <?php $subtotal=$total/1.18; ?>
                    <tr>
                        <th class="tableAncho" scope="row">Subtotal
                        </th>
                        <td>$ <?php echo number_format($subtotal,2);?></td>
                    </tr>
                    <tr>
                        <th scope="row">IGV</th>
                        <td>$ <?php echo number_format($igv,2);?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>$ <?php echo number_format($total,2);?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <button class="genric-btn primary" type="button" id="button-addon2">Proceed To Checkout</button>
        </div>
    </div>
</section>
<!-- End checkout Area-->
<?php }else{?>
<section class="product-caro-area pb-50 pt-100" id="product-caro-area">
    <div class="container">
        <h1 class="text-center">Your cart is currently empty.</h1>
        <div class="text-center pt-20">
            <a href="shop.php" class="genric-btn primary">RETURN TO SHOP</a>
        </div>
    </div>
</section>

<?php }?>
<?php
include 'template/footer.php';
?>