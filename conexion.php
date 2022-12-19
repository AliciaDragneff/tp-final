<?php

function conexion () {

$servidor= "localhost";
$usuario= "mirandita";
$clave= "mirandita";

$base= "oradores";


$conectarHost = mysqli_connect($servidor,$usuario,$clave);

mysqli_select_db ($conectarHost,$base);

 /*
    echo "<pre>";
    print_r($conectarHost);
    echo "</pre>";
  */

    return $conectarHost;


}



?>
