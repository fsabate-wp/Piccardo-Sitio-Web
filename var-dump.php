<?php
//$random = mt_rand(0, 400);
const API_URL = "https://www.tokkobroker.com/api/v1/property/5139464/?key=0e34db4a9d01fbb50f90b82443870ac54da3ece7";
$result = file_get_contents(API_URL);
$data = json_decode($result, true);
//$cantidadEmprendimientos = $data['meta']['total_count'];
?>

<!DOCTYPE html>
<html lang="es-ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets\images\favicon.ico" type="image/x-icon">
    <script src="assets/js/lazy.js"></script>
    <title>Piccardo Propiedades</title>
  </head>
  <body>
    <header id="nav-menu" aria-label="navigation bar">
      <div id="top-bar">
        <div class="top-bar-socials">
          <a href="https://www.instagram.com/piccardo.propiedades/"><i class='bx bxl-instagram-alt'></i></a>
          <a href="https://www.facebook.com/Piccardo-Propiedades-105944338553140"><i class='bx bxl-facebook-circle' ></i></a>
          <a href="https://www.linkedin.com/company/piccardo-propiedades/"><i class='bx bxl-linkedin-square'></i></a>
          <a href="mailto:info@piccardopropiedades.com" class="top-bar-ico" ><i class='bx bx-envelope' ></i></a>
          <a href="tel:+5491162085380" class="top-bar-ico" ><i class='bx bx-mobile'></i></a>
        </div>
        <div class="top-bar-contact">
          <a href="mailto:info@piccardopropiedades.com">info@piccardopropiedades.com</a>
          <a href="tel:+5491162085380">+54 9 (11) 6208-5380</a>
        </div>
        
      </div>
      <div class="container-header">
        <div class="nav-start">
          <a class="logo" href="/">
            <img
              src="assets\images\piccard-comp-white.webp"
              width="225"
              height="75"
              alt="Piccardo Propiedades"
            />
          </a>
          <nav class="menu">
            <ul class="menu-bar">

              <li>
                <button
                  class="nav-link dropdown-btn"
                  data-dropdown="dropdown1"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-label="Propiedades"
                >
                  Propiedades
                  <i class="bx bx-chevron-down" aria-hidden="true"></i>
                </button>
                <div id="dropdown1" class="dropdown">
                  <ul role="menu">
                    <li class="dropdown-title">
                      <span class="dropdown-link-title">Tipo de Propiedad</span>
                    </li>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#adobe-xd">
                        <img src="assets/icons/casas-ico.svg" />
                        Casas
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                        <img src="assets/icons/casas-ico.svg" />
                        Departamentos
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                        <img src="assets/icons/casas-ico.svg" />
                        Edificios
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                        <img src="assets/icons/casas-ico.svg" />
                        Locales
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                       <img src="assets/icons/casas-ico.svg" />
                        Oficinas
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                        <img src="assets/icons/casas-ico.svg" />
                        Terrenos y Lotes
                      </a>
                    </li>
                  </ul>

                  <ul role="menu">
                    <li class="dropdown-title">
                      <span class="dropdown-link-title">Tipo de Operación</span>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#adobe-xd">
                        <img src="assets/icons/casas-ico.svg" />
                        Alquiler
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#after-effect">
                        <img src="assets/icons/casas-ico.svg" />
                        Compra
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <button
                  class="nav-link dropdown-btn"
                  data-dropdown="dropdown2"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-label="emprendimientos"
                >
                  Emprendimientos
                  <i class="bx bx-chevron-down" aria-hidden="true"></i>
                </button>
                <div id="dropdown2" class="dropdown">
                  <ul role="menu">
                    <li>
                      <span class="dropdown-link-title">Tipos de Emprendimientos</span>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#">En Pozo/Preventa</a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#"
                        >En Construcción</a
                      >
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#"
                        >Terminado</a
                      >
                    </li>
                  </ul>                 
                </div>
              </li>
              <li><a class="nav-link" href="">Tasaciones</a></li>
              <li><a class="nav-link" href="">Servicios</a></li>
              <li><a class="nav-link" href="">Contacto</a></li>
            </ul>
          </nav>
        </div>
        <div class="nav-end">
          <div class="right-container">
                        
          </div>
          <button
            id="hamburger"
            aria-label="hamburger"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bx bx-menu" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </header>
    <div id="container">
    <span><?=var_dump($data) ?></span>
    </div>    
    <footer>
      <div>
        <a href="">Piccardo Propiedades <i class='bx bx-copyright'></i> 2024</a>
      </div>
    </footer>
    <script src="script-menu.js"></script>
  </body>
</html>
