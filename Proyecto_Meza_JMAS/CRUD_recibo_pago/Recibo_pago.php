<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM recibo_pago";
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
            $Fecha=date("Y-m-d H:i:s");
        ?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                
                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_clientee">
                                    <input type="text" class="form-control mb-3" name="Num_medidor" placeholder="Numero de medidor">
                                    <input type="text" class="form-control mb-3" name="Consumo" placeholder="Consumo en Litros">
                                    <input type="text" class="form-control mb-3" name="FormaPago" placeholder="Forma de pago">
                                    <input type="text" class="form-control mb-3" name="Pago_total" placeholder="Pago total">
                                    <input type="datetime" class="form-control mb-3" name="Fecha" value="<?=$Fecha?>">

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Meza_JMAS/index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>NumFactura</th>
                                        <th>id_cliente</th>
                                        <th>Num_medidor</th>
                                        <th>Consumo</th>
                                        <th>FormaPago</th>
                                        <th>Pago_total</th>
                                        <th>Fecha</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NumFactura']?></th>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['Num_medidor']?></th>
                                                <th><?php  echo $row['Consumo']?></th>    
                                                <th><?php  echo $row['FormaPago']?></th>
                                                <th><?php  echo $row['Pago_total']?></th>
                                                <th><?php  echo $row['Fecha']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['NumFactura'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NumFactura'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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