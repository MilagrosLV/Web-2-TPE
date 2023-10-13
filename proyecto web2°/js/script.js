//EJECUTANDO FUNCIONES
document.getElementById("btn_login").addEventListener("click", logIn);
document.getElementById("btn_register").addEventListener("click", register);
window.addEventListener("resize", widthPage);

//DECLARANDO VARIABLES
let form_login = document.querySelector(".form-login");
let form_register = document.querySelector(".form-register");
let conteiner_login_register = document.querySelector(".conteiner-login-register");
let back_box_login = document.querySelector(".back-box-login");
let back_box_register = document.querySelector(".back-box-register");


//FUNCIONES
function widthPage(){

    if (window.innerWidth > 850){
        back_box_register.style.display = "block";
        back_box_login.style.display = "block";
    }else{
        back_box_register.style.display = "block";
        back_box_register.style.opacity = "1";
        back_box_login.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        conteiner_login_register.style.left = "0px";   
    }
}

widthPage();

    function logIn(){

        if (window.innerWidth > 850){
            form_login.style.display = "block";
            form_register.style.display = "none";
            container_login_register.style.left = "10px";
            back_box_login.style.opacity = "0";
            back_box_register.style.opacity = "1";
        }else{
            form_login.style.display = "block";
            form_register.style.display = "none";
            container_login_register.style.left = "0px";
            back_box_login.style.display = "none";
            back_box_register.style.display = "block";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            form_register.style.display = "block";
            form_login.style.display = "none";
            container_login_register.style.left = "410px";
            back_box_register.style.opacity = "0";
            back_box_login.style.opacity = "1";
        }else{
            form_register.style.display = "block";
            form_login.style.display = "none";
            container_login_register.style.left = "0px";
            back_box_register.style.display = "none";
            back_box_login.style.display = "block";
            back_box_login.style.opacity = "1";
        }
}