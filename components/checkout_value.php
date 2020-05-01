<?php
include '../database/config.php';
include 'cart_value.php';
include '../database/conexion.php';
?>
<?php
if ($_POST) {
  $total=0;
  $SID=session_id();

  $name = $_POST['Name'];
  $lastname = $_POST['Lastname'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone'];
  $address = $_POST['Address'];
  $addressD = $_POST['AddressD'];
  $country = $_POST['Country'];
  $city = $_POST['City'];
  $zip = $_POST['Zip'];

  foreach($_SESSION['CARRITO'] as $indice=>$producto){
      $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
  }
  $sentancia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `Fecha`, `Correo`, `Total`, `status`, `name`, `lastname`, `country`, `address`, `city`, `state`, `postcode`, `phone`, `addressD`)
  VALUES (NULL,:ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente', '', :lastname, :country, '', :city, '', :postcode, :phone, :addressD);");
  
  $sentancia->bindParam(":ClaveTransaccion",$SID);
  $sentancia->bindParam(":Correo",$email);
  $sentancia->bindParam(":Total",$total);
  $sentancia->bindParam(":lastname",$lastname);
  $sentancia->bindParam(":country",$country);
  $sentancia->bindParam(":city",$city);
  $sentancia->bindParam(":postcode",$zip);
  $sentancia->bindParam(":phone",$phone);
  $sentancia->bindParam(":addressD",$addressD);
  $sentancia->execute();
  $idVenta=$pdo->lastInsertId();

  foreach($_SESSION['CARRITO'] as $indice=>$producto){
    $sentancia=$pdo->prepare("INSERT INTO 
    `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`)
    VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD);");

$sentancia->bindParam(":IDVENTA",$idVenta);
$sentancia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentancia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentancia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentancia->execute();
  }
  header("location:../tanks.php");
}

?>