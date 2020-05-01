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
                    <h1 class="text-white f900">OUR STORY</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<?php if ($_POST){$total=0;$SID=session_id();foreach($_SESSION['CARRITO'] as $indice=>$producto){
$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);}}?>

<!-- Start billing Area-->
<section class="billing-area pb-50 pt-100" id="billing">
    <div class="container">
        <div class="col-12 pb-15">
            <h1>BILLING DETAILS</h1>
        </div>
        <form class="was-validated" action="components/checkout_value.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastname">Lastname</label>
                    <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Lastname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone</label>
                    <input type="phone" class="form-control" id="Phone" name="Phone" placeholder="Phone" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="Address" name="Address" placeholder="1234 Main St" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="AddressD" name="AddressD" placeholder="Apartment, studio, or floor" value=" ">
            </div>
            <div class="form-group">
                <label for="inputCountry">Country</label>
                <input type="text" class="form-control" id="Country" name="Country" placeholder="Country" value="Australia">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="City" name="City" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="State" name="State" class="form-control">
                        <option selected>Choose...</option>
                        <?php foreach($stateO as $optionSe){ ?>
                            <option value="<?php echo $optionSe['state'] ?>"><?php echo $optionSe['state'] ?></option>
                            <?php }  ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="Zip" name="Zip" required>
                </div>
            </div>

            <div class="col-12 pt-20 pb-20">
                <h1>Your Order</h1>
            </div>
            <div>
                <table class="table">
                    <tbody>
                        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
                        <tr>
                            <th class="tableAncho" scope="row">Product
                            </th>
                            <th scope="">Total</th>
                        </tr>
                        <tr>
                            <td class="tableAncho" scope="row"><?php echo $producto['NOMBRE']; ?><strong
                                    class="mx-2">x</strong><?php echo $producto['CANTIDAD']; ?>
                            </td>
                            <td>$ <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
                        </tr>
                        <?php }?>
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
                            <td>$ <?php echo number_format($total,2) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button class="genric-btn primary" name="btnAccion" value="proceder" type="submit">PLACE ORDER</button>
        </form>
    </div>
</section>
<!-- End billing Area -->
<?php
include 'template/footer.php';
?>