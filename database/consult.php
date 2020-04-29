<?php
include 'database/config.php';
include 'database/conexion.php';

// LISTA DE PRODUCTOS //
$sentancia=$pdo->prepare("SELECT * FROM `tblproductos`");
$sentancia->execute();
$listaProductos=$sentancia->fetchAll(PDO::FETCH_ASSOC);

?>