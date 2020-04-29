<?php
session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
switch($_POST['btnAccion']){
    case 'Agregar':
    if (is_numeric( openssl_decrypt( $_POST['id'],COD,KEY ))) {
        $ID=openssl_decrypt( $_POST['id'],COD,KEY );
        $mensaje.="Ok ID: ".$ID."<br/>";
    }else{ $mensaje.="Upsss.... Id Incorrecto".$ID."<br/>"; }

    if (is_string( openssl_decrypt( $_POST['nombre'],COD,KEY ))) {
        $NOMBRE=openssl_decrypt( $_POST['nombre'],COD,KEY );
        $mensaje.="Ok NOMBRE: ".$NOMBRE."<br/>";
    }else{ $mensaje.="Upsss.... Nombre Incorrecto"."<br/>"; break; }

    if (is_numeric($_POST['cantidad'])) {
        $CANTIDAD=$_POST['cantidad'];
        $mensaje.="Ok CANTIDAD: ".$CANTIDAD."<br/>";
    }else{ $mensaje.="Upsss.... Cantidad Incorrecto"."<br/>"; break; }

    if (is_string($_POST['imagen'])) {
        $IMAGEN=$_POST['imagen'];
        $mensaje.="Ok CANTIDAD: ".$IMAGEN."<br/>";
    }else{ $mensaje.="Upsss.... Cantidad Incorrecto"."<br/>"; break; }

    if (is_numeric( openssl_decrypt( $_POST['precio'],COD,KEY ))) {
        $PRECIO=openssl_decrypt( $_POST['precio'],COD,KEY );
        $mensaje.="Ok PRECIO: ".$PRECIO."<br/>";
    }else{ $mensaje.="Upsss.... Precio Incorrecto"."<br/>"; break; }

    if (!isset($_SESSION['CARRITO'])) { 
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'PRECIO'=>$PRECIO,
            'IMAGEN'=>$IMAGEN,
            'CANTIDAD'=>$CANTIDAD,
        );
        $_SESSION['CARRITO'][0]=$producto;}
    else{
        $idProductos=array_column($_SESSION['CARRITO'], "ID");
        if (in_array($ID,$idProductos)) {
            $mensaje="";
        }
        else{
        $NumeroProductos=count($_SESSION['CARRITO']);
        $producto=array(
            'ID' =>$ID,
            'NOMBRE' =>$NOMBRE,
            'PRECIO' =>$PRECIO,
            'IMAGEN'=>$IMAGEN,
            'CANTIDAD' =>$CANTIDAD,
        );
        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
        }
    }
    $mensaje= print_r($_SESSION,true);




    break;

    case "Eliminar":

    if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
        $ID=openssl_decrypt($_POST['id'],COD,KEY );
        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            if ($producto['ID']==$ID) {
                unset($_SESSION['CARRITO'][$indice]); 
            }

        }

    }else{ $mensaje.="Upsss.... Id Incorrecto".$ID."<br>"; }
    break;


    case "add":
    

    if (is_numeric($_POST['canta'])) {
        $CANTA=$_POST['canta'];
    }else{ $mensaje.="Upsss.... Cantidad Incorrecto"; break; }

    if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
        $ID=openssl_decrypt($_POST['id'],COD,KEY );
        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            if ($producto['ID']==$ID) {
                $_SESSION['CARRITO'][$indice]['CANTIDAD'] = $CANTA;
            }

        }

    }else{ $mensaje.="Upsss.... Id Incorrecto".$ID."<br>"; }
    break;

    }
}
?>