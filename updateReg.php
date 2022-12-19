<?php
include("conexion.php");

$conexion = conexion();

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$discurso=$_POST ["discurso"];

$sql = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', email='$email', discurso='$discurso' WHERE id=$id";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: modifElim.php");
}


?>
