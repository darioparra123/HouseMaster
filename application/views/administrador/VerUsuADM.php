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

        <div class="demo" >
            <table class="table" style="width: 100%;" >
                <tr>

                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>NUMERO</td>
                    <td>DIRECCION</td>

                </tr>
                <?php
                if ($enlaces != FALSE) {
                    foreach ($enlaces->result()as $row) {
                        echo '<tr>';
                        echo '<td>' . $row->id . '</td>';
                        echo '<td>' . $row->nombre . '</td>';
                        echo '<td>' . $row->numero . '</td>';
                        echo '<td>' . $row->direccion . '</td>';
                         echo "<td><a href=" .base_url() . "miControlador/editarUsuADM/" . $row->id . ">Editar</a></td> ";
                        echo "<td><a href=" . base_url() . "miControlador/eliminarUsuADM/" . $row->id . ">Eliminar</a></td>";

                        echo '</tr>';
                    }
                } else {
                    echo'no hay usuarios';
                }
                ?>

            </table>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="http://localhost/house/js/materialize.min.js"></script>


    </body>
</html>
