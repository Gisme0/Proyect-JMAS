<?php

include("conexion.php");
$con=conectar();

$id_Cliente=$_GET['id'];

$sql="DELETE FROM cliente  WHERE id_Cliente='$id_Cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cliente.php");
    }
?>
