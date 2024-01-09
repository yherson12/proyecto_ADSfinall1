<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>urban sole</title>
    

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/estyle.css" />
  </head>
  <body>
    <header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >

        
      <li class="nav nav-pills flex-column flex-sm-row">
        <a
          class="flex-sm-fill text-sm-center nav-link"
          class="dropdown-item"
          href="index.html"
          type="button"
          role="tab"
          >Atras</a
        >
      </li>
<!-- 
        <li class="nav-item text-primary" role="presentation">
          <a
            class="nav-link  "
            class="dropdown-item"
            href="nuevvo.html"
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-home"
            type="button"
            role="tab"
            aria-controls="pills-home"
            aria-selected="true"
            >Home</a
          >
        </li>-->
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>
    </header>

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carrito!
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      Producto removido!
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade "
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
        1
      </div>
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4 text-primary">Productos</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4" >

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 1</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/forun.jpg" class="card-img-top" alt="forun">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 100</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 2</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_adidas_Grand_Court_Lifestyle_Cierre_por_Contacto_Negro_HP8918_01_standard.jpg" class="card-img-top" alt="tabas">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 120</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 3</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/CAMPUS_00s_Azul.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 160</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 4</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Runfalcon_.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 70</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 5</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Questar_Negro.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 80</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 6</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_adidas_Grand_Court_Base.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 60</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 7</h5>
              <img src="css/img/Zapatillas_Rivalry_Low_Blanco.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 130</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Card title 8</h5>
              <img src="/punto-de-venta-pagina-web-master/pagina/css/img/basket.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio"> 250</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>

    <footer class="bg-dark p-3 mt-5">
      <p class="text-center m-0 text-muted">2023 Tienda de Zapatillas. Todos los derechos reservados.</p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>