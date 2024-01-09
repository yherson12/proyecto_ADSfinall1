<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tienda de Zapatillas</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="shortcut icon" href="css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/app.js" async></script>
</head>
<body>
    <header>
        <!--<nav class="navbar   " style="background-color: #333;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                Urbansole
              </a>
            </div>
          </nav>-->
        <h1>Bienvenido a Urbansole</h1>
        <p>Las mejores zapatillas al mejor precio</p>
        
        

      
    </header>

    

    <nav>
        <ul>
            <li><a href="/punto-de-venta-pagina-web-master/index.php">login</a></li>
            <li><a href="#categorias">Categorías</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#carrito">Carrito</a></li>
            <li id="cnt-icon-search"><i class="fas fa-search" id="icon-search"></i></li>
        </ul>
        
      
    </nav>
    <div id="ctn-bars-search">
      <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
  </div>

  <ul id="box-search">
    <li><a href="zapatilladeportiva.php"><i class="fas fa-search"></i>zapatilladeportiva</a></li>
    <li><a href="zapatillamujer.php"><i class="fas fa-search"></i>zapatillamujer</a></li>
    <li><a href="zapatillaniño.php"><i class="fas fa-search"></i>zapatillaniño</a></li>
    <li><a href="zapatillashombre.php"><i class="fas fa-search"></i>zapatillashombre</a></li>
    
</ul>

<div id="cover-ctn-search"></div>


    <section id="categorias">
        <h2>Categorías de Zapatillas</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a  class="nav-link active" aria-current="page" href="/punto-de-venta-pagina-web-master/pagina/zapatillashombre.php">Zapatillas para Hombre </a></li>
            <li class="nav-item"><a  class="nav-link active" aria-current="page" href="/punto-de-venta-pagina-web-master/pagina/zapatillamujer.php">Zapatillas para Mujer</a></li>
            <li class="nav-item"><a  class="nav-link active" aria-current="page" href="/punto-de-venta-pagina-web-master/pagina/zapatillaniño.php">Zapatillas para Niños</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/punto-de-venta-pagina-web-master/pagina/zapatilladeportiva.php">Zapatillas Deportivas</a></li>
        </ul>
    </section>
    
    <section class="contenedor">
        <h2>Zapatillas Destacadas</h2>
        <div class="contenedor-items">
        <div  class="item  producto">
            <img src="css/img/runing.jpg" class="img-item" alt="Zapatilla 1">
            <h3 class="titulo-item">Zapatilla de Running</h3>
            <p class="precio-item">79.999</p>
            <button  class="boton-item  btn btn-outline-secondary" >Añadir al carrito</button>
        </div>
        <div class=" item   producto">
            <img src="css/img/casual.jpeg" class="img-item" alt="Zapatilla 2">
            <h3 class="titulo-item">Zapatilla Casual</h3>
            <p class="precio-item">250.999</p>
            <button class="boton-item   btn btn-outline-secondary"  >Añadir al carrito</button>
        </div>
      </div>
    </section>

    <div id="carouselExampleCaptions" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="css/img/Adizero_Boston_12_Negro_HQ2171_01_standard correr2.avif" class=" img-item d-block w-100"  alt="zapatilla correr">
            <div class=" carousel-caption d-none d-md-block">
              <h3  class="titulo-item" style="color: black; ">Zapatilla de Running</h3>
              <p class="precio-item" style="color: black; ">Precio: 79.99</p>
            <button  class="boton-item btn btn-outline-secondary" >Añadir al carrito</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="css/img/Zapatillas_adidas_Grand_Court_Base.avif" class=" img-item   d-block w-100"   alt="zapatilla para lo cotidiano">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="titulo-item" style="color: black;  ">Zapatilla Casual</h3>
              <p class="precio-item" style="color: black; ">Precio: 99.999</p>
              <button class="boton-item  btn btn-outline-secondary"  >Añadir al carrito</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="css/img/CAMPUS_00s_Azul.avif" class=" img-item d-block w-100"  alt="zapatilla para jugar basquet">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="titulo-item"  style="color: black;  ">Zapatilla basquet</h3>
              <p class="precio-item" style="color: black; ">Precio: 250.999</p>
              <button  class="boton-item  btn btn-outline-secondary">Añadir al carrito</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button  class="carousel-control-next" type="button"  data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Sección de Contacto -->
<section id="contacto">
    <h2>Contacto</h2>
    <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos.</p>
    <form id="formulario-contacto">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>


    <section>
        <div class="carrito" id="carrito">
          <div class="header-carrito">
              <h2>Tu Carrito</h2>
          </div>
             
          <div class="carrito-items">
              <!-- 
              <div class="carrito-item">
                  <img src="img/runing.jpg" width="80px" alt="">
                  <div class="carrito-item-detalles">
                      <span class="carrito-item-titulo">Zapatilla de Running</span>
                      <div class="selector-cantidad">
                          <i class="fa-solid fa-minus restar-cantidad"></i>
                          <input type="text" value="1" class="carrito-item-cantidad" disabled>
                          <i class="fa-solid fa-plus sumar-cantidad"></i>
                      </div>
                      <span class="carrito-item-precio">79.999,00</span>
                  </div>
                 <span class="btn-eliminar">
                      <i class="fa-solid fa-trash"></i>
                 </span>
              </div>
              <div class="carrito-item">
                  <img src="img/casual.jpeg" width="80px" alt="">
                  <div class="carrito-item-detalles">
                      <span class="carrito-item-titulo">Zapatilla Casual</span>
                      <div class="selector-cantidad">
                          <i class="fa-solid fa-minus restar-cantidad"></i>
                          <input type="text" value="3" class="carrito-item-cantidad" disabled>
                          <i class="fa-solid fa-plus sumar-cantidad"></i>
                      </div>
                      <span class="carrito-item-precio">99.999,00</span>
                  </div>
                 <button class="btn-eliminar">
                      <i class="fa-solid fa-trash"></i>
                 </button>
              </div>
              -->
          </div>
          <div class="carrito-total">
              <div class="fila">
                  <strong>Tu Total</strong>
                  <span class="carrito-precio-total">
                      120.000,00
                  </span>
              </div>
              <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
          </div>
      </div>
    </section>

    <footer>
        <p>&copy; 2023 Tienda de Zapatillas. Todos los derechos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>