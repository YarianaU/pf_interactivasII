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
      <span class="logo">CASA MIA!</span>
    </div>
    <!--  Menu navigation -->
    <nav id="navbar-main" class="navbar top-nav mobile-offcanvas navbar-expand-lg mx-auto color-light total-size">
      <div class="d-flex justify-content-between align-items-center ">
        <!-- <a href="index.html"><img src="./img/Logo.png" class="size position-relative ms-5 mobile-logo" alt="Graphic identifier"></a> -->
        <span class="logo">CASA MIA!</span>
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
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/salmon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/salmon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/salmon.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carrusel -->

  <hr class="mx-5 my-5">

  <!-- top recetas -->
  <section>
    <div class="h4 pb-2 mb-4 color-orange ">
      <h2 class="title-margin ps-5 pe-5 text-shadow">TOP 10 RECETAS</h2>
    </div>

    <div class="card-container">
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
      </div>
      <div class="card">
        <div class="image-container">
          <img src="./img/salmon.jpg" alt="Imagen 1" />
        </div>
        <h4 class="color-orange">Pasta en salas de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button">Mas información</button>
          <button class="border-0" id="like">
            <span>❤</span>
          </button>
          <button class="border-0 d-none" id="unlike">
            <span class="text-danger">❤</span>
          </button>
        </div>
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
    var likeButton = document.getElementById("like");
    var unlikeButton = document.getElementById("unlike");

    // Agregar controladores de eventos a los botones
    likeButton.addEventListener("click", function() {
      likeButton.classList.add("d-none");
      unlikeButton.classList.remove("d-none");
    });

    unlikeButton.addEventListener("click", function() {
      unlikeButton.classList.add("d-none");
      likeButton.classList.remove("d-none");
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init();
      // document.querySelector('.mobile-icon').addEventListener('click', function(event) {
      //   console.log('click');
      //   document.getElementById('navbar-main').classList.add('show-nav');
      // });

      document.querySelector('#btn-close').addEventListener('click', function(event) {
        document.getElementById('navbar-main').classList.remove('show-nav');
      });
    });
  </script>
</body>

</html>