<?php

require 'conBD.php';
$Email = $_POST['Email'];
$Clave = md5($_POST['Clave']);
$query = "SELECT * FROM  tblUsuario WHERE strEmail='$Email' AND strClave='$Clave'";
$consulta2 = conexionSQL($query);

if ($consulta2->num_rows >=1) {
    
    header("Location:Usuario.php");
    
} else {
    echo'Dato no encontrado ';
}

