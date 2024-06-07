<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="Css/home.css" />
    <title>Sidebar</title>
    <style>
        /* Estilo para ocultar el contenido del botón de ayuda */
        .hidden {
            display: none;
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
                                    <a href="./semanales.php">
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
                                <span class="text">Informe</span>
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
                        <!-- Botón de ayuda con un identificador único -->
                        <a href="#" id="helpButton">
                            <i class="icon ph-bold ph-info"></i>
                            <span class="text">Help</span>
                        </a>
                        <!-- Contenido del botón de ayuda oculto inicialmente -->
                        <div id="helpContent" class="hidden">
                          <p>!Contactanos 3168978277¡</p>
                        </div>
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
    </div>

    <!-- Resto del código omitido por brevedad -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"></script>
    <script src="Js/home.js"></script>

    <script>
        // Obtener el botón de ayuda y el contenido del botón de ayuda
        const helpButton = document.getElementById('helpButton');
        const helpContent = document.getElementById('helpContent');

        // Agregar un evento clic al botón de ayuda
        helpButton.addEventListener('click', function() {
            // Alternar la clase "hidden" para mostrar u ocultar el contenido del botón de ayuda
            helpContent.classList.toggle('hidden');
        });
    </script>

</body>
</html>
