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



$sql="INSERT INTO cliente VALUES('$id_Cliente','$Direccion','$Nombre','$Apellido','$Cod_postal', '$Correo', '$NumTel')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Cliente.php");
    
}else {
}
?>