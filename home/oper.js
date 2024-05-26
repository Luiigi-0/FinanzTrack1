// Definimos las variables para almacenar los datos ingresados por el usuario
let ingresosPasivos = 0;
let ingresosActivos = 0;
let gastos = 0;
let deudas = 0;
let dineroTotal = 0;

// Función para ingresar los datos
function ingresarDatos() {
    ingresosPasivos = parseFloat(prompt("Ingrese sus ingresos pasivos:"));
    ingresosActivos = parseFloat(prompt("Ingrese sus ingresos activos:"));
    gastos = parseFloat(prompt("Ingrese sus gastos:"));
    deudas = parseFloat(prompt("Ingrese sus deudas:"));
}

// Función para calcular el dinero total
function calcularDineroTotal() {
    dineroTotal = ingresosPasivos + ingresosActivos - gastos - deudas;
}

// Función para mostrar los resultados
function mostrarResultados() {  
    console.log("Ingresos pasivos: " + ingresosPasivos);
    console.log("Ingresos activos: " + ingresosActivos);
    console.log("Gastos: " + gastos);
    console.log("Deudas: " + deudas);
    console.log("Dinero total: " + dineroTotal);
}

// Llamamos a las funciones para que el usuario ingrese los datos, se calcule el dinero total y se muestren los resultados
ingresarDatos();
calcularDineroTotal();
mostrarResultados();
