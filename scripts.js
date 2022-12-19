
console.log("todo ok");


/*formulario oradores*/

 

const inputOraNombre = document.getElementById("nombreO");
const inputOraApellido = document.getElementById("apellidoO");
const inputOraEmail = document.getElementById("emailO");
const inputOraDiscurso = document.getElementById("discursoO");

const botonOraEnviar = document.getElementById("enviarOradores");



const menOraNombre = document.getElementById("menOraNombre");
const menOraApellido = document.getElementById("menOraApellido");
const menOraEmail = document.getElementById("menOraEmail");
const mensOraDiscur = document.getElementById("mensOraDiscur");

const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/


function validarFormOrador(evento) {
    evento.preventDefault();
    
    if(inputOraNombre.value.length < 3) {

      menOraNombre.innerHTML = "Ingrese un nombre válido"; 
      return false;}

      else {menOraNombre.innerHTML = ""; }

            
   
    if(inputOraApellido.value.length < 4 ) {
      
      menOraApellido.innerHTML = "Ingrese un apellido válido"; 
        return false; }

        else {menOraApellido.innerHTML = ""; }
     

      if(!expRegular.test(inputOraEmail.value)) {
        
        menOraEmail.innerHTML = "Ingresa un email válido"; 
          return false;
        }
      else {menOraEmail.innerHTML = "";}

     
      if(inputOraDiscurso.value.length < 6) {
        
        mensOraDiscur.innerHTML = "Ingrese un orador válido"; 
          return false;
        }
      


     else 
    document.getElementById("formOradores").submit();
    
  }

  botonOraEnviar.addEventListener("click", validarFormOrador);





