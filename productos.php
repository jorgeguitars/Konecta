<?php 
            include("conexion.php");
            $con=conectar();

    $sql="SELECT p.id,p.nombre,p.referencia,p.precio,p.id_categoria,p.peso,c.nombre AS nombre_categoria,p.stock  FROM productos p 
    INNER JOIN categorias c ON (c.id=p.id_categoria)";

    $query=mysqli_query($con,$sql);
   
   
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Referencia</th>
                                        <th>precio</th>
                                        <th>Peso</th>
                                        <th>Categoria</th>
                                        <th>Stock</th> 
                                    
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query)) {
                                            
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['referencia']?></th>
                                                <th><?php  echo $row['precio']?></th> 
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['nombre_categoria']?></th> 
                                                <th><?php  echo $row['stock']?></th> 
                                                <th><a href="ventas.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Comprar</a></th>
                                                 
                                                                                       
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