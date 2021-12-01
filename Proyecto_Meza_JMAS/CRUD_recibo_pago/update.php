<?php

include("conexion.php");
$con=conectar();

$NumFactura=$_POST['NumFactura'];
$id_cliente=$_POST['id_cliente'];
$Num_medidor=$_POST['Num_medidor'];
$Consumo=$_POST['Consumo'];
$FormaPago=$_POST['FormaPago'];
$Pago_total=$_POST['Pago_total'];
$Fecha=$_POST['Fecha'];

$sql="UPDATE recibo_pagp SET  id_cliente='$id_cliente',Num_medidor='$Num_medidor', Consumo='$Consumo', FormaPago='$FormaPago', Pago_total='$Pago_total', Fecha='$Fecha'
 WHERE NumFactura='$NumFactura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Recibo_pago.php");
    }
?>