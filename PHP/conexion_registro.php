<?php
    $cedula     =   $_POST['cedula'];
    $nombre     =   $_POST['nombre'];
    $apellido   =   $_POST['apellido'];
    $usuario    =   $_POST['usuario'];
    $correo     =   $_POST['correo'];
    $contrasena =   $_POST['contrasena'];
    

    $conn = new mysqli('localhost', 'root', '', 'viajescostarica');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into usuarios(cedula,nombre, apellido, usuario, correo, contrasena)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss",$cedula,$nombre,$apellido,$usuario,$correo,$contrasena);
        $stmt->execute();
        echo "registration successfully";
        $stmt->close();
        $conn->close();
        header("location:../PHP/login.php");
    }

?>