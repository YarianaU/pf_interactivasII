<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casa Mia!</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <!-- AOS animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>
  <!-- nav menu -->
  <header>
    <div class="position-absolute top-0 start-0 pt-3 pb-3 ps-3 mobile-bar position-tab">
      <!-- <img class="mobile-icon" src="./icons/bars.svg" alt="menu bar"> -->
      CASA MIA!
    </div>
    <!--  Menu navigation -->
    <nav id="navbar-main" class="navbar top-nav mobile-offcanvas navbar-expand-lg mx-auto color-light total-size">
      <div class="d-flex justify-content-between align-items-center ">
        <!-- <a href="index.html"><img src="./img/Logo.png" class="size position-relative ms-5 mobile-logo" alt="Graphic identifier"></a> -->
        CASA MIA!
        <div class="offcanvas-header"><button id="btn-close" class="btn btn-light float-end me-5">X</button></div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="top-nav-item"><a class="nav-link top-nav-link top-nav-item" aria-current="page" href="#">Contacto</a></li>
        </ul>
        <!-- <form class="d-flex search-nav ps-5 pe-5 ">
          <input class="form-control me-2 " type="text" placeholder="Buscar Recetas...">
          <a href="#"><img src="icons/lupa.png" alt="Lupa"></a>
        </form> -->
      </div>
      <!--  responsive part -->
    </nav>
  </header>
  <!-- nav menu -->

  <!-- carrusel -->
  <div>

  </div>
  <!-- carrusel -->

  <!-- top recetas -->
  <section>
    <div class="h4 pb-2 mb-4 color-green ">
      <h2 class="title-margin ps-5 pe-5">TOP 10 RECETAS</h2>
    </div>

    <div class="card-container">
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4>Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span>Almuerzo</span>
        <div class="d-flex justify-content-between"><button>Mas información</button><button>❤</button></div>
      </div>
    </div>

  </section>
  <!-- top recetas -->

  <!-- Footer -->
  <footer class="top-nav container-fluid footer">
    <div class="row footer-contacts ">

      <h4 class=" contacts-title color-w title-margin">CONTACTOS</h4>

      <ul class="text-center center-information d-flex justify-content-between w-50 m-auto">
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">sobre nosotros</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">sobre nosotros</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">sobre nosotros</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">sobre nosotros</a></li>
      </ul>

      <div class="legal-text social-media ms-1">
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/facebook.png" alt="facebook"></a>
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/instagram.png" alt="instagram"></a>
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/youtube.png" alt="youtube"></a>
        <div class="line btn-margin"></div>
        <h6 class="text-center color-w margin-text"> ©2022 Foodies. Todos los derechos reservados.</h6>
      </div>
    </div>
  </footer>
  <!-- Footer -->

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {

      AOS.init();

      document.querySelector('.mobile-icon').addEventListener('click', function(event) {
        console.log('click');
        document.getElementById('navbar-main').classList.add('show-nav');
      });

      document.querySelector('#btn-close').addEventListener('click', function(event) {
        document.getElementById('navbar-main').classList.remove('show-nav');
      });
    });
  </script>
</body>

</html>