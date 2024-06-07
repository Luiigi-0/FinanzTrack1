// Definimos las variables para almacenar los datos ingresados por el usuario
let ingresosPasivos = 0;
let ingresosActivos = 0;
let gastos = 0;
let deudas = 0;
let dineroTotal = 0;

// Función para ingresar los datos desde los campos del formulario
function ingresarDatos() {
    ingresosPasivos = parseFloat(document.getElementById('ingresosPasivos').value) || 0;
    ingresosActivos = parseFloat(document.getElementById('ingresosActivos').value) || 0;
    gastos = parseFloat(document.getElementById('gastos').value) || 0;
    deudas = parseFloat(document.getElementById('deudas').value) || 0;
}

// Función para calcular el dinero total
function calcularDineroTotal() {
    dineroTotal = ingresosPasivos + ingresosActivos - gastos - deudas;
}

// Función para mostrar los resultados
function mostrarResultados() {
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <p>Ingresos pasivos: ${ingresosPasivos}</p>
        <p>Ingresos activos: ${ingresosActivos}</p>
        <p>Gastos: ${gastos}</p>
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
