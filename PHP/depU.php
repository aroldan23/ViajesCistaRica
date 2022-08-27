<?php
    $dinero    =   $_POST['dinero'];
    





    $conn = new mysqli('localhost', 'root', '', 'viajescostarica');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into monedero(dinero)
        values(?)");
        $stmt->bind_param("s",$dinero);
        $stmt->execute();
        echo "Reporte Exitoso";
        $stmt->close();
        $conn->close();
        header("location:../usuario/monedero.php");
    }

?>