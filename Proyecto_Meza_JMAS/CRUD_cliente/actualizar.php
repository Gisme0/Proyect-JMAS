<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE id_Cliente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_Cliente" value="<?php echo $row['id_Cliente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccioon" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombree" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellidoo" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="Cod_postal" placeholder="CodigoPostal" value="<?php echo $row['Cod_postal']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="Correoo" value="<?php echo $row['Correo']  ?>">
                                <input type="text" class="form-control mb-3" name="NumTel" placeholder="Numero Telefono" value="<?php echo $row['NumTel']  ?>">
                            

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>