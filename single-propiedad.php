<?php
//$random = mt_rand(0, 400);
const API_URL = "https://www.tokkobroker.com/api/v1/property/6084996/?key=0e34db4a9d01fbb50f90b82443870ac54da3ece7";
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
    <link href="https://static.tokkobroker.com/static/css/tokko-icons.css?20240519062942" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets\images\favicon.ico" type="image/x-icon">
    <script src="assets/js/lazy.js"></script>
    <title>Piccardo Propiedades</title>
  </head>
  <body>
  <a href="https://wa.me/593994456461?text=" class="whatsapp" target="_blank"> <i class='bx bxl-whatsapp'></i></a>
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
      <div class="property-header">
            <section class="single-imgs">
              <div class="imagen-principal-single">
              <img src="<?=$data['photos'][0]['image'] ?? ''; ?>" alt="property 1">
              </div>
              <div class="imagenes-propiedad">                
                  <img src="<?=$data['photos'][1]['image'] ?? ''; ?>" alt="property 2">
                  <img src="<?=$data['photos'][2]['image'] ?? ''; ?>" alt="property 3">
                  <img src="<?=$data['photos'][3]['image'] ?? ''; ?>" alt="property 4">
                  <img src="<?=$data['photos'][4]['image'] ?? ''; ?>" alt="property 5">
              </div>
            </section>
            <div class="property-info-single">
                <h1><?=$data['address'];?></h1>
                <span><?=$data['type']['name']; ?> - <?=$data['semiroofed_surface'];?>m² - 1 ambiente</span>
                <h2 style="color: #D6552b;"> <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?> <?=$data['operations'][0]['prices'][0]['currency'];?> <?=$data['operations'][0]['prices'][0]['price'];?></h2>
                <p>Ubicación: <span>Río de Janeiro al 500, Almagro, Capital Federal</span></p>
                
                <div class="property-details">
                    <span><i class="icon-totalconstruido" style="font-size: 24px;width: 16px;height: 16px;"></i>40 m² Totales</span>
                    <span><i class="icon-cubierta" style="font-size: 24px;width: 16px;height: 16px;"></i>28 m² Cubiertos</span>
                    <span><i class="icon-ambientes" style="font-size: 24px;width: 16px;height: 16px;"></i>1 Ambiente</span>
                    <span><i class="icon-banos" style="font-size: 24px;width: 16px;height: 16px;"></i>1 baño</span>
                    <span><i class="icon-dormitorios" style="font-size: 24px;width: 16px;height: 16px;"></i>1 Dormitorio</span>
                    <span><i class="icon-toilletes" style="font-size: 24px;width: 16px;height: 16px;"></i>1 Toilette</span>
                    <span><i class="icon-cochera" style="font-size: 24px;width: 16px;height: 16px;"></i>Cochera</span>
                </div>
            </div>
        </div>
        <section class="description">
            <h3>En Construcción! Monoambiente con Balcón Aterrazado en Lo Mejor de Almagro!</h3>
            <p>Entrega: JUNIO 2025</p>
            <button id="toggleDescription">Leer descripción completa</button>
            <p id="fullDescription" class="hidden">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget sollicitudin lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque eget mi enim. Nulla venenatis ante id nisi ultrices tincidunt. Sed convallis urna vel lectus consequat vulputate. Donec a fermentum felis. Nulla dictum justo non lacus ultrices euismod. Cras rutrum odio vitae est porttitor, sed fermentum arcu elementum. Morbi maximus lorem eget velit malesuada semper. Aliquam purus sem, accumsan tempor lacus at, maximus scelerisque turpis.
            </p>
        </section>
        <section class="features">
            <h3>Conocé más sobre esta propiedad</h3>
            <ul id="tabs">
                <li class="active" data-tab="generalCharacteristics">Características generales</li>
                <li data-tab="environments">Ambientes</li>
                <li data-tab="characteristics">Características</li>
            </ul>
            <div id="generalCharacteristics" class="tab-content active">
                <ul>
                    <li>Apto profesional</li>
                    <li>Cantidad plantas: 1</li>
                    <li>Parrilla</li>
                    <li>Pileta</li>
                    <li>Solarium</li>
                    <li>Superficie Semicubierta (m²): 0</li>
                </ul>
            </div>
            <div id="environments" class="tab-content">
                <p>Contenido 'Ambientes'</p>
            </div>
            <div id="characteristics" class="tab-content">
                <p>Contenido 'Características'</p>
            </div>
        </section>
        <div class="map">
                    <iframe src="https://maps.google.com/?q=<?=$data['address']; ?>&output=embed"></iframe>
        </div>
    </div>


    </div>    
    <footer>
    <div class="footer-content">
            <div class="contact-info">
                <p><i class='bx bx-home-alt'></i> Libertad 1269 Piso 10 Dpto. A CABA</p>
                <p><i class="bx bx-envelope"></i> martinpiccardo@piccardopropiedades.com</p>
                <p><i class="bx bx-mobile"></i> +54 9 1162085380</p>
            </div>
            <div class="logo-social">
                <img src="assets\images\piccard-comp-white.webp"
                   alt="Piccardo Propiedades Logo-f" class="logo-f">
                
                <div class="social-media">
                  <a href="https://www.instagram.com/piccardo.propiedades/"><i class='bx bxl-instagram-alt'></i></a>
                  <a href="https://www.facebook.com/Piccardo-Propiedades-105944338553140"><i class='bx bxl-facebook-circle' ></i></a>
                  <a href="https://www.linkedin.com/company/piccardo-propiedades/"><i class='bx bxl-linkedin-square'></i></a>
                </div>
            </div>
            <div class="legal-info">
                <p>Mariela Susana Norberto<br>Matrícula CUCICBA 4642</p>
                <p><a href="#">Términos y Condiciones</a> | <a href="#">Políticas de Privacidad</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>2024 - Todos los Derechos Reservados</p>
        </div>
    </footer>
    <script src="script-menu.js"></script>
  </body>
</html>