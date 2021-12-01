<?php

include("conexion.php");
$con=conectar();

$id_Cliente=$_POST['id_Cliente'];
$Direccion=$_POST['Direccion'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Cod_postal=$_POST['Cod_postal'];
$Correo=$_POST['Correo'];
$NumTel=$_POST['NumTel'];

$sql="UPDATE cliente SET  Direccion='$Direccion', Nombre='$Nombre',Apellido='$Apellido', Cod_postal='$Cod_postal', Correo='$Correo', NumTel='$NumTel'
 WHERE id_Cliente='$id_Cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cliente.php");
    }
?>