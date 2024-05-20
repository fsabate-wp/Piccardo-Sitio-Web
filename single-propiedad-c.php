<?php
//$random = mt_rand(0, 400);
const API_KEY = "0e34db4a9d01fbb50f90b82443870ac54da3ece7";
const API_URL = "https://www.tokkobroker.com/api/v1/property/6084996/?key=0e34db4a9d01fbb50f90b82443870ac54da3ece7";
$result = file_get_contents(API_URL);
$data = json_decode($result, true);
//$codEmprendimiento = $data['development']['resource_uri'];
//$urlConsultaEmpre = '"https://www.tokkobroker.com' . $codEmprendimiento . '?key=' . API_KEY.'"';
//$resultEmpre = file_get_contents("https://www.tokkobroker.com/api/v1/development/56160/?key=0e34db4a9d01fbb50f90b82443870ac54da3ece7");
//$dataEmpre = json_decode($resultEmpre, true);
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
      <div class="canasta">
        <div class="manzanas">
          <img class="frutero" src="<?=$data['photos'][0]['image'] ?? $dataEmpre['photos'][0]['image']; ?>" alt="Imagen Principal">
          
        </div>
        <div class="peras">
          <div id="landingForm">
            <div class="titulo2"><h2>Contáctenos</h2></div>
              <div><label>Nombre:</label><input type="text" id="name"/></div>
              <div><label>Teléfono:</label><input type="text" id="phone"/></div>              
              <div><label>Email:</label><input type="text" id="email"/></div>
              <div><label>Mensaje:</label><textarea id="message"></textarea></div>
              <input class="btn-send" type="button" onclick="send()" value="Enviar"></div>
          </div>
        </div>
      </div>
      <div  class="thumbnail-container">
            <img src="<?=$data['photos'][1]['image'] ?? $dataEmpre['photos'][1]['image']; ?>" alt="Thumbnail 1" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][2]['image'] ?? $dataEmpre['photos'][2]['image']; ?>" alt="Thumbnail 2" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][3]['image'] ?? $dataEmpre['photos'][3]['image']; ?>" alt="Thumbnail 3" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][4]['image'] ?? $dataEmpre['photos'][4]['image']; ?>" alt="Thumbnail 4" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][5]['image'] ?? $dataEmpre['photos'][5]['image']; ?>" alt="Thumbnail 5" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][6]['image'] ?? $dataEmpre['photos'][6]['image']; ?>" alt="Thumbnail 6" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][7]['image'] ?? $dataEmpre['photos'][7]['image']; ?>" alt="Thumbnail 7" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][8]['image'] ?? $dataEmpre['photos'][8]['image']; ?>" alt="Thumbnail 8" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
            <img src="<?=$data['photos'][9]['image'] ?? $dataEmpre['photos'][9]['image']; ?>" alt="Thumbnail 9" class="thumbnail" onclick="changeImage('<?=$data['photos'][1]['image'] ?? ''; ?>')">
          </div>
      <div class="property-header">         
            <div class="property-info-single">
                <h1><?=$data['address'];?></h1>
                <span><?=$data['type']['name']; ?> - <?=$data['semiroofed_surface'];?>m² - 1 ambiente</span>
                <h2> <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
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
                Descripción completa de la propiedad....
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
                <p>Content under 'Ambientes'</p>
            </div>
            <div id="characteristics" class="tab-content">
                <p>Content under 'Características'</p>
            </div>
        </section>
        <div class="map">
                    <iframe src="https://maps.google.com/?q=<?=$data['address']; ?>&output=embed"></iframe>
        </div>
    </div>


    </div>    
    <footer>
      <div>
        <a href="">Piccardo Propiedades <i class='bx bx-copyright'></i> 2024</a>
      </div>
    </footer>
    <script src="script-menu.js"></script>
  </body>
</html>