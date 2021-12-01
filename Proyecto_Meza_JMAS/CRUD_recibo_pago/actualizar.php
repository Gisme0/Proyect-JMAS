<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM recibo_pago WHERE NumFactura='$id'";
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
                    
                                <input type="hidden" name="NumFactura" value="<?php echo $row['NumFactura']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_clientee" value="<?php echo $row['id_cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Num_medidor" placeholder="Num_medidoor" value="<?php echo $row['Num_medidor']  ?>">
                                <input type="text" class="form-control mb-3" name="Consumo" placeholder="Consumoo" value="<?php echo $row['Consumo']  ?>">
                                <input type="text" class="form-control mb-3" name="FormaPago" placeholder="FormaPagoo" value="<?php echo $row['FormaPago']  ?>">
                                <input type="text" class="form-control mb-3" name="Pago_total" placeholder="Pago_totaal" value="<?php echo $row['Pago_total']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fechaa" value="<?php echo $row['Fecha']  ?>">
                            

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>