<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM servicio WHERE id_servicio='$id'";
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
                    
                                <input type="hidden" name="id_servicio" value="<?php echo $row['id_servicio']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_clientee" value="<?php echo $row['id_cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Motivo" placeholder="Motivoo" value="<?php echo $row['Motivo']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_solicitud" placeholder="Fecha_soli" value="<?php echo $row['Fecha_solicitud']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_servicio" placeholder="Fecha_ser" value="<?php echo $row['Fecha_servicio']  ?>">
                                <input type="text" class="form-control mb-3" name="Tipo_servicio" placeholder="Tipo_ser" value="<?php echo $row['Tipo_servicio']  ?>">
                                <input type="text" class="form-control mb-3" name="Costo_servicio" placeholder="Costo_ser" value="<?php echo $row['Costo_servicio']  ?>">
                            

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>