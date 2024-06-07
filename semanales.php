<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="Css/home.css" />
    <title>Sidebar</title>
    <style>
        #myChart {
            width: 75px;
            height: 75px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="user-img">
                    <img src="user.jpg" alt="" />
                </div>
                <div class="user-details">
                    <p class="title"></p>
                    <p class="name">FinanzTrack</p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Main</p>
                    <ul>
                        <li>
                            <a href="./home.php">
                                <i class="icon ph-bold ph-house-simple"></i>
                                <span class="text">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-user"></i>
                                <span class="text">Gestion de Gastos</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="text">Gastos semanales</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./mensuales.php">
                                        <span class="text">Gastos mensuales</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-calendar-blank"></i>
                                <span class="text">Schedules</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Income</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="text">Earnings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Funds</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Declines</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Payouts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <p class="title">Settings</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-gear"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <p class="title">Account</p>
                <ul>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-info"></i>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    <li>
                        <a href="php/cerrar_sesion.php">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="formCalculadoraFinanciera">
            <div class="input-group">
                <label for="ingresosPasivos">Ingresos Semanales:</label>
                <input type="number" id="ingresosPasivos" step="any">
            </div>
            <div class="input-group">
                <label for="ingresosActivos">Ingresos Activos:</label>
                <input type="number" id="ingresosActivos" step="any">
            </div>
            <div class="input-group">
                <label for="gastosAlquiler">Alimentacion:</label>
                <input type="number" id="gastosAlquiler" step="any">
            </div>
            <div class="input-group">
                <label for="gastosGenerales">Transporte:</label>
                <input type="number" id="gastosGenerales" step="any">
            </div>
            <div class="input-group">
                <label for="gastosExtras">Entretenimiento:</label>
                <input type="number" id="gastosExtras" step="any">
            </div>
            <div class="input-group">
                <label for="deudas">Deudas:</label>
                <input type="number" id="deudas" step="any">
            </div>
            <div class="input-group">
                <label for="fechaIngreso">Fecha de ingreso:</label>
                <input type="date" id="fechaIngreso" step="any">
            </div>
            <button type="button" onclick="calcularYMostrarResultados()">Calcular</button>
            <button type="reset">Reset</button>
        </form>
        <!-- Agrega un espacio para mostrar los resultados -->
        <div class="result" id="result"></div>
        <canvas id="myChart"></canvas>
    </div>
    <script>
        let ingresosPasivos = 0;
        let ingresosActivos = 0;
        let gastosAlquiler = 0;
        let gastosGenerales = 0;
        let gastosExtras = 0;
        let deudas = 0;
        let dineroTotal = 0;
        let fechaIngreso = "";

        function ingresarDatos() {
            ingresosPasivos = parseFloat(document.getElementById('ingresosPasivos').value) || 0;
            ingresosActivos = parseFloat(document.getElementById('ingresosActivos').value) || 0;
            gastosAlquiler = parseFloat(document.getElementById('gastosAlquiler').value) || 0;
            gastosGenerales = parseFloat(document.getElementById('gastosGenerales').value) || 0;
            gastosExtras = parseFloat(document.getElementById('gastosExtras').value) || 0;
            deudas = parseFloat(document.getElementById('deudas').value) || 0;
            fechaIngreso = document.getElementById('fechaIngreso').value;
        }

        function calcularDineroTotal() {
            dineroTotal = ingresosPasivos + ingresosActivos - (gastosAlquiler + gastosGenerales + gastosExtras) - deudas;
        }

        function mostrarResultados() {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `
                <p>Ingresos pasivos: ${ingresosPasivos}</p>
                <p>Ingresos activos: ${ingresosActivos}</p>
                <p>Gastos Alquiler: ${gastosAlquiler}</p>
                <p>Gastos Generales: ${gastosGenerales}</p>
                <p>Gastos Extras: ${gastosExtras}</p>
                <p>Deudas: ${deudas}</p>
                <p>Fecha de ingreso: ${fechaIngreso}</p>
                <p><strong>Dinero total: ${dineroTotal}</strong></p>
            `;

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Ingresos Pasivos', 'Ingresos Activos', 'Gastos Alquiler', 'Gastos Generales', 'Gastos Extras', 'Deudas'],
                    datasets: [{
                        label: 'Valor',
                        data: [ingresosPasivos, ingresosActivos, gastosAlquiler, gastosGenerales, gastosExtras, deudas],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    indexAxis: 'x', // Cambia el eje de índice al eje y para controlar la anchura de la barra
                    elements: {
                        bar: {
                            barThickness: 10 // Modifica este valor según tu preferencia
                        }
                    }
                }
            });
        }

        function calcularYMostrarResultados() {
            ingresarDatos();
            calcularDineroTotal();
            mostrarResultados();
        }

        document.getElementById('formCalculadoraFinanciera').addEventListener('submit', function (event) {
            event.preventDefault();
            calcularYMostrarResultados();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
    <script src="Js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>
