<?php
include 'database/consult.php';
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
    <section class="cart-area pb-40 pt-100" id="cart">
        <div class="container">
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
                    <tbody>
                        <tr class="tablecenter">
                            <th scope="row">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 tableIma">
                                        <img src="img/co_5.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 col-sm-12 align-self-center">
                                        <p>Coffe Benjamin's</p>
                                    </div>
                                </div>
                            </th>
                            <td class="tableVertical">
                                <p>$30.00</p>
                            </td>
                            <td class="tableVertical">
                                <div class="tableUpgrate">
                                    <div class="input-group">
                                        <input type="text" value="1" class="form-control"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="genric-btn primary " type="button"
                                                id="button-addon2">Refresh</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="tableVertical">
                                <p>$300.0</p>
                            </td>
                            <td class="tableVertical">
                                <button class="genric-btn primary-border " type="button" id="button-addon2">X</button>
                            </td>
                        </tr>
                        <tr class="tablecenter">
                            <th scope="row">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 tableIma">
                                        <img src="img/co_6.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 col-sm-12 align-self-center">
                                        <p>Coffe Benjamin's</p>
                                    </div>
                                </div>
                            </th>
                            <td class="tableVertical">
                                <p>$30.00</p>
                            </td>
                            <td class="tableVertical">
                                <div class="tableUpgrate">
                                    <div class="input-group">
                                        <input type="text" value="1" class="form-control"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="genric-btn primary " type="button"
                                                id="button-addon2">Refresh</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="tableVertical">
                                <p>$300.0</p>
                            </td>
                            <td class="tableVertical">
                                <button class="genric-btn primary-border " type="button" id="button-addon2">X</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="input-group COUPON">
                <input type="text" class="form-control"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="genric-btn primary " type="button"
                        id="button-addon2">Apply Coupon</button>
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
                      <tr>
                        <th class="tableAncho" scope="row">Subtotal
                        </th>
                        <td>$600.00</td>
                      </tr>
                      <tr>
                        <th scope="row">IGV</th>
                        <td>$50.00</td>
                      </tr>
                      <tr>
                        <th scope="row">Total</th>
                        <td>$550.00</td>
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
    <?php
include 'template/footer.php';
?>