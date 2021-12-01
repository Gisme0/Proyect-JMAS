<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM servicio";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <?php
            date_default_timezone_set('America/Mexico_City');
            $Fecha_solicitud=date("Y-m-d H:i:s");
            $Fecha_servicio=date("Y-m-d H:i:s");
        ?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                
                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id del clientee">
                                    <input type="text" class="form-control mb-3" name="Motivo" placeholder="Motivo">
                                    <input type="datetime" class="form-control mb-3" name="Fecha_solicitud" value="<?=$Fecha_solicitud?>">
                                    <input type="datetime" class="form-control mb-3" name="Fecha_servicio" value="<?=$Fecha_servicio?>">
                                    <input type="text" class="form-control mb-3" name="Tipo_servicio" placeholder="Tipo de servicio">
                                    <input type="text" class="form-control mb-3" name="Costo_servicio" placeholder="Costo de servicio">
                                   

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Meza_JMAS/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_servicio</th>
                                        <th>id_cliente</th>
                                        <th>Motivo</th>
                                        <th>Fecha_solicitud</th>
                                        <th>Fecha_servicio</th>
                                        <th>Tipo_servicio</th>
                                        <th>Costo_servicio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_servicio']?></th>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['Motivo']?></th>
                                                <th><?php  echo $row['Fecha_solicitud']?></th>    
                                                <th><?php  echo $row['Fecha_servicio']?></th>
                                                <th><?php  echo $row['Tipo_servicio']?></th>
                                                <th><?php  echo $row['Costo_servicio']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['id_servicio'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_servicio'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>