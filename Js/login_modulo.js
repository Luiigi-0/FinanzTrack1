import { validarCampo, emailRegex, passwordRegex, estadoValidacionCampos, enviarformulario } from "./register.js"

const formLogin = document.querySelector(".form-login");
const inputEmail = document.querySelector(".form-login input[type='email']");
const inputPass = document.querySelector(".form-login input[type='password']");
const alertaErrorLogin = document.querySelector(".form-login .alerta-error");
const alertaExitoLogin = document.querySelector(".form-login .alerta-exito");

document.addEventListener("DOMContentLoaded", () => {
    formLogin.addEventListener("submit", e => {
        estadoValidacionCampos.userName = true;
        enviarformulario(formLogin,alertaErrorLogin,alertaExitoLogin)
    });

    inputEmail.addEventListener("input", () => {
        validarCampo(emailRegex, inputEmail, "El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.")
    })

    inputPass.addEventListener("input", () => {
        validarCampo(passwordRegex, inputPass, "La contraseña solo puede contener de 4 a 16 digitos.")
    })


})