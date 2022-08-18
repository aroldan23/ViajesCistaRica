<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Sregistro.css">
    <script src="../PHP/Autentication.js"></script>
    <title>Viajes CR</title>
</head>
<body>   
    <h1>Registrese</h1>
    <div class="container">
    <form action="../PHP/conexion_registro.php" method="post">
    
    <div class="elemento">
        <label for="cedula">Cedula</label>
        <input type="text" class="cedula" id="cedula" name="cedula">


    <div class="elemento">
        <label for="nombre">Nombre</label>
        <input type="text" class="nombre" id="nombre" name="nombre">


    <div class="elemento">
    <label for="apellido">Apellido</label>
    <input type="text" class="apellido" id="apellido" name="apellido">
    

    <div class="elemento">
    <label for="usuario">Nombre de usuario</label>
    <input type="text" class="usuario" id="usuario" name="usuario">


    <div class="elemento">
    <label for="correo">Correo</label>
    <input type="text" class="correo" id="correo" name="correo">
    

    <div class="elemento">
    <label for="contrasena">Contraseña</label>
    <input type="password" class="contrasena" id="contrasena" name="contrasena">

    <div class="Botones_adicionales">
        <input id="boton_limpiar" type="reset" value="Limpiar">
           <br>
           <p class="login-register-text">Tiene cuenta? <a href="login.php">Ingrese aqui</a>.</p>
           <input type="submit" class="btn_registrarme"/>
           
       </form>
</div>
</body>
</html>