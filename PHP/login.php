<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style_login.css">
    <title>Viajes CR</title>
</head>
<body>
    <h1>Viajes CR</h1>
    <div class="container">
    <form action="../PHP/Atentication.php" method="post"> 
        
    <div class="elementoA">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required="true">
</div>
  
    <div class="elementoA">
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" required="true">
</div>

    <div class="elemento" id="ingreso">
        <input id="ingresar"  type="submit">
</div>
    <div class="Botones_adicionales">
        <input id="boton_recuperacion_contrasenna" onclick="recuperacionContrasenna()" type="button" value="recuperacion de contrasenna">
        <br>
        <input id="boton_limpiar" type="reset" value="Limpiar">
           <br>
           <p class="login-register-text">No tiene cuenta? <a href="registro.php">Ingrese aqui</a>.</p>
</div>
       </form>
</div>
</body>
</html>