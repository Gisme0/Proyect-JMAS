<?php

include("conexion.php");
$con=conectar();

$NumFactura=$_GET['id'];

$sql="DELETE FROM recibo_pago  WHERE NumFactura='$NumFactura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Recibo_Pago.php");
    }
?>
