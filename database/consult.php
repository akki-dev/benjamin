<?php
include 'database/config.php';
include 'database/conexion.php';

// LISTA DE PRODUCTOS //
$sentancia=$pdo->prepare("SELECT * FROM `tblproductos`");
$sentancia->execute();
$listaProductos=$sentancia->fetchAll(PDO::FETCH_ASSOC);

// 6 PRIMEROS DE LA LISTA//
$sentancia=$pdo->prepare("SELECT * FROM `tblproductos` LIMIT 6");
$sentancia->execute();
$listaProductoSeis=$sentancia->fetchAll(PDO::FETCH_ASSOC);


// State
$sentancia=$pdo->prepare("SELECT * FROM `tblstate`");
$sentancia->execute();
$stateO=$sentancia->fetchAll(PDO::FETCH_ASSOC);
?>