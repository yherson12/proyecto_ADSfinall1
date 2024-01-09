<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo2.css">
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
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_de_Running_Adidas_Adizero_SL_Negro_HQ1342_01_standard correr.jpg" alt="" class="img-item">
                <span class="precio-item">15.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">English Horse</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Adizero_Boston_12_Negro_HQ2171_01_standard correr2.jpg" alt="" class="img-item">
                <span class="precio-item">25.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Knock Nap</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Adizero_Adios_Pro_3_W_Negro_ID8474_01_standard correr3.jpg" alt="" class="img-item">
                <span class="precio-item">35.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">La Night</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Questar_Rosado_IF2243_01_standard correr4.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Silver All</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Solarglide_6_Azul_IF4857_HM1 correr5.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Skin Glam</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Supernova_2.0_Naranja_GV9028_01_standard correr6.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Midimix</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Duramo_Speed_Turquesa_IF7272_01_standard correr7.jpg" alt="" class="img-item">
                <span class="precio-item">54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Sir Blue</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Adizero_Boston_11_Turquesa_GV9064_01_standard correr 8.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Middlesteel</span>
                <img src="/punto-de-venta-pagina-web-master/pagina/css/img/Zapatillas_Ultraboost_Light_Naranja_HQ6341_01_standard correr9.jpg" alt="" class="img-item">
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