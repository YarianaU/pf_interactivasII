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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    <div class="position-absolute top-0 start-0 pt-3 pb-3 ps-3 mobile-bar position-tab d-flex justify-content-between">
      <!-- <img class="mobile-icon" src="./icons/bars.svg" alt="menu bar"> -->
      <span class="logo">CASA MIA!</span>
      <div>
        <button class="header-button bg-orange">REGISTRO</button>
        <button class="header-button bg-olive">INGRESO</button>
      </div>
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
        <div>
          <button class="header-button bg-orange">REGISTRO</button>
          <button class="header-button bg-olive">INGRESO</button>
        </div>
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
        <img src="./img/salmon.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/salmon.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/salmon.jpg" class="d-block w-100 h-100" alt="...">
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar diam non risus porttitor. </p>
        <span class="color-green stretched-link">Almuerzo</span>
        <div class="d-flex justify-content-between btn-containers">
          <button class="card-button" data-bs-toggle="modal" data-bs-target="#recipeModal">Mas información</button>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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
        <h4 class="color-orange">Pasta en salsa de queso</h4>
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

      <ul class="text-center center-information d-xl-flex d-md-block justify-content-between w-50 m-auto mt-5">
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">Sobre nosotros</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">Ayuda</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">Desarrolladores</a></li>
        <li class="invisible-point mb-3 "><a class="footer-text contact-text color-w fs-5" href="#">Terminos y condiciones</a></li>
      </ul>

      <div class="legal-text social-media ms-1">
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/facebook.png" alt="facebook"></a>
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/instagram.png" alt="instagram"></a>
        <a href="#" class="social-media-link"><img class="icon-size red-margin social-media-img" src="./icons/youtube.png" alt="youtube"></a>
        <div class="line btn-margin"></div>
        <h6 class="text-center color-w margin-text"> ©2022 Casa Mia. Todos los derechos reservados.</h6>
      </div>
    </div>
  </footer>
  <!-- Footer -->

  <!-- Modal recetas -->
  <div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <button class="color-orange close-button" data-bs-dismiss="modal" aria-label="Close">X</button>
          <div class="d-flex">
            <img class="img-fluid" src="./img/salmon.jpg" alt="">
            <div class="p-3 d-block">
              <ul class="p-0 d-grid">
                <span>Preparación: <span>25 min</span></span>
                <span>Cocción: <span>10 min</span></span>
                <span>Tiempo Total: <span>35 min</span></span>
                <span>Porciones: <span>3 porciones</span></span>
                <span>Dificultad: <span>Facíl</span></span>
                <span>Destacada: <span>Si</span></span>
              </ul>
              <hr class="w-100">
              <div class="d-flex justify-content-between">
                <span class="fs-5 color-green">Almuerzo</span>
                <span class="fs-5 color-green">Verano</span>
              </div>
            </div>
          </div>
          <div>
            <h2>Pasta en salsa de queso</h2>
            <h4 class="color-green">Descripción</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate, suscipit labore ab modi assumenda,
              architecto atque dolores nostrum magnam consectetur quae velit?
              Vero nisi iure animi repellendus rerum voluptates quo.</p>
            <h4 class="color-green">Ingredientes</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate, suscipit labore ab modi assumenda,
              architecto atque dolores nostrum magnam consectetur quae velit?
              Vero nisi iure animi repellendus rerum voluptates quo.</p>
            <h4 class="color-green">Instrucciones</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate, suscipit labore ab modi assumenda,
              architecto atque dolores nostrum magnam consectetur quae velit?
              Vero nisi iure animi repellendus rerum voluptates quo.</p>
          </div>
          <button class="border-0 bg-white float-end" id="like">
            <span>❤</span> 35
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal recetas -->

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