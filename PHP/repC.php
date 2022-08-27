<?php
    $usuario    =   $_POST['usuario'];
    $descrip     =   $_POST['descrip'];
    





    $conn = new mysqli('localhost', 'root', '', 'viajescostarica');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into reporteschofer(usuario, descrip)
        values(?, ?)");
        $stmt->bind_param("ss",$usuario,$descrip);
        $stmt->execute();
        echo "Reporte Exitoso";
        $stmt->close();
        $conn->close();
        header("location:../usuario/reportarUsuario.php");
    }

?>