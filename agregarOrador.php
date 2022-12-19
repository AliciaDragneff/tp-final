<?php

include ("conexion.php");

$conexion= conexion();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$discurso=$_POST['discurso'];



$sql="INSERT INTO oradores (id, nombre, apellido, email, discurso) VALUES (NULL, '$nombre', '$apellido', '$email', '$discurso')";

$query = mysqli_query($conexion, $sql);

if($query) {
    Header("Location: modifElim.php");
}



?>