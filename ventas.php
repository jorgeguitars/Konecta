<?php 
include("conexion.php");
 

$con=conectar();

$id=$_GET['id'];


$sql2="SELECT * FROM productos WHERE id='$id'";
$query2=mysqli_query($con,$sql2);

$row = mysqli_fetch_array($query2);
$stock=$row['stock'];
$idproducto=$row['id'];


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
                                    <p class="h1"> Referencia:  <?php  echo $row['referencia']?></p>
                                    <p class="h1"> Nombre:  <?php  echo $row['nombre']?></p>
                                    <p class="h1"> Peso:  <?php  echo $row['peso']?></p>
                                    <p class="h1"> Precio:  $ <?php  echo $row['precio']?></p>
                                 <form action="insertar.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
			                        <input type="number"  id="cantidad" name="cantidad">
			                        <br><br><br>
                                    <input type="submit" class="btn btn-primary" href="insertar.php?id=<?php echo $row['id'] ?>">
                                    
		                          </form>
                                    </tr>
                                </thead>
                        
                            </table>
                    
                        </div>
                    </div>  
            </div>
    </body>
</html>