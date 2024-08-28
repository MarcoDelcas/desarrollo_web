<html>

<head>

    <title>Registro Exitoso</title>
</head>
<body>
    <h1>Registro de usuarios</h1>
<br>

<?php
$fp = fopen("Registro.txt", "a");

$nombre = $_REQUEST['nombre'];
$ciudad = $_REQUEST['ciudad'];
$mascota = $_REQUEST['mascota'];

// Crear la estructura 
if (filesize("Registro.txt") == 0) {
    fprintf($fp, "| %-20s | %-20s | %-20s |\n", "Nombre", "Ciudad", "Mascota");
    fprintf($fp, str_repeat("-", 66) . "\n");
}

// Guardar los datos en la tabla
fprintf($fp, "| %-20s | %-20s | %-20s |\n", $nombre, $ciudad, $mascota);
fclose($fp);

echo "Se ha guardado $nombre, mascota: $mascota, ciudad: $ciudad <br>";
?>


<hr>

</body>
</html>









