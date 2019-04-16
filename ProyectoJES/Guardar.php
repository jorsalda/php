<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <form action="Controlador/GuardarDatos.php" method="POST" >
            <table border="0">
                <thead>
                    <tr>
                        <tr>Ingresar Usuario</tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="nomb"> </td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td><input type="text" name="Ape"> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="Email"> </td>
                    </tr>
                    <tr>
                        <td>Clave</td>
                        <td><input type="password" name="Clave"> </td>
                    </tr>
                <td colspan="2" aling="center"><input type="submit" value=Insertar"></td>
                </tbody>
            </table>

        </form>

       
    </body>
</html>

