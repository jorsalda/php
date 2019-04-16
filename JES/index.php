<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form aciton="index.php" method="POST" >
            <label>Email </label>  <input type="email" name="Email"> <br> <br>
            <label>Clave </label>  <input type="password" name="Clave"> <br> <br>
            <input type="submit" value="Ingresar" >
        </form>

        <?php
        if (isset($_POST['Email']) && isset($_POST['Clave'])) {          
            require_once "Controlador/login.php";
        }
        ?>
    </body>
</html>
