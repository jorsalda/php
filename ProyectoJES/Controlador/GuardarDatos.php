<?php
require 'conBD.php';

$Nomb=$_POST['nomb'];
$Ape=$_POST['Ape'];
$Email=$_POST['Email'];
$Clave= md5($_POST['Clave']);

$query="INSERT INTO tblUsuario (strNomb,strApe,strEmail,strClave)"
        . " VALUES('$Nomb','$Ape','$Email','$Clave')";

if(conexionSQL($query)){
    echo 'Datos gurdados';
}else{
    echo'Error al guardar datos';
} 
