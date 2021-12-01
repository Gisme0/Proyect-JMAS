<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$NoEmpleado=$_POST['NoEmpleado'];
$Correo=$_POST['Correo'];
$NumTele=$_POST['NumTele'];
$Sector=$_POST['Sector'];

$sql="UPDATE empleado SET  Nombre='$Nombre',Apellido='$Apellido', NoEmpleado='$NoEmpleado', Correo='$Correo', NumTele='$NumTele', Sector='$Sector'
 WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>