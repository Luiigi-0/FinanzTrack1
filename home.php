

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
                <a href="#">
                  <i class="icon ph-bold ph-house-simple"></i>
                  <span class="text">Dashboard</span>
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
                    <a href="./html/semanales.html">
                      <span class="text">Gastos semanales</span>
                    </a>
                  </li>
                  <li>
                    <a href="./html/mensuales.html">
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
      <div class="credits">
        <h1>Calculadora Financiera</h1>
        <div class="input-group">
          <label for="ingresosPasivos">Ingresos Pasivos:</label>
          <input type="number" id="ingresosPasivos" step="any">
        </div>
        <div class="input-group">
          <label for="ingresosActivos">Ingresos Activos:</label>
          <input type="number" id="ingresosActivos" step="any">
        </div>

        <div class="input-group">
          <label for="gastos">Gastos Mensuales/Semanales:</label>
        </div>
        <div class="input-group">
          <label for="gastos">Alquiler:</label>
          <input type="number" id="gastos" step="any">
        </div>
        <div class="input-group">
          <label for="gastos">Hi:</label>
          <input type="number" id="gastos" step="any">
        </div>
        <div class="input-group">
          <label for="gastos">Gastos:</label>
          <input type="number" id="gastos" step="any">
        </div>
        <div class="input-group">
          <label for="gastos">Gastos:</label>
          <input type="number" id="gastos" step="any">
        </div>
        <div class="input-group">
          <label for="gastos">Gastos:</label>
          <input type="number" id="gastos" step="any">
        </div>




        <div class="input-group">
          <label for="deudas">Deudas:</label>
          <input type="number" id="deudas" step="any">
        </div>
        <button onclick="calcularYMostrarResultados()">Calcular</button>
        <div class="result" id="result">
          <!-- Aquí se mostrarán los resultados -->
        </div>
      </div>
    </div>
    <script src="oper.js"></script>
        </h1>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>
    <script src="home.js"></script>
  </body>
</html>