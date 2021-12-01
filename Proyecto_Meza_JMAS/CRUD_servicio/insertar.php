<?php
include("conexion.php");
$con=conectar();

$id_servicio=$_POST['id_servicio'];
$id_cliente=$_POST['id_cliente'];
$Motivo=$_POST['Motivo'];
$Fecha_solicitud=$_POST['Fecha_solicitud'];
$Fecha_servicio=$_POST['Fecha_servicio'];
$Tipo_servicio=$_POST['Tipo_servicio'];
$Costo_servicio=$_POST['Costo_servicio'];



$sql="INSERT INTO servicio VALUES('$id_servicio','$id_cliente','$Motivo','$Fecha_solicitud', '$Fecha_servicio', '$Tipo_servicio','$Costo_servicio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Servicio.php");
    
}else {
}
?>