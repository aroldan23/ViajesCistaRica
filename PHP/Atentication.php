<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$connection = mysqli_connect("localhost","root","","viajescostarica");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($connection,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){
    header("location:cliente.php");
} else 

    if($filas['id_rol']==2){
        header("location:admin.php");
    }else
    if($filas['id_rol']==3){
        header("location:chofer.php");
     } else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1 class="Bad">ERROR AL VALIDAR</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
