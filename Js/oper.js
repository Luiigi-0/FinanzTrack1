// Definimos las variables para almacenar los datos ingresados por el usuario
let ingresosPasivos = 0;
let ingresosActivos = 0;
let gastosAlquiler = 0;
let gastosHi = 0;
let gastosGenerales = 0;
let gastosExtras = 0;
let deudas = 0;
let dineroTotal = 0;

// Función para ingresar los datos desde los campos del formulario
function ingresarDatos() {
    ingresosPasivos = parseFloat(document.getElementById('ingresosPasivos').value) || 0;
    ingresosActivos = parseFloat(document.getElementById('ingresosActivos').value) || 0;
    gastosAlquiler = parseFloat(document.getElementById('gastosAlquiler').value) || 0;
    gastosHi = parseFloat(document.getElementById('gastosHi').value) || 0;
    gastosGenerales = parseFloat(document.getElementById('gastosGenerales').value) || 0;
    gastosExtras = parseFloat(document.getElementById('gastosExtras').value) || 0;
    deudas = parseFloat(document.getElementById('deudas').value) || 0;
}

// Función para calcular el dinero total
function calcularDineroTotal() {
    dineroTotal = ingresosPasivos + ingresosActivos - (gastosAlquiler + gastosHi + gastosGenerales + gastosExtras) - deudas;
}

// Función para mostrar los resultados
function mostrarResultados() {
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <p>Ingresos pasivos: ${ingresosPasivos}</p>
        <p>Ingresos activos: ${ingresosActivos}</p>
        <p>Gastos Alquiler: ${gastosAlquiler}</p>
        <p>Gastos Hi: ${gastosHi}</p>
        <p>Gastos Generales: ${gastosGenerales}</p>
        <p>Gastos Extras: ${gastosExtras}</p>
        <p>Deudas: ${deudas}</p>
        <p><strong>Dinero total: ${dineroTotal}</strong></p>
    `;
}

// Función para ingresar datos, calcular el dinero total y mostrar los resultados
function calcularYMostrarResultados() {
    ingresarDatos();
    calcularDineroTotal();
    mostrarResultados();
}
