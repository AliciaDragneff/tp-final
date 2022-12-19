<?php
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];


$sql = "DELETE FROM oradores WHERE id=$id";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: modifElim.php");
}


?>
