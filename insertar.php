<?php
include("conexion.php");

$con=conectar();


$id=$_POST['id'];
$cantidad=$_POST['cantidad'];

$sql2="SELECT * FROM productos WHERE id='$id'";
$query2=mysqli_query($con,$sql2);

$row = mysqli_fetch_array($query2);
$stock=$row['stock'];
$precio=$row['precio'];



$canti = $stock-$cantidad;



$actualiza = "UPDATE `konecta2`.`productos` SET `stock`='$canti' WHERE  `id`='$id';";
$query= mysqli_query($con,$actualiza);

$sql = "INSERT INTO `konecta2`.`ventas` (`id_producto`, `cantidad`, `precio`, `created_at`) VALUES ('$id', '$cantidad', '$precio', now());";

if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);




if($sql){
    Header("Location: productos.php");
    
}else {
}
?>