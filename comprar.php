<?php
include ("header.php");

?>

<!--------****************** CARDS  ************************-->


<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="card p-0 col-lg-3 col-md-3 m-2 border border-primary align-items-center" >
        <div class="card-header w-100 text-center bg-primary text-light ">
           <h4> Estudiante</h4>
        </div>
        <div class="card-body text-center">
            <h5 class="card-title">Tienen un descuento.</h5>
            <h5 class="card-title fw-bold">80%</h5>
            <p>*presentar documentación</p>
        </div>
        </div>

        <div class="card p-0 col-lg-3 col-md-3 m-2 border border-success   align-items-center"  >
            <div class="card-header  w-100 text-center bg-success text-light">
                <h4>Trainee</h4>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Tienen un descuento.</h5>
                <h5 class="card-title fw-bold">50%</h5>
                <p>*presentar documentación</p>
            </div>
            </div>

            <div class="card p-0 col-lg-3 col-md-3 m-2 border border-warning   align-items-center" >
                <div class="card-header w-100 text-center bg-warning text-light">
                   <h4>Junior</h4> 
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Tienen un descuento.</h5>
                    <h5 class="card-title fw-bold">15%</h5>
                    <p>*presentar documentación</p>
                </div>
                </div>
        
        

</div>
</div>



<!---*********************** FORMULARIO ****************************** --->


<div class="container d-flex justify-content-center" >

  <div class=" col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-5 ">
  
    <div class="row mb-4 mt-4" id="conviertete">  
      <div class="text-center">VENTA </div>
    <h1 class="text-center">VALOR DE TICKET $ 200</h1> 
    

    
    </div> 

    <form id="miFormulario">
      <div class="row ">
        <div class="  col">
          <input id= "nombre" type="text" class="form-control " placeholder="Nombre">
          <div  id= "mensajeNombre" class="text-danger"></div>
        </div>
        <div class="col">
          <input type="text"  id = "apellido" class="form-control" placeholder="Apellido">
          <div  id= "mensajeApellido" class="text-danger"></div>
        </div>
      </div>
      
      <div class="row">
        <div class="col mt-4" >
        <input type="text"  id = "email" class="form-control" placeholder="Correo">  
        <div id = "mensajeEmail" class="text-danger"></div>   
      </div>
    </div>

      <div class="row ">
        <div class="col md-2">
            <div class = "mt-2 mb-2"><label for="Cantidad">Cantidad</label></div>
          <input type="number"  id="cantidad" class="form-control  " placeholder="Cantidad" >
          <div id = "mensajeCantidad" class="text-danger"></div>
        </div>
        <div class="col">
            <div class = "mt-2 mb-2"><label for="Categoria">Categoría</label></div>
            
            <select name="Estudiante" id="categoria"  class="form-select">Categoria

              <option value="0">Ninguna</option>
              <option value="0.8">Estudiante</option>
              <option value="0.5">Trainee</option>
              <option value="0.15">Junior</option>
           
            </select>
                
        </div>
      </div>


      <div  row  id="mensajeTotal" class="mt-2  pt-4 pb-4 border-info rounded-3 colorMensajeTotal"> Total a pagar en $ :  </div>
      
      <div class="row">
        
       
        <div class="col ps-3 pe-3 mt-4">
          <button id="limpiar" type="button" class="btn btn-lg btn-form  text-light w-100 colorBotonesCompar">
            Borrar
          </button>  </div>

          <div class="col mt-4">
            <button id="enviar" type="button" class="btn btn-lg  text-light w-100 colorBotonesCompar">
              Resumen
            </button>  </div>
      </div>

      
    
    
    
    

    </form>
     
  </div>

</div>




<script src="./scripts-c.js"></script>


    <?php
  include ("footer.php");
  ?>