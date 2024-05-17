<?php
//$random = mt_rand(0, 400);
const API_URL = "https://www.tokkobroker.com/api/v1/property/5609294/?key=0e34db4a9d01fbb50f90b82443870ac54da3ece7";
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
      <section class="encabezado">       
       <div class="buscador">
        <h1>¡Encuentra tu propiedad ideal!</h1>
        <form action="#">
            <div class="flex-row">
                <label for="tipoOperacion" hidden>Tipo de Operación:</label>
                <select id="tipoOperacion" name="tipoOperacion">
                    <option value="alquiler">Alquiler</option>
                    <option value="venta">Venta</option>
                </select>
            </div>
            <div class="flex-row">
                <label for="tipoPropiedad" hidden>Tipo de Propiedad:</label>
                <select id="tipoPropiedad" name="tipoPropiedad">
                    <option value="">Tipo de Propiedad</option>
                    <option value="departamentos">Departamentos</option>
                    <option value="lotes">Lotes</option>
                    <option value="oficinas">Oficinas</option>
                    <option value="terrenos">Terrenos</option>
                    <option value="casas">Casas</option>
                    <option value="depositos">Depósitos</option>
                    <option value="locales">Locales</option>
                    <option value="edificios-en-block">Edificios en Block</option>
                    <option value="campos">Campos</option>
                    <option value="terrenos-industriales">Terrenos Industriales</option>
                </select>
            </div>
            <div class="flex-row">
                <label for="busqueda" hidden>Buscar:</label>
                <input type="text" id="busqueda" name="busqueda" placeholder="Ingrese su búsqueda">
            </div>
            <button type="submit">Buscar</button>
        </form>
    </div>
                   
      </section>
      <section class="contenido">
        <aside>
        <h3 class="title-aside">Operación</h3>
          <ul>           
           <li>Alquiler</li>
           <li>Venta</li>
          </ul>
          <h3 class="title-aside">Tipo de Propiedad</h3>
          <ul>           
           <li>Departamentos</li>
           <li>Lotes</li>
           <li>Oficinas </li>
           <li>Terrenos </li>
           <li>Casas </li>
           <li>Depósitos </li>
           <li>Locales</li>
           <li>Edificios en Block</li>
           <li>Campos</li>
           <li>Terrenos Industriales</li>
          </ul>
        </aside>
        <main>        
        <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][0]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][1]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][2]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][3]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][0]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][1]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][3]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][0]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][1]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][2]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][3]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>
         <article>
            <div class="badge">
              <?php if ($data['operations'][0]['operation_type'] === 'Sale'): ?>
                Venta
              <?php elseif ($data['operations'][0]['operation_type'] === 'Rent'): ?>
                Alquiler
              <?php endif; ?>
            </div>
            <img src="<?=$data['photos'][0]['image'] ?? ''; ?>" alt="Propiedad">            
            <div class="property-info">
              <h4><?=$data['address']; ?></h4>
              <div class="property-type">                
                <?php if ($data['type']['code'] === 'LA'): ?>
                  Terreno
                <?php else: ?>
                  <?php echo $data['type']['name']; ?>
                <?php endif; ?>
              </div>
              <div class="property-price"><h4><?php echo $data['operations'][0]['prices'][0]['currency'].$data['operations'][0]['prices'][0]['price']; ?></div>
            </div>
         </article>     
        </main>
      </section>
    </div>    
    <footer>
      <div>
        <a href="">Piccardo Propiedades <i class='bx bx-copyright'></i> 2024</a>
      </div>
    </footer>
    <script src="script-menu.js"></script>
  </body>
</html>
