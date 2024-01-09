<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/app.js" async></script>
    <title>URBANSOLE | </title>
</head>
<body>
    <header>
        <h1>Urbansole</h1>
        <p>Las mejores zapatillas al mejor precio</p>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Box Engasse</span>
                <img src="css/img/Zapatillas_Tensaur_Tira_Ajustable_de_Cierre_por_Contacto_Blanco_GW6468_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">15.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">English Horse</span>
                <img src="css/img/Zapatillas_Tensaur_Tira_Ajustable_de_Cierre_por_Contacto_Blanco_GW1988_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">25.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Knock Nap</span>
                <img src="css/img/Zapatillas_Tensaur_Run_Plomo_IF0355_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">35.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">La Night</span>
                <img src="css/img/Zapatillas_Tensaur_Run_Azul_GZ5858_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Silver All</span>
                <img src="css/img/Zapatillas_adidas_Grand_Court_Lifestyle_Cierre_por_Contacto_Negro_HP8918_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Skin Glam</span>
                <img src="css/img/Zapatillas_adidas_Grand_Court_x_Marvel_Spider-Man_Ninos_Blanco_IF9893_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Midimix</span>
                <img src="css/img/Zapatillas_Advantage_adidas_Court_Negro_GW6497_01_standard.jpg" alt="" class="img-item">
                <span class="precio-item">54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Sir Blue</span>
                <img src="css/img/Zapatillas_Gazelle_Rojo_IF5976_01_standard niño.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Middlesteel</span>
                <img src="css/img/STAN_SMITH_J_Blanco_ID7230_01_standard niño.jpg" alt="" class="img-item">
                <span class="precio-item">42.800</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">18.000,00</span>
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
</body>
</html>