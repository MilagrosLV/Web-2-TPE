
'use strict'
let form = document.querySelector('#form');
let boton= document.getElementById("boton");
boton.addEventListener('click', agregar);
form.addEventListener('submit', agregar);


function agregar(e){
  e.preventDefault();
  
  // se obtienen todos los datos del form
  let formData = new FormData(form);
 
  
  //obtengo los datos ingresados en el form segun name de cada input
  //dentro de GET se pone la clabe de cada formulario, en otras palabras, el NAME en el html.
  
  let email = formData.get('email');  
  let nombre = formData.get('nombre');
  let datos= {
    "email": email,
    "nombre":nombre,
  }
    //este es un OBJETO.

  console.log(datos);

  document.querySelector("#ingresoemail").innerHTML = "Ingreso con email:  " + email;
  document.querySelector("#ingresonombre").innerHTML = "Ingreso con nombre: " + nombre;
}


function captcha() {
  let alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 
      let a = alpha[Math.floor(Math.random() * alpha.length)];
      let b = alpha[Math.floor(Math.random() * alpha.length)];
      let c = alpha[Math.floor(Math.random() * alpha.length)];
     

  let code = a+b+c;
  return code;
}

let parrafo= document.querySelector("#codigo");
parrafo.innerHTML= captcha();


//ejecuta la funcion cada vez que se recarga la pagina dando un codigo distinto(no se si funciona, sino buscalo)
window.onload= captcha;

//aca llamo al boton del formulario y lo guardo en una letiable
let btn= document.getElementById("boton");

//aca le digo que cada que se haga click en el boton se ejecute la funcion validar
btn.addEventListener("click",validar)


function validar (){
let string= parrafo.textContent;

//aca llamo al input del html
let user = document.getElementById("inputText");

//y aca guardo lo que el usuario escribio
let userString = user.value;

if (userString==string){

  window.open (URL="home.html");
}
  else{
    alert("Codigo incorrecto");
  }

}