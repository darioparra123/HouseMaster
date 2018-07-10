<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="http://localhost/house/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
         <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">House Master ADM</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="CrearUsuarioAD">Crear Usuario</a></li>
                    <li><a href="VerUsuADM">Ver Usuarios</a></li>
                    
                </ul>
            </div>
        </nav>
        <form  method="POST" action="http://localhost/house/index.php/miControlador/crearUsuario">
            <div class="formulario">  

                <div class="form">

                    <input type="text" class="login__input name" placeholder="Nombre usuario" name="nombre"/>
                </div>
                <div class="form">

                    <input type="text" class="login__input name" placeholder="Numero Usuario" name="numero"/>
                </div>


                <div class="form">

                    <input type="text" class="login__input name" placeholder="Direccion usuario" name="direccion"/>
                </div>
                <div class="form">

                    <input type="password" class="login__input pass" placeholder="Contraseña usuario" name="contrasena"/>
                </div>
                <button type="submit" class="login__submit">Crear cuenta</button>





            </div>
        </form>



        <script type="text/javascript" src="http://localhost/house/js/materialize.min.js"></script>


    </body>
</html>
