<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título bonito</title>
</head>
<body>
<?php

$size = $_POST["size"];

echo "<table border='2'>";

for ($i = 0; $i < $size; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $size; $j++) {
        if ($i % 2 === $j % 2) {
<<<<<<< HEAD
             echo "<td>++</td>";
=======
            echo "<td><img src='../assets/blanco.png'></td>";
>>>>>>> tablero
        } else {
            echo "<td><img src='../assets/negro.png'></td>";
        }
    }

    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>

