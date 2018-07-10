<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <title>Menu Usuario</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <style>
            /* -------------------------------- 

Primary style

-------------------------------- */
            html * {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            *, *:after, *:before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            html, body {
                /* important for the full-width image to work */
                height: 100%;
            }

            body {
                font-size: 100%;
                font-family: "Ubuntu", sans-serif;
                background-color: #2e2d32;
            }

            a {
                color:#000 ;
                text-decoration: none;
            }

            /* -------------------------------- 
            
            Modules - reusable parts of our design
            
            -------------------------------- */
            .cd-container {
                /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
                width: 90%;
                max-width: 768px;
                margin: 0 auto;
            }
            .cd-container::after {
                /* clearfix */
                content: '';
                display: table;
                clear: both;
            }

            /* -------------------------------- 
            
            Main components 
            
            -------------------------------- */
            #cd-main-content {
                position: relative;
                height: 100%;
                overflow: hidden;
                background-color: #3a393f;
                /* slightly visible only when we resize this element */
                box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
                z-index: 1;
                /* Force Hardware Acceleration in WebKit */
                -webkit-transform: translateZ(0);
                -webkit-backface-visibility: hidden;
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                transition-property: transform;
                -webkit-transition-duration: 0.5s;
                -moz-transition-duration: 0.5s;
                transition-duration: 0.5s;
            }
            #cd-main-content.move-out {
                -webkit-transform: scale(0.6);
                -moz-transform: scale(0.6);
                -ms-transform: scale(0.6);
                -o-transform: scale(0.6);
                transform: scale(0.6);
            }
            .no-js #cd-main-content {
                height: auto;
                overflow-x: auto;
                overflow-y: auto;
            }

            #cd-intro {
                position: relative;
                height: 100%;
                background: url(http://localhost/house/images/casa1.jpg) no-repeat center center;
                background-size: cover;
            }
            #cd-intro h1 {
                position: absolute;
                width: 90%;
                left: 50%;
                top: 10%;
                bottom: auto;
                right: auto;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #000;
            }
            @media only screen and (min-width: 768px) {
                #cd-intro h1 {
                    font-size: 26px;
                    font-size: 1.625rem;
                }
            }
            .no-js #cd-intro {
                height: 640px;
            }

            .cd-header {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50px;
                z-index: 2;
                background: rgba(58, 57, 63, 0.6);
                -webkit-transition: background 0.2s;
                -moz-transition: background 0.2s;
                transition: background 0.2s;
            }
            @media only screen and (min-width: 768px) {
                .cd-header {
                    height: 80px;
                }
            }

            .cd-blurred-bg {
                /* we use jQuery to apply a mask to this element - CSS clip property */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/bg-img.jpg") no-repeat center center;
                background-size: cover;
                -webkit-filter: blur(4px);
                filter: blur(4px);
            }
            .no-js .cd-blurred-bg {
                display: none;
            }

            #cd-logo {
                position: absolute;
                left: 10px;
                top: 8px;
                width: 100px;
                height: 32px;
            }
            #cd-logo img {
                display: block;
            }
            @media only screen and (min-width: 768px) {
                #cd-logo {
                    left: 20px;
                    top: 24px;
                }
            }
            @media only screen and (min-width: 1170px) {
                #cd-logo {
                    left: 60px;
                }
            }

            .cd-menu-trigger {
                display: inline-block;
                position: absolute;
                right: 0;
                top: 0;
                height: 50px;
                line-height: 50px;
                padding: 0 .8em;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 14px;
                font-size: 0.875rem;
            }
            .cd-menu-trigger span {
                /* hamburger icon */
                position: relative;
                display: inline-block;
                width: 18px;
                height: 2px;
                background-color: #ffffff;
                vertical-align: middle;
                margin-left: 10px;
                -webkit-transform: translateY(-2px);
                -moz-transform: translateY(-2px);
                -ms-transform: translateY(-2px);
                -o-transform: translateY(-2px);
                transform: translateY(-2px);
            }
            .cd-menu-trigger span::before, .cd-menu-trigger span::after {
                content: '';
                display: inline-block;
                position: absolute;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: inherit;
                -webkit-transition: all 0.2s;
                -moz-transition: all 0.2s;
                transition: all 0.2s;
            }
            .cd-menu-trigger span::before {
                top: -6px;
            }
            .cd-menu-trigger span::after {
                bottom: -6px;
            }
            .no-touch .cd-menu-trigger:hover span::before {
                top: -8px;
            }
            .no-touch .cd-menu-trigger:hover span::after {
                bottom: -8px;
            }
            @media only screen and (min-width: 768px) {
                .cd-menu-trigger {
                    top: 16px;
                    right: 10px;
                    font-size: 16px;
                    font-size: 1rem;
                }
            }
            @media only screen and (min-width: 1170px) {
                .cd-menu-trigger {
                    right: 60px;
                }
            }

            #main-nav {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #eeecf5;
                /* Force Hardware Acceleration in WebKit */
                -webkit-transform: translateZ(0);
                -webkit-backface-visibility: hidden;
                /* we move this element off the canvas */
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                transition-property: transform;
                -webkit-transition-duration: 0.5s;
                -moz-transition-duration: 0.5s;
                transition-duration: 0.5s;
                z-index: 3;
            }
            #main-nav ul {
                height: 100%;
            }
            #main-nav li {
                height: 20%;
            }
            #main-nav li a {
                position: relative;
                display: block;
                padding: 0 10%;
                height: 100%;
                border-bottom: 1px solid #dfdbec;
                color: #3a393f;
                font-size: 20px;
                font-size: 1.25rem;
                font-weight: bold;
            }
            #main-nav li a span {
                position: absolute;
                left: 50%;
                top: 50%;
                bottom: auto;
                right: auto;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
            }
            .no-touch #main-nav li a:hover {
                background-color: #FFF;
            }
            #main-nav li:last-child a {
                border-bottom: none;
            }
            #main-nav .cd-close-menu {
                position: absolute;
                top: 0;
                right: 0;
                display: inline-block;
                width: 40px;
                height: 40px;
                background-color: #d26c64;
                /* image replacement */
                overflow: hidden;
                text-indent: 100%;
                white-space: nowrap;
            }
            #main-nav .cd-close-menu::before, #main-nav .cd-close-menu::after {
                content: '';
                display: inline-block;
                position: absolute;
                top: 18px;
                left: 10px;
                width: 20px;
                height: 3px;
                background-color: #FFF;
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                transition-property: transform;
                -webkit-transition-duration: 0.3s;
                -moz-transition-duration: 0.3s;
                transition-duration: 0.3s;
            }
            #main-nav .cd-close-menu::before {
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
            }
            #main-nav .cd-close-menu::after {
                -webkit-transform: rotate(135deg);
                -moz-transform: rotate(135deg);
                -ms-transform: rotate(135deg);
                -o-transform: rotate(135deg);
                transform: rotate(135deg);
            }
            .no-touch #main-nav .cd-close-menu:hover::before {
                -webkit-transform: rotate(225deg);
                -moz-transform: rotate(225deg);
                -ms-transform: rotate(225deg);
                -o-transform: rotate(225deg);
                transform: rotate(225deg);
            }
            .no-touch #main-nav .cd-close-menu:hover::after {
                -webkit-transform: rotate(315deg);
                -moz-transform: rotate(315deg);
                -ms-transform: rotate(315deg);
                -o-transform: rotate(315deg);
                transform: rotate(315deg);
            }
            #main-nav.is-visible {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
            .no-js #main-nav {
                position: static;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
            .no-js #main-nav .cd-close-menu {
                display: none;
            }

            .cd-shadow-layer {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background: rgba(0, 0, 0, 0.4);
                z-index: 2;
                opacity: 0;
                visibility: hidden;
                -webkit-transition: visibility 0s 0.5s, opacity 0.5s 0s;
                -moz-transition: visibility 0s 0.5s, opacity 0.5s 0s;
                transition: visibility 0s 0.5s, opacity 0.5s 0s;
            }
            .cd-shadow-layer.is-visible {
                opacity: 1;
                visibility: visible;
                -webkit-transition-delay: 0s;
                -moz-transition-delay: 0s;
                transition-delay: 0s;
            }
            #cd-intro div#prenderluz {
                position: absolute;
                width: 10%;
                left: 25%;
                top: 50%;
                bottom: auto;
                right: auto;
                background-color: #00695c;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #ffffff;

            }
            #cd-intro div#apagarluz {
                position: absolute;
                width: 10%;
                left: 50%;
                top: 50%;
                background-color: #00695c;
                bottom: auto;
                right: auto;

                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #ffffff;

            }
            #cd-intro div#fecha {
                position: absolute;
                width: 15%;
                left: 75%;
                top: 50%;
                bottom: auto;
                right: auto;
                background-color: #00695c;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #ffffff;

            }
            #cd-intro div#guardarconf {
                position: absolute;
                width: 15%;
                left: 37%;
                top: 70%;
                bottom: auto;
                right: auto;
                background-color: #00695c;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #ffffff;

            }
            #cd-intro div#cancelar {
                position: absolute;
                width: 15%;
                left: 62%;
                top: 70%;
                bottom: auto;
                right: auto;
                background-color: #00695c;
                -webkit-transform: translateX(-50%) translateY(-50%);
                -moz-transform: translateX(-50%) translateY(-50%);
                -ms-transform: translateX(-50%) translateY(-50%);
                -o-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                font-size: 18px;
                font-size: 1.125rem;
                font-weight: bold;
                color: #ffffff;

            }


        </style>

    </head>

    <body >

        <main id="cd-main-content">
            <section id="cd-intro">
                <h1>Configuracion de luz</h1>
                <div class="row">

                    <div id="prenderluz" class="col s12 m6">
                        <div class="card blue-grey darken-1">

                            <div class="card-stacked">
                                <div class="card-content">
                                    <br>
                                    <p>Ingresar hora para prender la luz</p>
                                </div>
                                <br>
                                <input type="time" class="login__input pass" placeholder="Ingresar hora" name="luzopen"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div id="apagarluz" class="col s12 m6">
                        <div class="card blue-grey darken-1">

                            <div class="card-stacked">
                                <div class="card-content">
                                    <br>
                                    <p>Ingresar hora para apagar la luz</p>
                                </div>
                                <br>
                                <input type="time" class="login__input pass" placeholder="Ingresar hora" name="luzclose"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div id="fecha" class="col s12 m6">
                        <div class="card blue-grey darken-1">

                            <div class="card-stacked">
                                <div class="card-content">
                                    <br>
                                    <p>Ingresar fecha</p>
                                </div>
                                <br>
                                <input type="date" class="login__input pass" placeholder="Ingresar hora" name="luzclose"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div id="guardarconf" class="col s12 m6">


                        <button>Guardar Configuracion</button>




                    </div>
                </div>
                   <div class="row">

                    <div id="cancelar" class="col s12 m6">


                        <button type="submit" class="login__submit">
                               
                                    <a href="cancelarluz">Cancelar</a>
                                    </button>



                    </div>
                </div>













                <header class="cd-header">

                    <div id="cd-logo"><a href="#0"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_2.svg" alt="Logo"></a></div>
                    <a class="cd-menu-trigger" href="#main-nav">Menu<span></span></a>
                </header>


            </section> <!-- cd-intro -->
        </main>

        <div class="cd-shadow-layer"></div>

        <nav id="main-nav">
            <ul>
                <li><a href="controldeluz"><span>Control de luces</span></a></li>

                <li><a href="controldecamara"><span>Control de camara de seguridad</span></a></li>
                <li><a href="galeriadeimagenes"><span>Galeria de imagenes</span></a></li>
                <li><a href="cerrarsesion"><span>Cerrar Sesion</span></a></li>
            </ul>
            <a href="#0" class="cd-close-menu">Close<span></span></a>
        </nav>


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="http://localhost/house/js/index_1.js"></script>

    </body>

</html>