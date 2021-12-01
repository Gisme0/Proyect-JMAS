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

$sql="UPDATE servicio SET  id_cliente='$id_cliente',Motivo='$Motivo', Fecha_solicitud='$Fecha_solicitud', Fecha_servicio='$Fecha_servicio', Tipo_servicio='$Tipo_servicio', Costo_servicio='$Costo_servicio'
 WHERE id_servicio='$id_servicio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Servicio.php");
    }
?>