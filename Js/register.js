const formRegister = document.querySelector(".form-register");
const inputUser = document.querySelector(".form-register input[type='text']");
const inputEmail = document.querySelector(".form-register input[type='email']");
const inputPass = document.querySelector(".form-register input[type='password']");
const alertaError = document.querySelector(".alerta-error");
const alertaExito = document.querySelector(".alerta-exito");

const userNameRegex = /^[a-zA-Z0-9\-\_]{4,30}$/;
export const emailRegex = /^[a-zA-Z0-9_.+-]+@+[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
export const passwordRegex = /^.{4,16}$/;

export const estadoValidacionCampos = {
    userName: false,
    userEmail: false,
    userPassword: false,

};

document.addEventListener("DOMContentLoaded", () => {
    formRegister.addEventListener("submit", e => {
        //e.preventDefault(); No se envia el formulario si tiene error (Hay que ubicarlo bien)
        enviarformulario(formRegister,alertaError,alertaExito,)
    });

    inputUser.addEventListener("input", () => {
        validarCampo(userNameRegex, inputUser, "El usuario tiene que ser de 4 a 16 digitos y solo puede contener letras, numeros y guion bajo.")
    })

    inputEmail.addEventListener("input", () => {
        validarCampo(emailRegex, inputEmail, "El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.")
    })

    inputPass.addEventListener("input", () => {
        validarCampo(passwordRegex, inputPass, "La contraseña solo puede contener de 4 a 16 digitos.")
    })


})

export function validarCampo(regularExpression, campo, mensaje) {
    const validarCampo = regularExpression.test(campo.value);
    if (validarCampo) {
        eliminarAlerta(campo.parentElement.parentElement);
        estadoValidacionCampos[campo.name] = true;
        campo.parentElement.classList.remove("error");
        return;
    }

    estadoValidacionCampos[campo.name] = false;
    mostrarAlerta(campo.parentElement.parentElement, mensaje)
    campo.parentElement.classList.add("error");

}

function mostrarAlerta(referencia, mensaje) {
    eliminarAlerta(referencia)
    const alertaDiv = document.createElement("div");
    alertaDiv.classList.add("alerta");
    alertaDiv.textContent = mensaje;
    referencia.appendChild(alertaDiv)
}

function eliminarAlerta(referencia) {
    const alerta = referencia.querySelector(".alerta");

    if (alerta) {
        alerta.remove()
    }
}

export function enviarformulario(form,alertaError,alertaExito,) {
    //validar envio de formulario
    if (estadoValidacionCampos.userName && estadoValidacionCampos.userEmail && estadoValidacionCampos.userPassword){
        alertaExito.classList.add("alertaExito");
        alertaError.classList.remove("alertaError");
        formRegister.reset()
        setTimeout(() => {
            alertaExito.classList.remove("alertaExito");
        }, 3000);
        return
    } 
    
    alertaExito.classList.remove("alertaExito");
    alertaError.classList.add("alertaError");
    
    setTimeout(() => {
        alertaError.classList.remove("alertaError");
    }, 3000);
}