<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE id='$id'";
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
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombree" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellidoo" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="NoEmpleado" placeholder="NoEmpleadoo" value="<?php echo $row['NoEmpleado']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="Correoo" value="<?php echo $row['Correo']  ?>">
                                <input type="text" class="form-control mb-3" name="NumTele" placeholder="Numtelee" value="<?php echo $row['NumTele']  ?>">
                                <input type="text" class="form-control mb-3" name="Sector" placeholder="Sectorr" value="<?php echo $row['Sector']  ?>">
                            

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>