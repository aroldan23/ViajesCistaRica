<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style_chofer.css">
    <title>Reportar Chofer</title>
</head>
<body>   
    <h1>Digite su reporte</h1>
    <div class="container">
    <form action="../PHP/repC.php" method="post">
    
    <div class="elemento">
        <label for="usuario">Nombre de usuario</label>
        <input type="text" class="usuario" id="usuario" name="usuario">


    <div class="elemento">
        <label for="descrip">Descripcion</label>
        <input type="text" class="descrip" id="descrip" name="descrip">

    <div class="Botones_adicionales">
        <input id="boton_limpiar" type="reset" value="Limpiar">
           <br>
           <input type="submit" class="btn_registrarme"/>
           
    </form>
</div>
<a href="../PHP/cliente.php">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Volver
        </a>
</body>
</html>