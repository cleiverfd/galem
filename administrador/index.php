<?php 
    if($_POST){
        header('Location:inicio.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Tiendas Delgado -Login</title>
</head>

<body>
    <div class="container">
        <form action="inicio.php" method="get">
            <div class="card">
                <div class="card-header">
                    <h2>Administrador</h2>
                </div>
                <div class="card-main">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Contraseña" name="clave">
                </div>
                <div class="card-footer">
                    <button type="submit">INICIAR SESION</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>