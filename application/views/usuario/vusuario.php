<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Crear Usuario</h1>
        <form action="http://localhost/house/index.php/miControlador/crearUsuario" method="POST">
            <table>
                <tr>
                    <td><label>Nombre</label></td>
                    <td><input type="text" name="txtnombreusuario"></td>

                </tr>
                <tr>
                    <td><label>Apellido</label></td>
                    <td><input type="text" name="txtapellidousuario"></td>

                </tr>

                <tr>
                    <td><label>Contraseña</label></td>
                    <td><input type="password" name="txtcontraseñausuario"></td>

                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Crear"></td>

                </tr>
            </table>
        </form>
    </body>
</html>

