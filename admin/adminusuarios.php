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
    <title>Admin Usuarios</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>usuario</th>
            <th>rol</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'viajescostarica');
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>". $row["usuario"] . "</td><td>". $row["id_rol"] . "</td></tr>";
            };
        } else {
            echo "No hay resultados";
        }
        ?>
    </table>
    <a href="../PHP/admin.php">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Volver
        </a>
</body>
</html>