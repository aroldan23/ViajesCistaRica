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
    <title>Saldo</title>
</head>
<body>
    <table>
        <tr>
            <th>Ganado</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'viajescostarica');
        $sql = "SELECT * FROM saldoC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["ganancias"] . "</td></tr>";
            };
        } else {
            echo "No hay resultados";
        }
        ?>
    </table>
    <a href="../PHP/chofer.php">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Volver
        </a>
</body>
</html>