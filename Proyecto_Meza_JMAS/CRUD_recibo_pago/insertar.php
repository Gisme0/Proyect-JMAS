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



$sql="INSERT INTO recibo_pago VALUES('$NumFactura','$id_cliente','$Num_medidor','$Consumo', '$FormaPago', '$Pago_total','$Fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Recibo_pago.php");
    
}else {
}
?>