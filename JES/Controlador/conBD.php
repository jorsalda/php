<?php
function conexionSQL($query) {
    $servername = "localhost";
    $database = "facturacion";
    $username = "root";
    $password = "1234";
    $conexion = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        die("Connection fallda: " . mysqli_connect_error());
    }
    $conexion->set_charset("utf8");
    $conexion->autocommit(FALSE);
    $conexion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if ($consulta = $conexion->query($query)) {
        if ($conexion->commit()) {
            echo"Datotos guradados conrectamente";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    } else {
        $conexion->rollback();
        echo "Error: " . $query. "<br>" . mysqli_error($conexion);
    }
    return $consulta;
}

mysqli_close($conexion);
?>