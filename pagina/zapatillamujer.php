<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="css/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo1.css">
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
                <img src="css/img/Zapatillas_Forum_Mid_Blanco_FY7939_01_standard mujer 1.jpg" alt="" class="img-item">
                <span class="precio-item">15.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">English Horse</span>
                <img src="css/img/Zapatillas_Ozelia_Blanco_H04251_01_standard mujer2.jpg" alt="" class="img-item">
                <span class="precio-item">25.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Knock Nap</span>
                <img src="css/img/Zapatillas_Superstar_Blanco_IE9638_01_standard mujer3.jpg" alt="" class="img-item">
                <span class="precio-item">35.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">La Night</span>
                <img src="css/img/Zapatillas_Superstar_Bonega_2B_Rosado_IF7683_01_standard mujer4.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Silver All</span>
                <img src="css/img/Zapatillas_OZWEEGO_Negro_IE9637_01_standard mujer5.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Skin Glam</span>
                <img src="css/img/Zapatillas_Superstar_Millenicon_Beige_ID4263_01_standard mujer6.jpg" alt="" class="img-item">
                <span class="precio-item">18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Midimix</span>
                <img src="css/img/Zapatillas_Gazelle_Blanco_IE0546_01_standard mujer7.jpg" alt="" class="img-item">
                <span class="precio-item">54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Sir Blue</span>
                <img src="css/img/Zapatillas_Superstar_Beige_ID4683_01_standard mujer8.jpg" alt="" class="img-item">
                <span class="precio-item">32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Middlesteel</span>
                <img src="css/img/Zapatillas_Run_60s_2.0_Negro_FZ0961_01_standard mujer9.jpg" alt="" class="img-item">
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