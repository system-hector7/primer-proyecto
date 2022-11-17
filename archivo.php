<?php
require 'db.php';

$carro=$_POST['carro'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];

$sql = "INSERT INTO modelo (carro,modelo,color)
VALUES ('{$carro}','{$modelo}','{$color}');";

$resul = mysqli_query($conectar, $sql) ;
echo 'Se guardo correctamente';
?>