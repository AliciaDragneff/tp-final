<?php

include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM oradores WHERE id=$id";
$query = mysqli_query($conexion, $sql);
$mostrarReg = mysqli_fetch_array($query);


?>



<?php
include("header.php");
?>

<div class="modificar-form ">


<div class="d-flex flex-column justify-content-between ">


<div class="cabeceras bg-image row align-items-center "><H1 class="text-center text-light ">Modifica lo que creas necesario</H1></div>

<div class="card mb-3">
  
  <div class="card-body">
    <h5 class="card-title text-center">Desde aquí podés modificar el registro elegido</h5>
       
  </div>
</div>

<div class="container">
    <div class="row p-3 editarForm my-5">
            <h4 class="text-center text-light">Modificar Orador</h4>
            <form action="updateReg.php" method="POST" class="row g-3">
            
            
                <div class="row">
                <input class="form-control  invisible" type="hidden" name="id" id="id" value="<?php echo $mostrarReg["id"] ?>">
                </div>
                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label ">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mostrarReg["nombre"] ?>">
                </div>
                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label mb-2 mt-3">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $mostrarReg["apellido"] ?>">
                </div>
                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label mb-2 mt-3">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $mostrarReg["email"] ?>">
                </div>

                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label mb-2 mt-3">Contenido del Discurso</label>
                    <input type="text" class="form-control" id="discurso" name="discurso" value="<?php echo $mostrarReg["discurso"] ?>">
                </div>
                <div class="row d-flex  justify-content-center align-items-center mb-3 mt-3">
                    <button type="submit" class="btn w-50 botonEditarForm text-light ">Modificar</button>
                </div>
                
            </form>
    </div>

    </div>
<div>
    <?php
include("footer.php");

?>

</div>
