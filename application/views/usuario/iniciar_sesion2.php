<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>House Master</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="http://localhost/house/css/style.css">
        <style>
            .demo {
                position: absolute;
                top: 50%;
                left: 40%;
                margin-left: -15rem;
                margin-top: -26.5rem;
                width: 30rem;
                height: 53rem;
                overflow: hidden;
            }

            .demoadm {
                position: absolute;
                top: 50%;
                left: 60%;
                margin-left: -15rem;
                margin-top: -26.5rem;
                width: 30rem;
                height: 53rem;
                overflow: hidden;
            }



            .loginadm {
                position: relative;
                height: 100%;
                background: linear-gradient(to bottom, rgba(146, 135, 187, 0.8) 0%, rgba(0, 0, 0, 0.6) 100%);
                transition: opacity 0.1s, -webkit-transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
                transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
                transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25), -webkit-transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            .login.inactiveadm {
                opacity: 0;
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }
            .login__checkadm {
                position: absolute;
                top: 16rem;
                left: 13.5rem;
                width: 14rem;
                height: 2.8rem;
                background: #fff;
                -webkit-transform-origin: 0 100%;
                transform-origin: 0 100%;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            .login__checkadm:before {
                content: "";
                position: absolute;
                left: 0;
                bottom: 100%;
                width: 2.8rem;
                height: 5.2rem;
                background: #fff;
                box-shadow: inset -0.2rem -2rem 2rem rgba(0, 0, 0, 0.2);
            }
            .login__formadm {
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
                height: 50%;
                padding: 1.5rem 2.5rem;
                text-align: center;
            }
            .login__rowadm {
                height: 5rem;
                padding-top: 1rem;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }
            .login__iconadm {
                margin-bottom: -0.4rem;
                margin-right: 0.5rem;
            }
            .login__icon.name path {
                stroke-dasharray: 73.50196075439453;
                stroke-dashoffset: 73.50196075439453;
                -webkit-animation: animatePath 2s 0.5s forwards;
                animation: animatePath 2s 0.5s forwards;
            }
            .login__icon.pass path {
                stroke-dasharray: 92.10662841796875;
                stroke-dashoffset: 92.10662841796875;
                -webkit-animation: animatePath 2s 0.5s forwards;
                animation: animatePath 2s 0.5s forwards;
            }
            .login__input {
                display: inline-block;
                width: 22rem;
                height: 100%;
                padding-left: 1.5rem;
                font-size: 1.5rem;
                background: transparent;
                color: #FDFCFD;
            }
            .login__submit {
                position: relative;
                width: 100%;
                height: 4rem;
                margin: 5rem 0 2.2rem;
                color: rgba(255, 255, 255, 0.8);
                background: #FF3366;
                font-size: 1.5rem;
                border-radius: 3rem;
                cursor: pointer;
                overflow: hidden;
                transition: width 0.3s 0.15s, font-size 0.1s 0.15s;
            }



        </style>
    </head>
    <body >
        <image src="images/casa1.jpg"/>
        <form  method="POST" action="http://localhost/house/index.php/miControlador/iniciar_sesion_post">
            <div class="demo">
                <div class="login">
                    <div class="login__check"></div>
                    <div class="login__form">
                        <div class="login__row">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" class="login__input name" placeholder="Usuario" name="nombre"/>
                        </div>
                        <div class="login__row">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass" placeholder="Contraseña" name="contrasena"/>
                        </div>
                        <button type="submit" class="login__submit">Iniciar Sesion</button>
                    </div>
                </div>
            </div>
        </form>
        <form  method="POST" action="http://localhost/house/index.php/miControlador/loginadmin">
            <div class="demoadm">
                <div class="loginadm">
                    <div class="login__checkadm"></div>
                    <div class="login__formadm">
                        <div class="login__rowadm">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" class="login__input name" placeholder="Usuario" name="nombre"/>
                        </div>
                        <div class="login__row">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass" placeholder="Contraseña" name="contrasena"/>
                        </div>
                        <button type="submit" class="login__submit">Iniciar Sesion Administrador</button>
                    </div>
                </div>
            </div>
        </form>




        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/index.js"></script>
    </body>
</html>
