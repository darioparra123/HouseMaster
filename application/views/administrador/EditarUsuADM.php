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
                <a href="#" class="brand-logo">House Master ADM Editar Usuario</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="CrearUsuarioAD">Crear Usuario</a></li>
                    <li><a href="VerUsuADM">Ver Usuarios</a></li>
                    
                </ul>
            </div>
        </nav>
        <form  method="POST" action="http://localhost/house/index.php/miControlador/editarUsuario">
            <div class="formulario">  

                <div class="form">
                    <h8><a>Nombre usuario</a></h8>

                    <input type="text" class="login__input name" placeholder="Nuevo Nombre" name="nombre" value="<?=$nombre?>"/>
                </div>
                <h8><a>Numero usuario</a></h8>
                <div class="form">

                    <input type="text" class="login__input name" placeholder="Nuevo numero" name="numero" value="<?=$numero?>"/>
                </div>

                <h8><a>Direccion usuario</a></h8>
                <div class="form">

                    <input type="text" class="login__input name" placeholder="Nueva Direccion " name="direccion" value="<?=$direccion?>"/>
                </div>
                <div class="form">
                    <h8><a>Contraseña usuario</a></h8>
                    <input type="password" class="login__input pass" placeholder="Nueva Contraseña" name="contrasena" value="<?=$contrasena?>"/>
                </div>
                <button type="submit" class="login__submit">Editar Usuario</button>





            </div>
        </form>



        <script type="text/javascript" src="http://localhost/house/js/materialize.min.js"></script>


    </body>
</html>
