//alert("Vinculado :)");

//Ejecutando eventos de boton:
document.getElementById("btn-sesion").addEventListener("click", sesion);

document.getElementById("btn-registro").addEventListener("click", register);

window.addEventListener("resize", anchoPagina);

//Declarando variables
var contenedorlogReg = document.querySelector(".contenedor-login-reg");
var formLogin = document.querySelector(".form-login");
var formRegister = document.querySelector(".form-register");
var cajaTraseralog = document.querySelector(".caja-trasera-login");
var cajaTraseraReg = document.querySelector(".caja-trasera-register");

//FUNCIONES

function anchoPagina(){
    if (window.innerWidth > 850){
        cajaTraseralog.style.display = "block";
        cajaTraseraReg.style.display = "block";
    }else{
        cajaTraseraReg.style.display = "block";
        cajaTraseraReg.style.opacity = "1";
        cajaTraseralog.style.display = "none";
        formLogin.style.display = "block";
        formRegister.style.display = "none";
        contenedorlogReg.style.left = "0px";
    }
}

anchoPagina();

function sesion(){
    if (window.innerWidth > 850) {
        formRegister.style.display = "none";
        contenedorlogReg.style.left = "15px";

        formLogin.style.display = "block";
        cajaTraseraReg.style.opacity = "1";
        cajaTraseralog.style.opacity = "0";
    } else {
        formRegister.style.display = "none";
        contenedorlogReg.style.left = "0px";

        formLogin.style.display = "block";
        cajaTraseraReg.style.display = "block";
        cajaTraseralog.style.display = "none";
    }
}

function register(){
    if (window.innerWidth > 850) {
        formRegister.style.display = "block";
        contenedorlogReg.style.left = "450px";

        formLogin.style.display = "none";
        cajaTraseraReg.style.opacity = "0";
        cajaTraseralog.style.opacity = "1";
    } else {
        formRegister.style.display = "block";
        contenedorlogReg.style.left = "0px";

        formLogin.style.display = "none";
        cajaTraseraReg.style.display = "none";
        cajaTraseralog.style.display = "block";
        cajaTraseralog.style.opacity = "1";
    }
}