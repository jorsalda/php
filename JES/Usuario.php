<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="0">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                     <th>Clave</th>
                </tr>
            </thead>
            <tbody>
                <?php
        require 'Controlador/conBD.php';
        $query = "SELECT * FROM tblUsuario";
        $consulta = conexionSQL($query);
        while ($fila = $consulta->fetch_array(MYSQLI_NUM)) {
            echo "<tr>
        <td>" . $fila[0] . " </td>
        <td>" . $fila[1] . " </td>
        <td>" . $fila[2] . " </td>
        <td>" . $fila[3] . " </td>
        <td><a href = '#!'>Actualizar </a></td>
        <td><a href = '#!'>Elminar </a></td>
                </tr>";
        }
        ?>
            </tbody>
        </table>
    </body>
</html>