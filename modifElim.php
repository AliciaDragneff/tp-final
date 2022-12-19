
<?php
include("header.php");
include("conexion.php");

$conexion= conexion();

$sql= "SELECT * FROM `oradores`";
$query = mysqli_query($conexion, $sql);

?>

<div class="d-flex flex-column justify-content-between">


<div class="cabeceras bg-image row align-items-center"><H1 class="text-center text-light ">Elimina o Modifica lo que quieras</H1></div>

<div class="card mb-3">
  
  <div class="card-body">
    <h5 class="card-title text-center">Gracias por ser parte de Nuestros Oradores.</h5>
    <p class="card-text text-center">Sentite en libertad de eliminarlos o modificarlos a tu gusto desde aquí</p>
    
  </div>
</div>





<!---- Cabecera de la tabla ---->
<div class="container">

    <div class="table-responsive">

    <table class= 'table table-success table-striped mt-3 ' >

            <thead>
            <th scope="col ">Item</th>
            <th class='col '>Nombre</th>
            <th class='col2 '>Apellido</th>
            <th class='col '>Email</th>
            <th class='col '>Discurso 	</i></i></th>
            <th class='col '> </th>
            <th class='col '>	</th>
            </thead>
              

            <!-------    Mostrar registros ----->
            <tbody class="table-group-divider">
            <?php while($mostrarReg = mysqli_fetch_array($query))  {?>
              <tr>
              <td class='col-1'><?php echo $mostrarReg["id"]?> </td>
              <td class='col-2'><?php echo $mostrarReg["nombre"] ?></td>
              <td class='col-2'><?php echo $mostrarReg["apellido"]?> </td>
              <td class='col-2'><?php echo $mostrarReg["email"] ?></td>
              <td class='col-3'> <?php echo $mostrarReg["discurso"]?> </td>
              <td class=' col-1'><a href= "FormEditarReg.php?id=<?php echo $mostrarReg['id'] ?>"><button class='btn btn-info btn-sm'> <i class='fa-solid fa-bars'></i> Modificar </button> </a></td>
              
              <td class='col-1'><a href = "eliminarReg.php?id= <?php echo $mostrarReg['id'] ?>"><button class='btn btn-danger btn-sm'><i class='fa fa-trash-o ' aria-hidden='true'></i> Eliminar </button> </a></td>
              
              
            </tr> 
            
            <?php }

            ?>

    </table>

    </div>

</div>

<?php

include("footer.php");

  ?>
</div>

